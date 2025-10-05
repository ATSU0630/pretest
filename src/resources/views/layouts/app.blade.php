<?php

{{-- resources/views/layouts/app.blade.php --}}
<header>
    <nav>
        <a href="{{ url('/') }}">お問い合わせフォーム</a>
        <a href="{{ route('login') }}">login</a> {{-- Fortifyのルーティングに合わせる --}}
        <a href="{{ route('register') }}">登録</a>
        <a href="{{ route('admin.index') }}">管理画面</a>
    </nav>
</header>
<main>
    @yield('content')
</main>