<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="img-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
        </a>

        <ul class="navbar-nav d-flex flex-row gap-4 mb-0">
            <li class="nav-item">
                <a class="nav-link text-uppercase fw-bold" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase fw-bold" href="{{ route('comics') }}">Comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase fw-bold" href="{{ route('about') }}">About</a>
            </li>
        </ul>
    </div>
</nav>