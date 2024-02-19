<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Size extends Model
{
    public function gooods()
    {
        return $this->belongsTo(Good::class);
    }
}