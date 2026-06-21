<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Dominic Knabe Portfolio') }}</title>

    <meta name="description"
        content="Portfolio of Dominic Knabe, a Laravel and PHP developer specialising in self-hosted web applications, Docker deployments, Linux servers, and modern web development.">
    >
    <meta name="keywords" content="Laravel Developer, PHP Developer, Docker, Linux, MySQL, Web Developer, Melbourne">
    <meta name="author" content="Dominic Knabe">

    <meta property="og:title" content="Dominic Knabe | Laravel & PHP Developer">

    <meta property="og:description"
        content="Laravel, PHP, Docker, Linux, MySQL and self-hosted infrastructure projects.">

    <meta property="og:image" content="https://dominic-knabe.com/images/preview.jpg">
    <meta name="twitter:image" content="https://dominic-knabe.com/preview.jpg">

    <meta property="og:url" content="https://dominic-knabe.com">

    <meta property="og:type" content="website">

    <link rel="icon" href="/DK.jpg" sizes="any">
    <link rel="icon" href="/DK.jpg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/DK.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-background">
    <x-layouts.navigation></x-layouts.navigation>
    <x-layouts.main class="flex-1 flex flex-col ">{{ $slot }}</x-layouts.main>
    <div class="hidden sm:block" id="cursor-dot"></div>
    <div class="hidden sm:block" id="cursor-ring"></div>
</body>

</html>
