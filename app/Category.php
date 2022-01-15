<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public function categories()
    {
        return $this->belongsToMany(Crypto::class);
    }
}
