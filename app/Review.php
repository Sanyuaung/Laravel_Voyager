<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    public function good()
    {
        return $this->belongsTo(Good::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}