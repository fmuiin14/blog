<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = ['name','slug']; 

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function getRouteKeyName() {
        return 'slug';
    }

}
