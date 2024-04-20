<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class myPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';

    // 定義可以設定的欄位
    protected $fillable = [
        'title',
        'description',
        'status',
        'Publish_date',
        'user_id',
        'category_id'
    ];

    // 不能修改的欄位
    // protected $guarded = [
    // 'title'
    // ];

    // 資料表一對多hasmany()
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function tags()
    {
        // 有遵守資料表跟欄位的命名原則就只需要一個參數Tag::class
        // 此專案因為資料表posts的Model名稱為myPost而不是Post，所以要給完整參數
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
