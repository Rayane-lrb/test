<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/css/splide.min.css">
    <title>Document</title>
</head>
<body class="min-h font-sans font-semibold bg-cover bg-fixed bg-center" style="background-image: url('/images/jonatan-pie-EvKBHBGgaUo-unsplash.jpg') ">
<header class="">
    <nav class="relative z-10  backdrop-blur-2xl p-4 flex text-lg m-5 rounded-lg items-center justify-between">
        <a href="/" class="text-green-200 hover:text-white transition underline-offset-4 hover:underline font-bold">Home</a>
        <div class="flex gap-4">
            <a href="/about" class="text-green-200 hover:text-white underline-offset-4 hover:underline transition font-bold">About</a>
            <a href="/contact" class="text-green-200 hover:text-white underline-offset-4 hover:underline transition font-bold">Contact</a>
            <a href="/faq" class="text-green-200 hover:text-white underline-offset-4 hover:underline transition font-bold">Faq</a>
            <div>
                <a href="/login" class="bg-white text-green-400 px-4 py-2 font-semibold rounded hover:bg-green-100 transition">Login</a>
            </div>
        </div>
    </nav>
</header>
<main class="flex-1">
    {{$slot}}
</main>
<footer class="mt-auto bg-green-300 p-1">
    <hr>
    <p>Copyright 2026</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/js/splide.min.js"></script>
</body>
</html>
