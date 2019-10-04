<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Image;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function edit(User $user)
  {
    $user = Auth::user();
    return view('users.edit', compact('user'));
  }

  public function update(User $user, Request $request)
  {
    $data = $request->all();
    if ($data['birth_year'] && $data['birth_month'] && $data['birth_day']) {
      $data['birth'] = $data['birth_year'] . '-' . $data['birth_month'] . '-' . $data['birth_day'];
    }
    $request->replace($data);

    $account_name = Auth::user()->account_name;
    $this->validate($request, [
      // account_nameは自分以外で重複がチェック
      'account_name' => ['required', 'string', Rule::unique('users')->ignore($account_name, 'account_name')],
      'name' => 'nullable|string',
      'phone_number' => 'nullable|regex:/^[0-9]{2,4}-?[0-9]{3,4}-?[0-9]{3,4}$/',
      'sex' => 'required',
      'belonging_to' => 'nullable|string|max:255',
      'birth' => 'required|date',
      'birth_year' => 'required|numeric',
      'birth_month' => 'required|numeric',
      'birth_day' => 'required|numeric',

    ]);
    $user = Auth::user();
    $user->account_name = $request->input('account_name');
    $user->name = $request->input('name');
    $user->phone_number = $request->input('phone_number');
    $user->belonging_to = $request->input('belonging_to');
    $user->birthday = $request->birth;

    $user->save();

    return view('users.uploaded');
  }

  public function photo(Request $request)
  {
    $str =  str_random(7);
    $path = storage_path('app/public/img/');
    // $crop =  value(function () use ($request, $str) {

    // Laravelの場合は public_path()ヘルパー関数、Facadeが使えます
    $image = Image::make($request->get('img_file'));
    // $image = $request->all();
    // return $image;
    $image->crop(
      $request->get('image')['width'],
      $request->get('image')['height'],
      $request->get('image')['x'],
      $request->get('image')['y']
    )
      ->resize(256, 256) // 256 * 256にリサイズ
      // 画像の保存
      ->save($path . $str . '.jpg')
      ->resize(128, 128) //サムネイル用にリサイズ
      ->save($path . $str . '_t' . '.jpg');


    // 必要があれば元のファイルも消す
    /* Lumenの場合は bootstrap/app.phpに以下のコードを追加
                      * class_alias('Illuminate\Support\Facades\File', 'File');
                      */
    // \File::delete('Your image File);

    // return $image ?: false;
    // });

    // return $crop ? ['response' =>  true, 'img' => $str . '.jpg']
    //   : ['response' => false];
  }
}
