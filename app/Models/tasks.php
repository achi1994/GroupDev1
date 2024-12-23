<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class tasks extends Model
{

    protected $fillable = ['id','tittle', 'description','is_completed','person_id'];

    public $timestamps = false;


    // belongsTo persons

    public function persons()
    {
        return $this->belongsTo(Person::class, 'person_id', 'id');
    }
}
