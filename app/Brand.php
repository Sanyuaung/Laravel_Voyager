<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}