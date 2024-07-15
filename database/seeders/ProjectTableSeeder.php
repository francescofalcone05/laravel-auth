<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        $newProject = new Project();
        $newProject->type_id = $faker->numberBetween(1, 4);
        $newProject->name_project = 'Laravel 1';
        $newProject->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newProject->group = true;
        $newProject->date = now();
        $newProject->save();

        $newProject = new Project();
        $newProject->type_id = $faker->numberBetween(1, 4);
        $newProject->name_project = 'Laravel 2';
        $newProject->description = 'Il progetto Laravel 1 é stato fatto da luca.';
        $newProject->group = false;
        $newProject->date = now();
        $newProject->save();

        $newProject = new Project();
        $newProject->type_id = $faker->numberBetween(1, 4);
        $newProject->name_project = 'Laravel 2';
        $newProject->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newProject->group = true;
        $newProject->date = now();
        $newProject->save();
    }
}
