<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>DESIGN BOOK</title>
  <link rel="icon" type="image/gif" href="/storage/Logo.png">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">



  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
  <link href="{{ mix('css/croppie.css') }}" rel="stylesheet">
  <style>
    .btn,
    .navbar .navbar-nav>a.btn {
      border-width: 2px;
      font-weight: 400;
      font-size: 0.8571em;
      line-height: 1.35em;
      margin: 10px 1px;
      border: none;
      border-radius: 0.1875rem;
      padding: 11px 22px;
      cursor: pointer;
      background-color: #888888;
      color: #FFFFFF;
    }

    .btn:hover,
    .btn:focus,
    .btn:not(:disabled):not(.disabled):active,
    .btn:not(:disabled):not(.disabled).active,
    .btn:not(:disabled):not(.disabled):active:focus,
    .btn:not(:disabled):not(.disabled).active:focus,
    .btn:active:hover,
    .btn.active:hover,
    .navbar .navbar-nav>a.btn:hover,
    .navbar .navbar-nav>a.btn:focus,
    .navbar .navbar-nav>a.btn:not(:disabled):not(.disabled):active,
    .navbar .navbar-nav>a.btn:not(:disabled):not(.disabled).active,
    .navbar .navbar-nav>a.btn:not(:disabled):not(.disabled):active:focus,
    .navbar .navbar-nav>a.btn:not(:disabled):not(.disabled).active:focus,
    .navbar .navbar-nav>a.btn:active:hover,
    .navbar .navbar-nav>a.btn.active:hover {
      background-color: #979797;
      color: #FFFFFF;
      box-shadow: none;
    }

    .btn:hover,
    .navbar .navbar-nav>a.btn:hover {
      box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
    }

    .btn:disabled,
    .btn:disabled:hover,
    .btn:disabled:focus,
    .btn:disabled:active,
    .btn:disabled.active,
    .btn[disabled],
    .btn[disabled]:hover,
    .btn[disabled]:focus,
    .btn[disabled]:active,
    .btn[disabled].active,
    .navbar .navbar-nav>a.btn:disabled,
    .navbar .navbar-nav>a.btn:disabled:hover,
    .navbar .navbar-nav>a.btn:disabled:focus,
    .navbar .navbar-nav>a.btn:disabled:active,
    .navbar .navbar-nav>a.btn:disabled.active,
    .navbar .navbar-nav>a.btn[disabled],
    .navbar .navbar-nav>a.btn[disabled]:hover,
    .navbar .navbar-nav>a.btn[disabled]:focus,
    .navbar .navbar-nav>a.btn[disabled]:active,
    .navbar .navbar-nav>a.btn[disabled].active {
      background-color: #888888;
      border-color: #888888;
    }

    .btn:hover,
    .btn:focus,
    .navbar .navbar-nav>a.btn:hover,
    .navbar .navbar-nav>a.btn:focus {
      opacity: 1;
      filter: alpha(opacity=100);
      outline: 0 !important;
    }

    .btn:active,
    .btn.active,
    .navbar .navbar-nav>a.btn:active,
    .navbar .navbar-nav>a.btn.active {
      -webkit-box-shadow: none;
      box-shadow: none;
      outline: 0 !important;
    }

    .btn.btn-icon,
    .navbar .navbar-nav>a.btn.btn-icon {
      height: 2.375rem;
      min-width: 2.375rem;
      width: 2.375rem;
      padding: 0;
      font-size: 0.9375rem;
      overflow: hidden;
      position: relative;
      line-height: normal;
    }

    .btn.btn-icon.btn-lg,
    .navbar .navbar-nav>a.btn.btn-icon.btn-lg {
      height: 3.6rem;
      min-width: 3.6rem;
      width: 3.6rem;
    }

    .btn.btn-icon.btn-lg i.now-ui-icons,
    .btn.btn-icon.btn-lg i.fab,
    .navbar .navbar-nav>a.btn.btn-icon.btn-lg i.now-ui-icons,
    .navbar .navbar-nav>a.btn.btn-icon.btn-lg i.fab {
      font-size: 1.325rem;
    }

    .btn.btn-icon:not(.btn-footer) i.now-ui-icons,
    .btn.btn-icon:not(.btn-footer) i.fab,
    .navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) i.now-ui-icons,
    .navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) i.fab {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-12px, -12px);
      line-height: 1.5626rem;
      width: 23px;
    }

    .btn:not(.btn-icon) .now-ui-icons,
    .navbar .navbar-nav>a.btn:not(.btn-icon) .now-ui-icons {
      position: relative;
      top: 1px;
    }

    .btn-primary {
      background-color: #f96332;
      color: #FFFFFF;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .btn-primary:active:hover,
    .btn-primary.active:hover {
      background-color: #fa7a50;
      color: #FFFFFF;
      box-shadow: none;
    }

    .btn-primary:hover {
      box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
    }

    .btn-primary:disabled,
    .btn-primary:disabled:hover,
    .btn-primary:disabled:focus,
    .btn-primary:disabled:active,
    .btn-primary:disabled.active,
    .btn-primary[disabled],
    .btn-primary[disabled]:hover,
    .btn-primary[disabled]:focus,
    .btn-primary[disabled]:active,
    .btn-primary[disabled].active {
      background-color: #f96332;
      border-color: #f96332;
    }

    .btn-round {
      border-width: 1px;
      border-radius: 30px !important;
      padding: 11px 23px;
    }

    .btn-lg {
      font-size: 1em;
      border-radius: 0.25rem;
      padding: 15px 48px;
    }

    button,
    input {
      font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
    }

    h2,
    h3,
    h4,
    h5 {
      font-weight: 400;
    }

    a {
      color: #f96332;
    }

    a:hover,
    a:focus {
      color: #f96332;
    }

    h2,
    .h2 {
      font-size: 2.5em;
      margin-bottom: 30px;
    }

    h3,
    .h3 {
      font-size: 1.825em;
      margin-bottom: 30px;
      line-height: 1.4em;
    }

    h4,
    .h4 {
      font-size: 1.5em;
      line-height: 1.45em;
      margin-top: 30px;
      margin-bottom: 15px;
    }

    h4+.category,
    h4.title+.category,
    .h4+.category,
    .h4.title+.category {
      margin-top: -5px;
    }

    h5,
    .h5 {
      font-size: 1.3em;
      line-height: 1.4em;
      margin-bottom: 15px;
    }

    h5.category,
    .h5.category {
      font-weight: 400;
    }

    p {
      line-height: 1.61em;
      font-weight: 300;
      font-size: 1.2em;
    }

    .title {
      font-weight: 700;
      padding-top: 30px;
    }

    .title+.category {
      margin-top: -25px;
    }

    .description {
      color: #9A9A9A;
      font-weight: 300;
    }

    .category {
      text-transform: capitalize;
      font-weight: 700;
      color: #9A9A9A;
    }

    body {
      color: #2c2c2c;
      font-size: 14px;
      font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
      overflow-x: hidden;
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
    }

    .nav-pills .nav-link,
    .nav-item .nav-link,
    .navbar {
      -webkit-transition: all 300ms ease 0s;
      -moz-transition: all 300ms ease 0s;
      -o-transition: all 300ms ease 0s;
      -ms-transition: all 300ms ease 0s;
      transition: all 300ms ease 0s;
    }

    .dropdown-toggle:after,
    [data-toggle="collapse"][data-parent="#accordion"] i {
      -webkit-transition: transform 150ms ease 0s;
      -moz-transition: transform 150ms ease 0s;
      -o-transition: transform 150ms ease 0s;
      -ms-transition: all 150ms ease 0s;
      transition: transform 150ms ease 0s;
    }

    .dropdown-toggle[aria-expanded="true"]:after,
    [data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
      filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
      -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      transform: rotate(180deg);
    }

    .button-bar {
      display: block;
      position: relative;
      width: 22px;
      height: 1px;
      border-radius: 1px;
      background: #FFFFFF;
    }

    .button-bar+.button-bar {
      margin-top: 7px;
    }

    .button-bar:nth-child(2) {
      width: 17px;
    }

    .nav-pills.nav-pills-just-icons .nav-item .nav-link {
      text-align: center;
      border-radius: 50%;
      height: 80px;
      width: 80px;
      padding: 0;
      max-width: 80px;
      min-width: auto;
      margin-bottom: 4px;
    }

    .nav-pills.nav-pills-just-icons .nav-item .nav-link i {
      line-height: 80px;
    }

    .nav-pills:not(.flex-column) .nav-item:not(:last-child) .nav-link {
      margin-right: 19px;
    }

    .nav-pills .nav-item .nav-link {
      padding: 10px 23px;
      background-color: rgba(222, 222, 222, 0.3);
      min-width: 100px;
      font-weight: 400;
      text-align: center;
      color: #444;
    }

    .nav-pills .nav-item .nav-link:hover {
      background-color: rgba(222, 222, 222, 0.3);
    }

    .nav-pills .nav-item .nav-link.active,
    .nav-pills .nav-item .nav-link.active:focus,
    .nav-pills .nav-item .nav-link.active:hover {
      background-color: #9A9A9A;
      color: #FFFFFF;
      box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
    }

    .nav-pills .nav-item .nav-link:disabled,
    .nav-pills .nav-item .nav-link[disabled] {
      opacity: .5;
    }

    .nav-pills .nav-item i {
      display: block;
      line-height: 60px;
      font-size: 24px;
    }

    .nav-pills.nav-pills-primary .nav-item .nav-link.active,
    .nav-pills.nav-pills-primary .nav-item .nav-link.active:focus,
    .nav-pills.nav-pills-primary .nav-item .nav-link.active:hover {
      background-color: #f96332;
    }

    .nav-align-center {
      text-align: center;
    }

    .nav-align-center .nav-pills {
      display: inline-flex;
    }

    @font-face {
      font-family: 'Nucleo Outline';
      src: url("../fonts/nucleo-outline.eot");
      src: url("../fonts/nucleo-outline.eot") format("embedded-opentype"), url("../fonts/nucleo-outline.woff2") format("woff2"), url("../fonts/nucleo-outline.woff") format("woff"), url("../fonts/nucleo-outline.ttf") format("truetype");
      font-weight: normal;
      font-style: normal;
    }

    .now-ui-icons {
      display: inline-block;
      font: normal normal normal 14px/1 'Nucleo Outline';
      font-size: inherit;
      speak: none;
      text-transform: none;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    @-webkit-keyframes nc-icon-spin {
      0% {
        -webkit-transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
      }
    }

    @-moz-keyframes nc-icon-spin {
      0% {
        -moz-transform: rotate(0deg);
      }

      100% {
        -moz-transform: rotate(360deg);
      }
    }

    @keyframes nc-icon-spin {
      0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    .now-ui-icons.design_image:before {
      content: "\ea33";
    }

    .now-ui-icons.location_world:before {
      content: "\ea63";
    }

    .now-ui-icons.sport_user-run:before {
      content: "\ea60";
    }

    .navbar {
      padding-top: 0.625rem;
      padding-bottom: 0.625rem;
      min-height: 53px;
      margin-bottom: 20px;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
    }

    .navbar a {
      vertical-align: middle;
    }

    .navbar a:not(.btn):not(.dropdown-item) {
      color: #FFFFFF;
    }

    .navbar p {
      display: inline-block;
      margin: 0;
      line-height: 21px;
      font-weight: inherit;
      font-size: inherit;
    }

    .navbar .navbar-nav .nav-link.btn {
      padding: 11px 22px;
    }

    .navbar .navbar-nav .nav-link.btn.btn-lg {
      padding: 15px 48px;
    }

    .navbar .navbar-nav .nav-link:not(.btn) {
      text-transform: uppercase;
      font-size: 0.7142em;
      padding: 0.5rem 0.7rem;
      line-height: 1.625rem;
    }

    .navbar .navbar-nav .nav-link:not(.btn) i.fab+p,
    .navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons+p {
      margin-left: 3px;
    }

    .navbar .navbar-nav .nav-link:not(.btn) i.fab,
    .navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
      font-size: 18px;
      position: relative;
      top: 3px;
      text-align: center;
      width: 21px;
    }

    .navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
      top: 4px;
      font-size: 16px;
    }

    .navbar .navbar-nav .nav-item.active .nav-link:not(.btn),
    .navbar .navbar-nav .nav-item .nav-link:not(.btn):focus,
    .navbar .navbar-nav .nav-item .nav-link:not(.btn):hover,
    .navbar .navbar-nav .nav-item .nav-link:not(.btn):active {
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 0.1875rem;
    }

    .navbar .navbar-brand {
      text-transform: uppercase;
      font-size: 0.8571em;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      line-height: 1.625rem;
    }

    .navbar .navbar-toggler {
      width: 37px;
      height: 27px;
      outline: 0;
      cursor: pointer;
    }

    .navbar .navbar-toggler .navbar-toggler-bar.middle-bar {
      width: 17px;
      transition: width .2s linear;
    }

    .navbar .navbar-toggler:hover .navbar-toggler-bar.middle-bar {
      width: 22px;
    }

    .navbar .button-dropdown .navbar-toggler-bar:nth-child(2) {
      width: 17px;
    }

    .navbar.navbar-transparent {
      background-color: transparent !important;
      box-shadow: none;
      color: #FFFFFF;
      padding-top: 20px !important;
    }

    .bg-primary {
      background-color: #f96332 !important;
    }

    .dropdown-menu {
      border: 0;
      box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
      border-radius: 0.125rem;
      -webkit-transition: all 150ms linear;
      -moz-transition: all 150ms linear;
      -o-transition: all 150ms linear;
      -ms-transition: all 150ms linear;
      transition: all 150ms linear;
      font-size: 14px;
    }

    .dropdown .dropdown-menu {
      -webkit-transform: translate3d(0, -25px, 0) !important;
      -moz-transform: translate3d(0, -25px, 0) !important;
      -o-transform: translate3d(0, -25px, 0) !important;
      -ms-transform: translate3d(0, -25px, 0) !important;
      transform: translate3d(0, -25px, 0) !important;
      visibility: hidden;
      display: block;
      opacity: 0;
      filter: alpha(opacity=0);
      top: 100% !important;
    }

    .dropdown-menu .dropdown-item {
      font-size: 0.8571em;
      padding-top: .6rem;
      padding-bottom: .6rem;
      margin-top: 5px;
      -webkit-transition: all 150ms linear;
      -moz-transition: all 150ms linear;
      -o-transition: all 150ms linear;
      -ms-transition: all 150ms linear;
      transition: all 150ms linear;
    }

    .dropdown-menu .dropdown-item:hover,
    .dropdown-menu .dropdown-item:focus {
      background-color: rgba(222, 222, 222, 0.3);
    }

    .dropdown-menu .dropdown-item:disabled {
      color: rgba(182, 182, 182, 0.6);
    }

    .dropdown-menu .dropdown-item:disabled:hover,
    .dropdown-menu .dropdown-item:disabled:focus {
      background-color: transparent;
    }

    .dropdown-menu:before {
      display: inline-block;
      position: absolute;
      width: 0;
      height: 0;
      vertical-align: middle;
      content: "";
      top: -5px;
      left: 10px;
      right: auto;
      color: #FFFFFF;
      border-bottom: .4em solid;
      border-right: .4em solid transparent;
      border-left: .4em solid transparent;
    }

    .dropdown-menu .dropdown-divider {
      background-color: rgba(222, 222, 222, 0.5);
    }

    .dropdown-menu .dropdown-header:not([href]):not([tabindex]) {
      color: rgba(182, 182, 182, 0.6);
      font-size: 0.7142em;
      text-transform: uppercase;
      font-weight: 700;
    }

    .button-dropdown {
      padding-right: 0.7rem;
      cursor: pointer;
    }

    .button-dropdown .dropdown-toggle {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      display: block;
    }

    .button-dropdown .dropdown-toggle:after {
      display: none;
    }

    img {
      max-width: 100%;
      border-radius: 1px;
    }

    .img-raised {
      box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
    }

    .footer {
      padding: 24px 0;
    }

    .footer.footer-default {
      background-color: #f2f2f2;
    }

    .footer nav {
      display: inline-block;
      float: left;
    }

    .footer ul {
      margin-bottom: 0;
      padding: 0;
      list-style: none;
    }

    .footer ul li {
      display: inline-block;
    }

    .footer ul li a {
      color: inherit;
      padding: 0.5rem;
      font-size: 0.8571em;
      text-transform: uppercase;
      text-decoration: none;
    }

    .footer ul li a:hover {
      text-decoration: none;
    }

    .footer .copyright {
      font-size: 0.8571em;
    }

    .footer:after {
      display: table;
      clear: both;
      content: " ";
    }

    .profile-page .page-header {
      min-height: 550px;
    }

    .profile-page .photo-container {
      width: 123px;
      height: 123px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto;
      box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
    }

    .profile-page .title {
      text-align: center;
      margin-top: 30px;
    }

    .profile-page .description,
    .profile-page .category {
      text-align: center;
    }

    .profile-page h5.description {
      max-width: 700px;
      margin: 20px auto 75px;
    }

    .profile-page .nav-align-center {
      margin-top: 30px;
    }

    .profile-page .content {
      max-width: 450px;
      margin: 0 auto;
    }

    .profile-page .content .social-description {
      display: inline-block;
      max-width: 150px;
      width: 145px;
      text-align: center;
      margin: 15px 0 0px;
    }

    .profile-page .content .social-description h2 {
      margin-bottom: 15px;
    }

    .profile-page .button-container {
      text-align: center;
      margin-top: -106px;
    }

    .profile-page .collections img {
      margin-bottom: 30px;
    }

    .profile-page .gallery {
      margin-top: 45px;
      padding-bottom: 50px;
    }

    .profile-page .page-header:before {
      position: absolute;
      z-index: 0;
      width: 100%;
      height: 100%;
      display: block;
      left: 0;
      top: 0;
      content: "";
      background-color: rgba(0, 0, 0, 0.5);
    }

    .section {
      padding: 70px 0;
      position: relative;
      background: #FFFFFF;
    }

    .section .row+.category {
      margin-top: 15px;
    }

    .page-header {
      min-height: 100vh;
      max-height: 999px;
      padding: 0;
      color: #FFFFFF;
      position: relative;
      overflow: hidden;
    }

    .page-header>.content {
      margin-top: 12%;
      text-align: center;
      margin-bottom: 50px;
    }

    .page-header:before {
      background-color: rgba(0, 0, 0, 0.3);
    }

    .page-header>.container {
      z-index: 2;
      padding-top: 12vh;
      padding-bottom: 40px;
    }

    .page-header .page-header-image {
      position: absolute;
      background-size: cover;
      background-position: center center;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .page-header footer {
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    .page-header .container {
      height: 100%;
      z-index: 1;
      text-align: center;
      position: relative;
    }

    .page-header .category,
    .page-header .description {
      color: rgba(255, 255, 255, 0.8);
    }

    .page-header:after,
    .page-header:before {
      position: absolute;
      z-index: 0;
      width: 100%;
      height: 100%;
      display: block;
      left: 0;
      top: 0;
      content: "";
    }

    .clear-filter:after,
    .clear-filter:before {
      display: none;
    }

    .clear-filter[filter-color="orange"] {
      background: rgba(44, 44, 44, 0.2);
      background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
      background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
      background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
      background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
    }

    [data-background-color="orange"] {
      background-color: #e95e38;
    }

    [data-background-color="black"] {
      background-color: #2c2c2c;
    }

    [data-background-color]:not([data-background-color="gray"]) {
      color: #FFFFFF;
    }

    [data-background-color]:not([data-background-color="gray"]) .title,
    [data-background-color]:not([data-background-color="gray"]) .social-description h2,
    [data-background-color]:not([data-background-color="gray"]) p {
      color: #FFFFFF;
    }

    [data-background-color]:not([data-background-color="gray"]) h2,
    [data-background-color]:not([data-background-color="gray"]) h3,
    [data-background-color]:not([data-background-color="gray"]) h4,
    [data-background-color]:not([data-background-color="gray"]) h5,
    [data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item) {
      color: #FFFFFF;
    }

    [data-background-color]:not([data-background-color="gray"]) .description,
    [data-background-color]:not([data-background-color="gray"]) .social-description p {
      color: rgba(255, 255, 255, 0.8);
    }

    @media screen and (max-width: 991px) {
      .sidebar-collapse .navbar-collapse {
        position: fixed;
        display: block;
        top: 0;
        height: 100% !important;
        width: 300px;
        right: 0;
        z-index: 1032;
        visibility: visible;
        background-color: #999;
        overflow-y: visible;
        border-top: none;
        text-align: left;
        max-height: none !important;
        -webkit-transform: translate3d(300px, 0, 0);
        -moz-transform: translate3d(300px, 0, 0);
        -o-transform: translate3d(300px, 0, 0);
        -ms-transform: translate3d(300px, 0, 0);
        transform: translate3d(300px, 0, 0);
        -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
      }

      .sidebar-collapse .navbar-collapse:before {
        background: #f96332;
        background: -webkit-linear-gradient(#f96332 0%, #000 80%);
        background: -o-linear-gradient(#f96332 0%, #000 80%);
        background: -moz-linear-gradient(#f96332 0%, #000 80%);
        background: linear-gradient(#f96332 0%, #000 80%);
        opacity: 0.76;
        filter: alpha(opacity=76);
        display: block;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
      }

      .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link {
        margin: 0 1rem;
        margin-top: 0.3125rem;
      }

      .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
        color: #FFFFFF !important;
      }

      .sidebar-collapse .navbar-collapse .dropdown-menu .dropdown-item {
        color: #FFFFFF;
      }

      .sidebar-collapse .navbar .navbar-nav {
        margin-top: 53px;
        position: relative;
        max-height: calc(100vh - 75px);
        min-height: 100%;
        overflow: auto;
      }

      .sidebar-collapse .navbar .dropdown .dropdown-menu {
        background-color: transparent;
        border: 0;
        transition: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        width: auto;
        margin: 0 1rem;
        margin-bottom: 15px;
        padding-top: 0;
        height: 125px;
        overflow-y: scroll;
      }

      .sidebar-collapse .navbar .dropdown .dropdown-menu:before {
        display: none;
      }

      .sidebar-collapse .navbar .dropdown .dropdown-item {
        padding-left: 2.5rem;
      }

      .sidebar-collapse .navbar .dropdown .dropdown-menu {
        display: none;
      }

      .sidebar-collapse .navbar .dropdown-menu .dropdown-item:focus,
      .sidebar-collapse .navbar .dropdown-menu .dropdown-item:hover {
        color: #FFFFFF;
        border-radius: 0.1875rem;
      }

      .sidebar-collapse .navbar .navbar-translate {
        width: 100%;
        position: relative;
        display: flex;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
        -ms-flex-align: center;
        align-items: center;
        -webkit-transform: translate3d(0px, 0, 0);
        -moz-transform: translate3d(0px, 0, 0);
        -o-transform: translate3d(0px, 0, 0);
        -ms-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0);
        -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
      }

      .sidebar-collapse .navbar .navbar-toggler-bar {
        display: block;
        position: relative;
        width: 22px;
        height: 1px;
        border-radius: 1px;
        background: #FFFFFF;
      }

      .sidebar-collapse .navbar .navbar-toggler-bar+.navbar-toggler-bar {
        margin-top: 7px;
      }

      .sidebar-collapse .top-bar {
        transform: rotate(0);
      }

      .sidebar-collapse .middle-bar {
        opacity: 1;
      }

      .sidebar-collapse .bottom-bar {
        transform: rotate(0);
      }

      .sidebar-collapse .top-bar,
      .sidebar-collapse .middle-bar,
      .sidebar-collapse .bottom-bar {
        transition: all 0.2s;
      }

      .sidebar-collapse [class*="navbar-expand-"] .navbar-collapse {
        width: 300px;
      }

      .sidebar-collapse .wrapper {
        -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
      }

      .navbar-nav .nav-link i.fab,
      .navbar-nav .nav-link i.now-ui-icons {
        opacity: .5;
      }

      .button-dropdown {
        display: none;
      }

      .footer .copyright {
        text-align: right;
      }

      .navbar-nav .nav-link i.now-ui-icons {
        opacity: .5;
      }
    }

    @media screen and (min-width: 992px) {
      .navbar-collapse:not(.has-image) {
        background: transparent !important;
      }

      .navbar-nav .nav-link.btn:not(.btn-sm) {
        margin: 0;
      }

      .navbar-nav .nav-item:not(:last-child) {
        margin-right: 5px;
      }

      .dropdown-menu .dropdown-item {
        color: inherit;
        display: flex;
        align-items: center;
      }

      .dropdown-menu .dropdown-item i {
        margin-right: 5px;
        position: relative;
        top: 1px;
      }

      .footer .copyright {
        float: right;
      }
    }

    @media screen and (max-width: 576px) {
      .navbar[class*='navbar-expand-'] .container {
        margin-left: 0;
        margin-right: 0;
      }

      .footer .copyright {
        text-align: center;
      }
    }

    @media (max-width: 768px) {
      .btn {
        margin-bottom: 10px;
      }
    }

    #navbar .navbar {
      margin-bottom: 20px;
    }

    #navbar .navbar-toggler {
      pointer-events: none;
    }

    @font-face {
      font-family: 'Nucleo Outline';
      src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot");
      src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot") format("embedded-opentype");
      src: url("https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/fonts/nucleo-outline.woff2");
      font-weight: normal;
      font-style: normal;

    }

    .now-ui-icons {
      display: inline-block;
      font: normal normal normal 14px/1 'Nucleo Outline';
      font-size: inherit;
      speak: none;
      text-transform: none;
      /* Better Font Rendering */
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .sidebar {
      display: none;
      margin-top: 5rem;
    }

    @media screen and (min-width: 768px) {
      .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        display: block;
        overflow-x: hidden;
        overflow-y: auto;
      }
    }

    .card {
      width: 264px;
      height: 264px;
      border: none;
      border-radius: 0;
      margin: 1rem;
    }

    .image {
      overflow: hidden;
      width: 264px;
      height: 210px;
    }

    .image img {
      display: block;
      transition-duration: 0.3s;
      height: 100%;
      border: none;
      margin: auto;
    }

    .image img:hover {
      transform: scale(1.1);
      transition-duration: 0.3s;
    }

    .img-thumbnail {
      padding: 0;
      border-radius: 0;
    }

    .card-body {
      width: 264px;
      height: 54px;
      padding: 0.5rem;
    }
  </style>
</head>

<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
  <div id="app">
    <div class="wrapper">
      <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image:url('https://images.unsplash.com/photo-1476984251899-8d7fdfc5c92c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3700&q=80');"></div>
        <div class="container">
          <div class="photo-container">
            <img src="/storage/brand_icon/32/32_avatar.png" />
          </div>
          <h3 class="title">Ryan Scheinder</h3>
          <p class="category">Photographer</p>
          <div class="content">
            <div class="social-description">
              <h2>26</h2>
              <p>Comments</p>
            </div>
            <div class="social-description">
              <h2>26</h2>
              <p>Comments</p>
            </div>
            <div class="social-description">
              <h2>48</h2>
              <p>Bookmarks</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container">
            @if(Auth::user()->brand_id == null)
            <a href="#button" class="btn btn-primary btn-round btn-lg" data-toggle="modal" data-target="#brand-join">ブランド加入</a>
            @else
            <a href="#button" class="btn btn-primary btn-round btn-lg" data-toggle="modal" data-target="#brand-secede">脱会する</a>
            @endif
            <a href="#button" class="btn btn-success btn-round btn-lg">Follow</a>

            <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </div>

          <div class="modal fade" id="brand-join" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="">
                    ブランド加入
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>このブランドに加入しますか？</p>
                  <p><strong>{{ $brand->name }}</strong></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    キャンセル
                  </button>
                  {{-- 削除用のアクションを実行させるフォーム --}}
                  <form action="{{ route('users.joinBrand',['brand_id' => $brand->id]) }}" method="post">

                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">
                      加入する
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="brand-secede" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="">
                    ブランド脱会
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>本当に脱会してもよろしいですか？</p>
                  <p><strong>{{ $brand->name }}</strong></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    キャンセル
                  </button>
                  {{-- 削除用のアクションを実行させるフォーム --}}
                  <form action="{{ route('users.secedeBrand') }}" method="post">

                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">
                      脱会する
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <h3 class="title">About me</h3>
          <h5 class="description">An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</h5>

          <div class="col-md-6 ml-auto mr-auto">
            <h4 class="title text-center">My Portfolio</h4>
            <div class="nav-align-center">
              <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#profile" role="tablist">
                    <i class="now-ui-icons design_image"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#home" role="tablist">
                    <i class="now-ui-icons location_world"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                    <i class="now-ui-icons sport_user-run"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content gallery">
            <div class="tab-pane active" id="profile" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  @isset($brand->projects)
                  @foreach($brand->projects as $project)
                  <div class="card m-2">
                    <div class="image">
                      <a href="/project-detail?work={{ $project->id }}">
                        @if(preg_match("/^http/",$project->project_images[0]->image))
                        <img class="img img-thumbnail" src="{{ $project->project_images[0]->image }}">
                        @else
                        <img class="img img-thumbnail" src="/storage/{{ $project->project_images[0]->image }}">
                        @endif
                      </a>
                    </div>
                    <div class="card-body">
                      <p class="card-text">{{ $project->title }}</p>
                    </div>
                  </div>
                  @endforeach
                  @endisset
                </div>
              </div>
            </div>

            <div class="tab-pane" id="home" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  @isset($brand->products[0]->product_images[0]->image)
                  @foreach($brand->products as $product)
                  <div class="card m-2">
                    <div class="image">
                      <a href="/product-detail?work={{ $product->id }}">
                        @if(preg_match("/^http/",$product->product_images[0]->image))
                        <img class="img img-thumbnail" src="{{ $product->product_images[0]->image }}">
                        @else
                        <img class="img img-thumbnail" src="/storage/{{ $product->product_images[0]->image }}">
                        @endif
                      </a>
                    </div>
                    <div class="card-body">
                      <p class="card-text">{{ $product->title }}</p>
                    </div>
                  </div>
                  @endforeach
                  @endisset
                </div>
              </div>
            </div>

            <div class="tab-pane" id="messages" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg3.jpg" alt class="img-raised" />
                    <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg8.jpg" alt class="img-raised" />
                  </div>
                  <div class="col-md-6">
                    <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg7.jpg" alt class="img-raised" />
                    <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg6.jpg" class="img-raised" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-default">
        <div class="container">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">Creative Tim</a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">About Us</a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">Blog</a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            <p>
              Made with
              <a href="https://demos.creative-tim.com/now-ui-kit/index.html" target="_blank">Now UI Kit</a> by Creative Tim
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src=" {{ mix('js/app.js') }} "></script>
  <script src="{{ mix('js/croppie.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    var transparent = true;
    var big_image;

    var transparentDemo = true;
    var fixedTop = false;

    var navbar_initialized,
      backgroundOrange = false,
      toggle_initialized = false;

    var nowuiKit,
      $navbar,
      scroll_distance,
      oVal;

    $(document).ready(function() {
      //  Activate the Tooltips
      $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

      // Activate Popovers and set color for popovers
      $('[data-toggle="popover"]').each(function() {
        color_class = $(this).data('color');
        $(this).popover({
          template: '<div class="popover popover-' + color_class + '" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });
      });

      // Activate the image for the navbar-collapse
      nowuiKit.initNavbarImage();

      $navbar = $('.navbar[color-on-scroll]');
      scroll_distance = $navbar.attr('color-on-scroll') || 500;

      // Check if we have the class "navbar-color-on-scroll" then add the function to remove the class "navbar-transparent" so it will transform to a plain color.

      if ($('.navbar[color-on-scroll]').length != 0) {
        nowuiKit.checkScrollForTransparentNavbar();
        $(window).on('scroll', nowuiKit.checkScrollForTransparentNavbar)
      }

      $('.form-control').on("focus", function() {
        $(this).parent('.input-group').addClass("input-group-focus");
      }).on("blur", function() {
        $(this).parent(".input-group").removeClass("input-group-focus");
      });

      // Activate bootstrapSwitch
      $('.bootstrap-switch').each(function() {
        $this = $(this);
        data_on_label = $this.data('on-label') || '';
        data_off_label = $this.data('off-label') || '';

        $this.bootstrapSwitch({
          onText: data_on_label,
          offText: data_off_label
        });
      });

      if ($(window).width() >= 992) {
        big_image = $('.page-header-image[data-parallax="true"]');

        $(window).on('scroll', nowuiKitDemo.checkScrollForParallax);
      }

      // Activate Carousel
      $('.carousel').carousel({
        interval: 4000
      });

      $('.date-picker').each(function() {
        $(this).datepicker({
          templates: {
            leftArrow: '<i class="now-ui-icons arrows-1_minimal-left"></i>',
            rightArrow: '<i class="now-ui-icons arrows-1_minimal-right"></i>'
          }
        }).on('show', function() {
          $('.datepicker').addClass('open');

          datepicker_color = $(this).data('datepicker-color');
          if (datepicker_color.length != 0) {
            $('.datepicker').addClass('datepicker-' + datepicker_color + '');
          }
        }).on('hide', function() {
          $('.datepicker').removeClass('open');
        });
      });


    });

    // Javascript just for Demo purpose, remove it from your project
    nowuiKitDemo = {
      checkScrollForParallax: debounce(function() {
        var current_scroll = $(this).scrollTop();

        oVal = ($(window).scrollTop() / 3);
        big_image.css({
          'transform': 'translate3d(0,' + oVal + 'px,0)',
          '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
          '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
          '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
        });

      }, 6)

    }

    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.

    function debounce(func, wait, immediate) {
      var timeout;
      return function() {
        var context = this,
          args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
        }, wait);
        if (immediate && !timeout) func.apply(context, args);
      };
    };

    $(window).on('resize', function() {
      nowuiKit.initNavbarImage();
    });

    $(document).on('click', '.navbar-toggler', function() {
      $toggle = $(this);

      if (nowuiKit.misc.navbar_menu_visible == 1) {
        $('html').removeClass('nav-open');
        nowuiKit.misc.navbar_menu_visible = 0;
        $('#bodyClick').remove();
        setTimeout(function() {
          $toggle.removeClass('toggled');
        }, 550);
      } else {
        setTimeout(function() {
          $toggle.addClass('toggled');
        }, 580);
        div = '<div id="bodyClick"></div>';
        $(div).appendTo('body').click(function() {
          $('html').removeClass('nav-open');
          nowuiKit.misc.navbar_menu_visible = 0;
          setTimeout(function() {
            $toggle.removeClass('toggled');
            $('#bodyClick').remove();
          }, 550);
        });

        $('html').addClass('nav-open');
        nowuiKit.misc.navbar_menu_visible = 1;
      }
    });

    nowuiKit = {
      misc: {
        navbar_menu_visible: 0
      },

      checkScrollForTransparentNavbar: debounce(function() {
        if ($(document).scrollTop() > scroll_distance) {
          if (transparent) {
            transparent = false;
            $('.navbar[color-on-scroll]').removeClass('navbar-transparent');
          }
        } else {
          if (!transparent) {
            transparent = true;
            $('.navbar[color-on-scroll]').addClass('navbar-transparent');
          }
        }
      }, 17),

      initNavbarImage: function() {
        var $navbar = $('.navbar').find('.navbar-translate').siblings('.navbar-collapse');
        var background_image = $navbar.data('nav-image');

        if (background_image != undefined) {
          if ($(window).width() < 991 || $('body').hasClass('burger-menu')) {
            $navbar.css('background', "url('" + background_image + "')")
              .removeAttr('data-nav-image')
              .css('background-size', "cover")
              .addClass('has-image');
          } else {
            $navbar.css('background', "")
              .attr('data-nav-image', '' + background_image + '')
              .css('background-size', "")
              .removeClass('has-image');
          }
        }
      },

      initSliders: function() {
        // Sliders for demo purpose in refine cards section
        var slider = document.getElementById('sliderRegular');

        noUiSlider.create(slider, {
          start: 40,
          connect: [true, false],
          range: {
            min: 0,
            max: 100
          }
        });

        var slider2 = document.getElementById('sliderDouble');

        noUiSlider.create(slider2, {
          start: [20, 60],
          connect: true,
          range: {
            min: 0,
            max: 100
          }
        });
      }
    }

    // Javascript just for Demo purpose, remove it from your project
    nowuiKitDemo = {
      checkScrollForParallax: debounce(function() {
        var current_scroll = $(this).scrollTop();

        oVal = ($(window).scrollTop() / 3);
        big_image.css({
          'transform': 'translate3d(0,' + oVal + 'px,0)',
          '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
          '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
          '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
        });

      }, 6)

    }

    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.

    function debounce(func, wait, immediate) {
      var timeout;
      return function() {
        var context = this,
          args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
        }, wait);
        if (immediate && !timeout) func.apply(context, args);
      };
    };
  </script>



</body>

</html>