<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table='posts';
	protected $fillable=['user_id','image','video','text','likes','dislikes','created_at','updated_at'];
}
