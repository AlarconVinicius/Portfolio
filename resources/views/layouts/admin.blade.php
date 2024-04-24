<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | Painel Portfolio</title>
    <link rel="icon" href="{{ asset('assets//img/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin_style.css') }}" asp-append-version="true" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('projects.index') }}">Painel Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('site.index') }}"><b>Portfolio</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('projects.index') }}">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('services.index') }}">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href="{{ route('profile_informations.index') }}">Informações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('contacts.index') }}">Mensagens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('profile.edit') }}">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sair
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="pb-3">
            @yield('content')
        </main>
    </div>

    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2023 - PortfolioAlarcon.MVC - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
        </div>
    </footer>
    <script src="{{ asset('assets/lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
            $('#message-alert').fadeOut('slow');
            $('#error-alert').fadeOut('slow');
        }, 3000);
    </script>
    @yield("script")
</body>
</html>
