<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class scores extends Model
{
    protected $table = 'scores' ;
    protected $fillable = ['id', 'user_id', 'game_version_id', 'score', 'created_at', 'updated_at'];
}
