<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

//serve per poter usare slug
use Illuminate\Support\Str;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
        $newProject = new Project();
        $newProject->title = $faker->sentence(3);
        $newProject->content = $faker->text(500);
        //mette il trattino tra una parola e l'altra prendendo titolo come riferimento
        $newProject->slug = Str::slug($newProject->title);
        $newProject->save();
        }
    }
}
