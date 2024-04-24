<?php

namespace Database\Seeders;

use App\Models\ProfileInformation;
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

        // ---------------------------------------------------------------------

        $profileInformationData = [
            'about' => '<p>Olá! Sou um estudante de Análise e Desenvolvimento de Sistemas no 5º período. Desde sempre, fui apaixonado por tecnologia e por criar coisas novas. Por isso, decidi investir na carreira de desenvolvimento de software, onde posso aplicar meus conhecimentos para criar soluções úteis e inovadoras para as pessoas.</p><br/>
            <p>Ao longo do curso, tenho me dedicado ao estudo de diversas linguagens de programação, como C#, Python, PHP, HTML, CSS e JavaScript. Também tenho conhecimentos em banco de dados MySQL e na criação de painéis de análise de dados no Power BI.</p><br/>
            <p>Sou uma pessoa determinada e comprometida com os projetos em que me envolvo, sempre buscando aprender e evoluir minhas habilidades como desenvolvedor. Busco sempre trabalhar de forma colaborativa e comunicativa, acreditando que um bom trabalho em equipe é essencial para o sucesso de um projeto.</p><br/>
            <p>Se você está procurando um desenvolvedor dedicado e com vontade de crescer na área, eu sou a pessoa certa para você!</p><br/>',
            'specialty_text' => '<p>Como desenvolvedor, possuo habilidades em diversas tecnologias, com um forte foco em C#, Python e JavaScript. Tenho experiência em desenvolvimento web utilizando HTML, CSS, PHP e JavaScript, tendo como destaque o projeto de um Site de Receitas que desenvolvi utilizando o framework Laravel 8. Além disso, possuo conhecimentos em banco de dados MySQL e ferramentas de análise de dados como o Power BI.</p><br/>
            <p>Também possuo habilidades em desenvolvimento de Web APIs utilizando .NET Core 6, o que me permite criar soluções escaláveis e robustas para atender às necessidades dos clientes. Sempre estou buscando aprender novas tecnologias e tendências de mercado para me manter atualizado e oferecer o melhor aos meus projetos.</p><br/>',
            'specialty' => 'C#, Python, PHP, JavaScript, HTML, CSS, MySQL, PowerBI',
            'contact_me' => 'Olá! Se você está procurando um profissional com habilidades em desenvolvimento web, APIs, banco de dados e painéis PowerBI, eu posso ser a pessoa certa para você. Vamos conversar mais sobre como posso ajudar você ou sua empresa em seus projetos? Entre em contato comigo para discutirmos mais!',
            'name' => 'Vinícius Alarcon',
            'address' => 'Rio de Janeiro, RJ',
            'email' => 'alarconvinicius74@gmail.com',
            'resume_link' => 'https://www.linkedin.com/in/vinicius-alarcon/',
            'linkedin_link' => 'https://www.linkedin.com/in/vinicius-alarcon/',
            'user_id' => $userId
        ];

        $existingProfileInformation = ProfileInformation::where('user_id', $userId)->first();
        if (!$existingProfileInformation) {
            ProfileInformation::create($profileInformationData);
        }
    }
}
