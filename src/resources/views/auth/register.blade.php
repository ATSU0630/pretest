<?php

{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.app')

@section('content')
<h1>ユーザー登録</h1>

{{-- Fortifyの登録アクションにデータをPOST --}}
<form method="POST" action="{{ route('register') }}">
    @csrf

    {{-- ユーザー名 --}}
    <div>
        <label for="name">ユーザー名</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        {{-- ✅ バリデーションエラー表示 --}}
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    {{-- メールアドレス --}}
    <div>
        <label for="email">メールアドレス</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        {{-- ✅ バリデーションエラー表示 --}}
        @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    {{-- パスワード --}}
    <div>
        <label for="password">パスワード</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
        {{-- ✅ バリデーションエラー表示 --}}
        @error('password')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    {{-- パスワード確認 --}}
    <div>
        <label for="password_confirmation">パスワード（確認）</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <button type="submit">登録</button>
</form>
@endsection