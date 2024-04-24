<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userData = [
            'name' => 'Vinícius Alarcon Vilela',
            'email' => 'alarcon@gmail.com',
            'password' => bcrypt('Senha@123'),
        ];

        $existingUser = User::where('email', $userData['email'])->first();

        if (!$existingUser) {
            $createdUser = User::create($userData);
            $userId = $createdUser->id;
        } else {
            $userId = $existingUser->id;
        }

        // ---------------------------------------------------------------------

        $services = [
            [
                'user_id' => $userId,
                'name' => 'Desenvolvimento Web',
                'icon' => 'brush-outline',
                'description' => null,
            ],
            [
                'user_id' => $userId,
                'name' => 'Desenvolvimento de APIs',
                'icon' => 'code-outline',
                'description' => null,
            ],
            [
                'user_id' => $userId,
                'name' => 'Dashboards',
                'icon' => 'trending-up-outline',
                'description' => null,
            ],
        ];

        foreach ($services as $serviceData) {
            $existingService = Service::where('name', $serviceData['name'])->first();

            if (!$existingService) {
                Service::create($serviceData);
            }
        }

        // ---------------------------------------------------------------------

        $projects = [
            [
                'title' => 'Controle de Financeiro | API',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptatibus beatae iste aliquid laborum nobis.',
                'language' => 'C#',
                'link' => 'https://github.com/AlarconVinicius/FinancialAppProject',
                'user_id' => $userId
            ],
            [
                'title' => 'E-Management-System',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptatibus beatae iste aliquid laborum nobis.',
                'language' => '.NET 7',
                'link' => 'https://github.com/AlarconVinicius/e-management-system',
                'user_id' => $userId
            ],
            [
                'title' => 'Blog App - Full stack',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptatibus beatae iste aliquid laborum nobis.',
                'language' => '.NET 7, Angular17',
                'link' => 'https://github.com/AlarconVinicius/blog-app',
                'user_id' => $userId
            ]
        ];
        foreach ($projects as $projectData) {
            $existingProject = Project::where('title', $projectData['title'])->first();

            if (!$existingProject) {
                Project::create($projectData);
            }
        }
    }
}
