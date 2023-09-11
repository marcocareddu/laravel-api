<?php

namespace Database\Seeders;

use App\Models\Technology;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $technologies = [
            ['label' => 'HTML', 'color' => 'info'],
            ['label' => 'CSS', 'color' => 'primary'],
            ['label' => 'JavaScript', 'color' => 'warning'],
            ['label' => 'PHP', 'color' => 'primary'],
            ['label' => 'VueJs', 'color' => 'success'],
            ['label' => 'Laravel', 'color' => 'danger']
        ];

        foreach ($technologies as $data) {
            $technology = new Technology();
            $technology->label = $data['label'];
            $technology->color = $data['color'];
            $technology->save();
        }
    }
}
