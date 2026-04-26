<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
        <a href="/faq">Faq</a>
    </nav>
</header>
<main>
    {{$slot}}
</main>
<footer>
    <hr>
    <p>Copyright 2026</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
