<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Embryo Digital</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon"/>
</head>

<body class="antialiased">
    <div class="antialiased">
        <!-- Header -->
        @include('components.custom.header')

        <!-- Sidebar -->
        @include('components.custom.sidebar')

        <main class="p-4 md:ml-64 h-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                <div class="border-2 border-dashed border-gray-300 rounded-lg h-32 md:h-64"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 h-32 md:h-64"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 h-32 md:h-64"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 h-32 md:h-64"></div>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72"></div>
            </div>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>