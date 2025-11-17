<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Casts\AsRichTextContent;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'image',
        'views',
    ];

    // protected $casts = [
    //     'content' => AsRichTextContent::class,
    // ];
}
