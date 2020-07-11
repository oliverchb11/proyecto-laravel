<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
</head>
<body>
<div id="app" class="d-flex flex-column h-screen  justify-content-between">
    <header>
        @include('partials.navbar')
        @include('partials._session-status')
    </header>
    <main class="py-4">
        @yield('contect')
    </main>
    <footer class="bg-white text-black-50 text-center py-3 shadow">
        {{config('app.name')}} | Copyright @ {{date('Y-m-d')}}
    </footer>
</div>
</body>
</html>
