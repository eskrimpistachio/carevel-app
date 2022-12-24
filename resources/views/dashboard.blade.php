<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Carevel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins antialiased">
    <div class="bg-[#082032] h-full">
        <x-application-logo />
        <div class="ml-6 text-white">
            <h4 class="text-white/70 my-8">Question 1 of 3</h4>
            <h1 class="text-4xl font-semibold">Do you prefer urban or rural?</h1>
            <div class="flex flex-row my-8 gap-16">
                <form action="action.php">
                    <input type="text">
                    <a href="/suggestion">
                        <img class="hover:scale-110" src="/img/urban.png" alt="missing img">
                    </a>
                    <a href="/suggestion">
                        <img class="hover:scale-110" src="/img/rural.png" alt="missing img">
                    </a>
                </form>
            </div>
            <a href="/suggestion">
                <x-primary-button class="my-12">
                    {{ __('Next') }}
                </x-primary-button>
            </a>
        </div>
        
    </div>
</body>

</html>
