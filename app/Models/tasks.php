<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{

    protected $fillable = ['tittle', 'description','is_completed'];

    public $timestamps = false;
}
