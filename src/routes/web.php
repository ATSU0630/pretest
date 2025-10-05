<?php

// routes/web.php

// ... Fortifyをインストールすると、これらのルートはFortifyが管理するため、
//      Fortifyのビューとアクションを使うのが最もシンプルです。
//      Fortifyが自動で /login, /register などのPOST/GETルートを生成します。

// 既存のAuthルートを削除またはコメントアウト
// Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');


// =======================================================
// 1. お問い合わせフォームのルート (変更なし)
// ...
// =======================================================

// =======================================================
// 2. 管理画面のルート (変更なし)
// Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// =======================================================