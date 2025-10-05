// app/Models/Contact.php
// ...
class Contact extends Model
{
    // ... $fillableに 'category_id' を追加
    protected $fillable = [
        'category_id', // New
        'name',
        'email',
        'message',
    ];
    
    // ✅ リレーション: 問い合わせは一つのカテゴリを持つ (多対1)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}