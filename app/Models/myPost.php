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
}
