<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    // 定義可以設定的欄位
    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->hasMany(myPost::class);
    }
}
