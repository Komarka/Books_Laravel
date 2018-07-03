<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     protected $table='books';
     protected $fillable = ['author','name','pages','plot','image'];
     public $timestamps=false;
}
