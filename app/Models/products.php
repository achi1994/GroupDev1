<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class products extends Model
{
    protected $fillable = ['name', 'description','price','category','quantity','person_id'];

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id', 'id');
    }
}
