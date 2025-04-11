<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class administrators extends Model
{
    protected $table = 'administrators' ;
    protected $fillable = ['id', 'username', 'password', 'last_login_at', 'created_at', 'updated_at'];
}
