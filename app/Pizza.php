<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function sizes() {
        return $this->belongsToMany(Size::class);
    }
}
