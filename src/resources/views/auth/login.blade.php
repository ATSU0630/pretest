@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-form__content">
  <div class="login-form__heading">
    <h2>ログイン</h2>
  </div>
  <form class="form">
  + <form class="form" action="/register" method="post">
+     @csrf
// 省略
</form>