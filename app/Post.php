<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['judul','category_id','content','gambar','slug'];

    public function category() {
        return $this->BelongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

}
