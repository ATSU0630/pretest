// database/migrations/XXXX_XX_XX_XXXXXX_create_contacts_table.php

// ...
Schema::create('contacts', function (Blueprint $table) {
    $table->id();
    
    // 💡 外部キーとして追加
    $table->foreignId('category_id')->constrained('categories'); // category_id が categories テーブルの id を参照
    
    $table->string('name', 100);
    $table->string('email', 255); 
    $table->text('message');
    
    $table->timestamps(); 
});
// ...