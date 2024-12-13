<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World - Laravel Bath Edition</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        @if(session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
        @endif
        <header>
            <nav>
                <h1><a href="{{ route('ninjas.index') }}">Ninja Network</a></h1>
                <a href="{{ route('ninjas.index') }}">All ninjas</a>
                <a href="{{ route('ninjas.create') }}">Create New Ninjas</a>
            </nav>
        </header>

        <main class="container">

            {{ $slot }}

        </main>

</body>

</html>
