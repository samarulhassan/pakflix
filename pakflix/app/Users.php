<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // use HasFactory;

    protected $table = 'user';

    protected $fillable = ['name','email','password','usertype','phoneno'];
}
