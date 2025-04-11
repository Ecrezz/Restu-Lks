<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class migrations extends Model
{
    protected $table = 'migrations' ;
    protected $fillable = ['id', 'migration', 'bath'];
}
