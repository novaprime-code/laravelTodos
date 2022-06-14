<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark ">
        <div class="container">
            <a href="/"><span class="navbar-brand mb-0 h1">Todo</span></a>
            <a href="/create"><span class="btn btn-primary">Create Todo</span></a>
        </div>
    </nav>

    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success">

                {{ session()->get('success') }}

            </div>
        @endif
        @yield('content')

    </div>

</body>

</html>
