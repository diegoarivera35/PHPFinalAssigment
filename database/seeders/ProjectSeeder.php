<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;
use App\Models\Technology;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // User::factory(10)->create(); 
        // Asi creamos el usuario que va a ser el admin de todo
        User::factory()->create([
            'name' => 'Diego',
            'email' => 'diegoarivera35@gmail.com',
            'password' => 'password'
        ]);

        //asi creamos lo cursos del la base de datos
        Technology::factory()->create([
            'name' => 'PHP',
            'icon' => 'icon',
        ]);

        //asi creamos lo cursos del la base de datos
        Project::factory()->create([
            'name' => 'Pet Projects',
            'description' => 'Web app designed to help users estimate the time needed to get ready in the morning. Users can select the activities they want to perform. done using HTML, CSS, and JavaScript.',
            'URL' => 'test.url',
            'imageURL' => 'imagetest.url',
            'GitHub' => 'linkGH',
            'Behance' => 'LinkBH',
            'Figma' => 'LinkFM'
        ]);

    }
}
