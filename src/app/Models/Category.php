// app/Models/Category.php
// ...
class Category extends Model
{
    // ✅ リレーション: カテゴリは複数の問い合わせを持つ (1対多)
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}