<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $table = 'movies';

    protected $fillable = ['title','category','views','url'];
}
