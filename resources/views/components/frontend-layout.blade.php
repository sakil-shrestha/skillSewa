<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill Sewa</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <link href="frontend/style.css" rel="stylesheet">
    <link href="frontend/chooseYourPath.css" rel="stylesheet">
    <link href="frontend/hero.css" rel="stylesheet">
    <link href="frontend/footer.css" rel="stylesheet">
    <link href="frontend/createProfile.css" rel="stylesheet">
    <link href="frontend/howItWorks.css" rel="stylesheet">







    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
 <link rel="icon" type="image/svg" href="frontend/image/favicon.png" />
</head>

<body class="bg-gray-50 font-[Poppins]">
    @include('sweetalert::alert')
    {{-- header --}}
    <x-frontend-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-choose-your-path/>
    <x-how-it-works/>

    {{-- search filter --}}
    {{-- <form method="GET" action="{{route('professionals.search')}}" class="flex gap-3 mb-4">
    <input type="text" name="search" placeholder="Search by name or skill" class="p-2 rounded-lg">
    <select name="city" class="p-2 rounded-lg">
        <option value="">All Cities</option>
        <option value="Kathmandu">Kathmandu</option>
        <option value="Pokhara">Pokhara</option>
    </select>
    <input type="number" name="min_rate" placeholder="Min Rate">
    <input type="number" name="max_rate" placeholder="Max Rate">
    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Filter</button>
</form> --}}
    {{-- <x-card-section /> --}}

<x-footer/>
</body>

</html>
