<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title','【organicfarm】人と地球に優しい新鮮なオーガニック野菜') | @yield('page_title','【organicfarm】体を作る野菜')</title>
  <meta name="description" content="@yield('description','')">

  <link href="{{ asset('css/app.css').'?'.time() }}" rel="stylesheet">
  <script src="{{ mix('js/app.js').'?'.time() }}"></script> {{-- javascriptを使用する場合のキャッシュ回避の記述 --}}

  <!-- <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}"> {{-- ファビコン用の画像 --}} -->
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- フォームの送信やAjaxリクエストに必要 --}} -->

  <!-- Google Search Consoleなどのツールでサイト所有権を確認するためのメタタグ -->
  <!-- <meta name="google-site-verification" content="oROLvZRyc07LWwQELJjlShtzBSeYjsmMM8pWryrbIWA" /> -->
</head>

<body>
  @include('pages.layouts.header')
  @yield('content')
  @include('pages.layouts.footer')
</body>

</html>