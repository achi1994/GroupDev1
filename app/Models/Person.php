<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $fillable = ['id', 'name', 'email', 'age'];

    public $timestamps = false;

    public function assignedTasks()
    {
        return $this->belongsToMany(tasks::class, 'person_task', 'person_id', 'task_id');
    }
}
