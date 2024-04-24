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
            <a href="{{ $profileInformation->resume_link }}" target="_blank">Download CV</a>
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
                <p>{!! $profileInformation->about !!}</p>
                <a href="{{ $profileInformation->resume_link }}" target="_blank">Download CV</a>
            </div>
            </div>
    </div>
    </section>

    <!-- services início -->
<section class="services" id="servicos">
    <div class="max-width">
        <h2 class="title">Serviços</h2>
        <div class="services-content">
            @foreach ($services as $service)
            <div class="card">
                <div class="box">
                    <ion-icon name="{{$service->icon}}"></ion-icon>
                    <div class="text">{{$service->name}}</div>
                    <p>{{$service->description}}</p>
                </div>
            </div>
            @endforeach
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
                <p>{!! $profileInformation->specialty_text !!}</p>
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
                <p>{!! $profileInformation->contact_me !!}</p>
            <div class="icons">
                <div class="row">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="info">
                        <div class="head">Nome</div>
                        <div class="sub-title">{{ $profileInformation->name }}</div>
                    </div>
                </div>
                <div class="row">
                <ion-icon name="earth-outline"></ion-icon>
                <div class="info">
                    <div class="head">Endereço</div>
                    <div class="sub-title">{{ $profileInformation->address }}</div>
                </div>
            </div>
            <div class="row">
            <ion-icon name="person-outline"></ion-icon>
            <div class="info">
                <div class="head">Email</div>
                <div class="sub-title">{{ $profileInformation->email }}</div>
            </div>
        </div>
            </div>
        </div>
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
