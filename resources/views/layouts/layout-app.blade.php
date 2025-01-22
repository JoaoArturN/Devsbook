<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href=""><img src="{{ asset('images/devsbook_logo.png') }}" /></a>
            </div>
            <div class="head-side">
                <div class="head-side-left">
                    <div class="search-area">
                        <form method="GET">
                            <input type="search" placeholder="Pesquisar" name="s" />
                        </form>
                    </div>
                </div>
                <div class="head-side-right">
                    <a href="{{ route('renderperfil', ['id' => Auth::User()->id]) }}" class="user-area">
                        <div class="user-area-text">{{ Auth::user()->name }}</div>
                        <div class="user-area-icon">
                            <img src="{{ asset('media/avatars/avatar.jpg') }}" />
                        </div>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="user-logout"
                            style="background-color: transparent; /* Remove o fundo padrão do botão */
    border: none; /* Remove a borda do botão */
    cursor: pointer; /* Torna o botão clicável */
    padding: 0; /* Remove qualquer padding extra */
    display: inline-flex; /* Garante que a imagem se alinhe corretamente */
    justify-content: center; /* Alinha a imagem no centro */
    align-items: center; /* Alinha a imagem no centro */">
                            <img src="{{ asset('images/power_white.png') }}" alt="Logout" />
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </header>

    <section class="container main">
        <aside class="mt-10">
            <nav>
                <a href="{{ route('home') }}">
                    <div class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <div class="menu-item-icon">
                            <img src="{{ asset('images/home-run.png') }}" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Home
                        </div>
                    </div>
                </a>
                <a href="{{ route('renderperfil', ['id' => Auth::User()->id]) }}">
                    <div class="menu-item {{ request()->routeIs('renderperfil') ? 'active' : '' }}">
                        <div class="menu-item-icon">
                            <img src="{{ asset('images/user.png') }}" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Meu Perfil
                        </div>
                    </div>
                </a>
                <a href="{{ route('renderfriends', ['id' => Auth::user()->id]) }}">
                    <div class="menu-item {{ request()->routeIs('renderfriends') ? 'active' : '' }}">
                        <div class="menu-item-icon">
                            <img src="{{ asset('images/friends.png') }}" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Amigos
                        </div>
                        <div class="menu-item-badge">
                            33
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="menu-item">
                        <div class="menu-item-icon">
                            <img src="{{ asset('images/photo.png') }}" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Fotos
                        </div>
                    </div>
                </a>
                <div class="menu-splitter"></div>
                <a href="">
                    <div class="menu-item">
                        <div class="menu-item-icon">
                            <img src="{{ asset('images/settings.png') }}" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Configurações
                        </div>
                    </div>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="menu-item">
                        <div class="menu-item-icon">
                            <img src="{{ asset('images/power.png') }}" width="16" height="16" />
                        </div>
                        <button class="menu-item-text">
                            Sair
                        </button>
                    </div>


                </form>
            </nav>
        </aside>


        @yield('content')



        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>




</body>

</html>



{{-- JS --}}

{{-- <script type="text/javascript" src="{{ asset('js/vanillaModal.js') }}"></script> --}}
