<?php

{{-- resources/views/contact/index.blade.php --}}

    {{-- ... 既存の name, email, message フィールドの前に挿入 ... --}}
    <div>
        <label for="category_id">お問い合わせ種別 (必須)</label><br>
        <select id="category_id" name="category_id">
            <option value="">選択してください</option>
            @foreach ($categories as $category)
                <option 
                    value="{{ $category->id }}"
                    {{-- エラー時に入力値を保持する old() 処理 --}}
                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <label for="name">お名前 (必須)</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
    {{-- ... name の error 表示 ... --}}

    {{-- ... email, message フィールドも同様 ... --}}
    
    <button type="submit">確認画面へ</button>
</form>