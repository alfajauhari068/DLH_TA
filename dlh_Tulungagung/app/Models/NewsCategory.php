<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $table = 'news_categories';

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_news_category', 'news_category_id', 'news_id');
    }
}
