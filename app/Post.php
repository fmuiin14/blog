<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category() {
        return $this->BelongsTo('App\Category');
    }

    protected $fillable = ['judul','category_id','content','gambar'];
}
