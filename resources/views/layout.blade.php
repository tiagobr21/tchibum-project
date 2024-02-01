<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @yield('content')

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">TCHIBUM<span>NA AMAZÔNIA</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">HOME</a></li>

                    @if (auth()->user()?->role == 'admin')
                        <li class="nav-item"><a href="/admin" class="nav-link">ADMIN</a></li>
                    @endif
                    <li class="nav-item"><a href="/sobre" class="nav-link">QUEM SOMOS</a></li>

                    <li class="nav-item">
                        <div class="nav-link dropdown">
                            <button class="nav-link btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MAIS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                {{-- <a class="dropdown-item" href="/depoimentos" class="nav-link">DEPOIMENTOS</a> --}}
                                <a class="dropdown-item" href="/posts">POSTS</a>
                                <a class="dropdown-item" href="/comunidades">COMUNIDADES</a>
                                <a class="dropdown-item" href="/atividades">ATIVIDADES</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item"><a href="/faleconosco" class="nav-link">FALE CONOSOCO</a></li>

                 {{--    <li class="nav-item">
                        <div class="nav-link dropdown">
                            <button class="nav-link btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                IDIOMAS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item"
                                    href="{{ route('change.language', ['locale' => 'pt']) }}">Português</a>
                                <a class="dropdown-item"
                                    href="{{ route('change.language', ['locale' => 'en']) }}">English</a>
                                <a class="dropdown-item"
                                    href="{{ route('change.language', ['locale' => 'es']) }}">Espanhol</a>
                            </div>
                        </div>
                    </li> --}}



                    @guest
                        <li class="nav-item"><a href="/login" class="nav-link">ENTRAR</a></li>
                        <li class="nav-item"><a href="/register" class="nav-link">CADASTRAR</a></li>
                    @endguest

                    @auth


                        <form action="/logout" method="POST">
                            @csrf
                            <li class="nav-item"><a id="login" href="/logout" class="nav-link"
                                    onclick="event.preventDefault(); this.closest('form').submit();"><i
                                        class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </a></li>
                        </form>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>



    <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_footer.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Que somos?</h2>
                        <p>Descubra a Amazônia com a Tchibum, nascida do amor pela região.
                            Oferecemos pacotes de turismo que proporcionam uma imersão na riqueza da fauna e flora
                            amazônica, garantindo conforto e segurança aos exploradores.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Informações</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Regulamento Geral</a></li>
                            <li><a href="#" class="py-2 d-block">Condições de Reserva</a></li>
                            <li><a href="#" class="py-2 d-block">Política de Privacidade</a></li>
                            <li><a href="#" class="py-2 d-block">Política de Reembolso</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Experiência</h2>
                        <ul class="list-unstyled">
                            <li><a class="py-2 d-block">Aventura</a></li>
                            <li><a class="py-2 d-block">Hotel e Restaurantes</a></li>
                            <li><a class="py-2 d-block">Praias</a></li>
                            <li><a class="py-2 d-block">Natureza</a></li>
                            <li><a class="py-2 d-block">Acampamentos</a></li>
                            <li><a class="py-2 d-block">Festas Regionais</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Dúvidas?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">Rua dos manauaras
                                        100, Manaus, Amazonas, BR</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+55
                                            92 99324-2342</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                            class="text">info@tchibum.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Todos os direitos reservados | Software <i class="fa fa-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">DevMinds</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
