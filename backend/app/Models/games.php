<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    protected $table = 'games' ;
    protected $fillable = ['id', 'title', 'slug', 'description', 'created_by', 'created_at', 'updated_at', 'deleted_at'];
}
