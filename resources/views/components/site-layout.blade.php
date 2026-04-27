<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="h-screen font-sans font-semibold">
<header class="">
    <nav class="bg-green-700 p-4 flex text-lg items-center justify-between">
        <a href="/" class="text-white hover:text-green-200 transition font-bold">Home</a>
        <div class="flex gap-4">
            <a href="/contact" class="text-white hover:text-green-200 transition font-bold">Contact</a>
            <a href="/faq" class="text-white hover:text-green-200 transition font-bold">Faq</a>
            <div>
                <a href="/login" class="bg-white text-green-400 px-4 py-2 font-semibold rounded hover:bg-green-100 transition">Login</a>
            </div>
        </div>
    </nav>
</header>
<main>
    {{$slot}}
</main>
<footer class="bg-green-300 p-1 ">
    <hr>
    <p>Copyright 2026</p>
</footer>
</body>
</html>
