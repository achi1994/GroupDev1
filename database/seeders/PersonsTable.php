<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = [
            ['name' => 'John Doe', 'email' => 'aa@gmail.com', 'age'=>'1993-11-12'],
            ['name' => 'ZAZa Doe', 'email' => 'zaza@gmail.com', 'age'=>'1993-11-12'],
            ['name' => 'John Doe', 'email' => "zaza1@gmail.com",'age'=>'1994-11-12'],
            ['name' => 'ZAZa Doe', 'email' => 'zaza2@gmail.com', 'age'=>'1999-11-02']
            ];

        foreach ($persons as $person) {
            Person::create($person);
        }
    }
}
