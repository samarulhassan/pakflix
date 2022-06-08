<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dramas extends Model
{
    protected $table = 'dramas';

    protected $fillable = ['title','category','views','url'];
}
