<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Project::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(5),
                'image_url' => $faker->imageUrl(640, 480, 'business', true, 'project'),
            ]);
        }
    }
}
