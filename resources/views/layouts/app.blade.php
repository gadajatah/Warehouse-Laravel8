<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>
<body>
    <div id="app">
        {{-- Navagation --}}
        @include('partials._nav')
        {{-- End Navigation --}}
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
