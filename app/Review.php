<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable= ['pub_id', 'user_id', 'rating', 'comment'];
}
