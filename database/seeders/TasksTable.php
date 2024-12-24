<?php

namespace Database\Seeders;

use App\Models\tasks;
use Illuminate\Database\Seeder;

class TasksTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            ['tittle' => 'Feed blurrgs', 'is_completed' => false],
            ['tittle' => 'Feed banthas', 'is_completed' => false],
        ];

        foreach ($tasks as $task) {
            tasks::create($task);
        }
    }
}
