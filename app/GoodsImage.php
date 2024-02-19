<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class GoodsImage extends Model
{

    public function good()
    {
        return $this->belongsTo(Good::class);
    }
}