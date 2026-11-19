
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GameZone - Il mondo dei videogiochi</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <h1>🎮 GameZone</h1>

        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('chi-siamo') }}">Chi siamo</a>
            <a href="{{ route('servizi') }}">Servizi</a>
            <a href="{{ route('articoli') }}">Articoli</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2026 GameZone - Il tuo mondo gaming</p>
    </footer>

</body>
</html>
