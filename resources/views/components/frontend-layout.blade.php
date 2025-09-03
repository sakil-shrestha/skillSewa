<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill Sewa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="frontend/style.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- @include('sweetalert::alert') --}}
    {{-- header --}}
    <x-frontend-navbar />

    <main>
        {{ $slot }}
    </main>

</body>

</html>
