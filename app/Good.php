<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Good extends Model
{
    public function goodImages()
    {
        return $this->hasMany(GoodsImage::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}