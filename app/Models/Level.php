<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['name', 'exam_board'];

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}
