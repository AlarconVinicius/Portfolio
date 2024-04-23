@extends('layouts.main')

{{-- @section('title', $page_section_title) --}}
{{-- @section("style")
@endsection --}}
@section('content')

<!-- home início -->
<section class="home" id="inicio">
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">Olá, meu nome é</div>
            <div class="text-2">Vinícius Alarcon</div>
            <div class="text-3">eu sou <span class="typing"></span></div>
            <a href="https://drive.google.com/file/d/1Cn2KDWrrTiAiQ-zhYiDY7S0yvX-UiotV/view?usp=sharing" target="_blank">Download CV</a>
        </div>
    </div>
</section>
<!-- about início -->
<section class="about" id="sobre">
    <div class="max-width">
        <h2 class="title">Sobre</h2>
            <div class="about-content">
            <div class="column left">
                <img src="{{ asset('assets/img/avatar.png') }}" alt="">
            </div>
            <div class="column right">
                <div class="text">Sou Vinícius e sou <span class="typing-2"></span></div>
                <p>Olá! Sou um estudante de Análise e Desenvolvimento de Sistemas no 5º período. Desde sempre, fui apaixonado por tecnologia e por criar coisas novas. Por isso, decidi investir na carreira de desenvolvimento de software, onde posso aplicar meus conhecimentos para criar soluções úteis e inovadoras para as pessoas.
                    <br><br>
                    Ao longo do curso, tenho me dedicado ao estudo de diversas linguagens de programação, como C#, Python, PHP, HTML, CSS e JavaScript. Também tenho conhecimentos em banco de dados MySQL e na criação de painéis de análise de dados no Power BI.
                    <br><br>
                    Sou uma pessoa determinada e comprometida com os projetos em que me envolvo, sempre buscando aprender e evoluir minhas habilidades como desenvolvedor. Busco sempre trabalhar de forma colaborativa e comunicativa, acreditando que um bom trabalho em equipe é essencial para o sucesso de um projeto.
                    <br><br>
                    Se você está procurando um desenvolvedor dedicado e com vontade de crescer na área, eu sou a pessoa certa para você!</p>
                <a href="https://drive.google.com/file/d/1Cn2KDWrrTiAiQ-zhYiDY7S0yvX-UiotV/view?usp=sharing" target="_blank">Download CV</a>
            </div>
            </div>
    </div>
    </section>

    <!-- services início -->
<section class="services" id="servicos">
    <div class="max-width">
        <h2 class="title">Serviços</h2>
        <div class="services-content">
            <div class="card">
                <div class="box">
                    <ion-icon name="brush-outline"></ion-icon>
                    <div class="text">Desenvolvimento Web</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, optio.</p>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <ion-icon name="code-outline"></ion-icon>
                <div class="text">Desenvolvimento de APIs</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, optio.</p>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <ion-icon name="trending-up-outline"></ion-icon>
                    <div class="text">Dashboards</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, optio.</p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Skills Início -->
<section class="skills" id="especialidades">
    <div class="max-width">
        <h2 class="title">Especialidades</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">Minhas habilidades e experiências</div>
                <p>Como desenvolvedor, possuo habilidades em diversas tecnologias, com um forte foco em C#, Python e JavaScript. Tenho experiência em desenvolvimento web utilizando HTML, CSS, PHP e JavaScript, tendo como destaque o projeto de um Site de Receitas que desenvolvi utilizando o framework Laravel 8. Além disso, possuo conhecimentos em banco de dados MySQL e ferramentas de análise de dados como o Power BI.
                    <br><br>
                    Também possuo habilidades em desenvolvimento de Web APIs utilizando .NET Core 6, o que me permite criar soluções escaláveis e robustas para atender às necessidades dos clientes. Sempre estou buscando aprender novas tecnologias e tendências de mercado para me manter atualizado e oferecer o melhor aos meus projetos.</p>
                <!-- <a href="#">Mais informações</a> -->
            </div>
            <div class="column right">
                <ul>
                    <li>C#</li>
                    <li>Python</li>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>MySQL</li>
                    <li>PowerBI</li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <!--Projects Início-->
    <section class="projects" id="projetos">
    <div class="max-width">
        <h2 class="title">Projetos</h2>
        <div id="projects-card" class="carousel owl-carousel">
        @foreach ($projects as $project)
            <div class="card">
                <div class="box">
                    <div class="text">{{$project->title}}</div>
                    <p>{{$project->description}}</p>
                    <a href="{{$project->link}}" target="_blank" class="btn-outline-green">Ver Mais</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

<!--Contact Início-->
<section class="contact" id="contato">
    <div class="max-width">
        <h2 class="title">Contato</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Fale Comigo</div>
                <p>Olá! Se você está procurando um profissional com habilidades em desenvolvimento web, APIs, banco de dados e painéis PowerBI, eu posso ser a pessoa certa para você. Vamos conversar mais sobre como posso ajudar você ou sua empresa em seus projetos? Entre em contato comigo para discutirmos mais!</p>

            <div class="icons">
                <div class="row">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="info">
                        <div class="head">Nome</div>
                        <div class="sub-title">Vinícius Alarcon</div>
                    </div>
                </div>
                <div class="row">
                <ion-icon name="earth-outline"></ion-icon>
                <div class="info">
                    <div class="head">Endereço</div>
                    <div class="sub-title">Rio de Janeiro, RJ</div>
                </div>
            </div>
            <div class="row">
            <ion-icon name="person-outline"></ion-icon>
            <div class="info">
                <div class="head">Email</div>
                <div class="sub-title">alarconvinicius74@gmail.com</div>
            </div>
        </div>
            </div>
        </div><!--column left-->
        <div class="column rigth">
            <div class="text">Mensagem</div>
            <form action="#">
                <div class="fields">
                    <div class="field name">
                        <input type="text" placeholder="Nome" required>
                    </div>
                    <div class="field email">
                        <input type="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="field">
                    <div class="field">
                        <input type="text" placeholder="Sobrenome" required>
                    </div>
                    <div class="field textarea">
                        <textarea  cols="30" rows="10" placeholder="Escrever...." required></textarea>
                    </div>
                    <div class="button">
                        <button type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>

@endsection

{{-- @section("script")
@endsection --}}
