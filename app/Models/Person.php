<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $fillable = ['id', 'name', 'email', 'age'];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(products::class, 'person_id', 'id');
    }
}
