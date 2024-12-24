<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\tasks;
use Illuminate\Database\Seeder;

class PersonTaskTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = Person::all();
        tasks::all()->each(function($task) use ($persons) {
            $assignees = $persons->random(2);
            $task->assignees()->attach($assignees);
        });
    }
}
