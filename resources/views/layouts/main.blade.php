<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>@yield('title') | Vinícius Alarcon</title> --}}
    <title>Portfólio | Vinícius Alarcon</title>
    <link rel="icon" href="{{ asset('assets/img/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main_style.css') }}">
    {{-- @yield("style") --}}
</head>
<body>
    <div class="scroll-up-btn">
        <ion-icon name="chevron-up-outline"></ion-icon>
    </div>
    <div class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#home">Vinícius <span>Alarcon</span></a>
                <!-- <a href="#home">Port<span>fólio</span></a> -->
            </div>
            <ul class="menu">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#especialidades">Especialidades</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            <div class="menu-btn">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
    </div>

    @yield('content')

    <!--Footer Início-->
    <footer>
        <span>Criado por <a href="https://www.linkedin.com/in/vinicius-alarcon/" target="_blank" >Vinícius Alarcon</a> | Todos os direitos reservado 2021</span>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/main_script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    {{-- @yield("script") --}}
</body>
</html>
