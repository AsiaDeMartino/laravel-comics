<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dosis:wght@400;600;700&display=swap" rel="stylesheet">
    <title>DC Comics</title>
</head>

<body>

    <header>
        @include('partials.header')
    </header>

    <main>
        @include('partials.main')
    </main>

    @include('partials.navbar')

    <footer>
        @include('partials.footer')
    </footer>

</body>

</html>