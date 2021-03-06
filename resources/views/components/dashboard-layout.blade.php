<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @stack('css')
</head>

<body>
    <header class="py-2 bg-dark text-white mb-4">
        <div class="container">
            <div class="d-flex">
                <h1 class="h3 text-warning">{{ config('app.name') }}</h1>

                {{-- @if (Auth::guard('web')->check()) --}}
                @auth('web')
                <div class="ms-auto">
                    <span class="text-warning">Hi,</span>  {{ Auth::guard('web')->user()->name }}
                    | <a href="#" onclick="document.getElementById('logout').submit()">Logout</a>
                    <form id="logout" class="d-none" action="{{ route('logout', 'web') }}" method="post">
                        @csrf
                    </form>
                </div>
                @endauth
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <h4>Navigation Menu</h4>
                <nav>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="{{ route('Link.index') }}" class="nav-link {{ Request::is('Link') ? 'active' : '' }}">Home</a></li>
                    </ul>
                </nav>
            </aside>

            <main class="col-md-9">
                <div class="mb-4">
                    <h3 class="text-center text-info">{{ $title ?? 'Default Title' }}</h3>
                </div>

                {{ $slot }}
            </main>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('js')
</body>

</html>