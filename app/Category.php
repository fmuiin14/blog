<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    // public function hitungjumlah()
    // {
    //     return $this->hasMany('App\Post');
    // }
    // Pada View:
    // $post->hitungjumlah->count();
}
