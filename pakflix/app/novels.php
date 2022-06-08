<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class novels extends Model
{
     protected $table = 'novels';

    protected $fillable = ['title','category','views','url'];
}
