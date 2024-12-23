<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'music';

    protected $fillable = ['id','name', 'artist', 'album', 'genre', 'year'];

}
