<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        "title",
        "slug",
        "statement",
        "solution",
        "difficulty",
        "exam_board",
        "category_id",
        "level_id",
        "image",
        "price",
        "is_published",
        "is_free",
        "description"
    ];

    protected $casts = [
        "is_published" => "boolean",
        "is_free" => "boolean",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
