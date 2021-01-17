<header class="l-header fixed top-0 flex items-center w-full px-8">
<div class="wrapper-content">
    <a class="l-header-title text-3xl font-bold" href="/">Leon</a>
    <ul class="l-header-right flex ml-auto">

        @guest
        <a class="mx-3 text-sm font-bold" href="{{ route('register') }}">Register</a>
        @endguest

        @guest
        <a class="mx-3 text-sm font-bold" href="{{ route('login') }}">Login</a>
        @endguest

        @auth
        <a class="l-header-createBtn mx-3 text-sm font-bold rounded-lg bg-primary text-white py-3 px-4" href="{{ route('articles.create') }}">Create Tutorial</a>
        @endauth

        @auth
        <li class="flex">
            <a class="nav-link dropdown-toggle font-bold" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
            </a>
            <button class="mx-3 text-sm font-bold focus:outline-none" type="button"
                    onclick="location.href='{{ route("users.show", ["name"=>Auth::user()->name]) }}'">
                Mypage
            </button>
            <div class="dropdown-divider"></div>
            <button form="logout-button" class="mx-3 text-sm font-bold focus:outline-none" type="submit">
                Logout
            </button>
        </li>
        <form id="logout-button" class="font-bold" method="POST" action="{{ route('logout') }}">
        @csrf
        </form>
        @endauth

    </ul>
</div>
</header>
