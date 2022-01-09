<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sass/app.css" rel="stylesheet">
    <script src="js/app.js"></script>
</head>
<body>
<header>
    <div class="navigation">
        <a href="/"><img src="{{ asset('img/logo.jpg') }}" alt="Logo"></a>
        <a href="/cars" class="navigation-item">Cars</a>
        <a href="/contact-us" class="navigation-item">Contact Us</a>
    </div>
    <div class="header">
        <h1>Welcome! Find your perfect car at Milos Motor Sales.</h1>
    </div>
</header>
<main>
    {{ $slot }}
</main>
<footer>
    <div>
        <p>Telefon: <a href="tel:011/123-45-67">011/123-45-67</a></p>
        <p>E-mail: <a href="mailto:email@example.rs">email@example.rs</a></p>
        <p>©2022 Milos Motor Sales, Republic of Serbia, Inc. All information applies to Serbia vehicles only.</p>
    </div>
</footer>
</body>
</html>
