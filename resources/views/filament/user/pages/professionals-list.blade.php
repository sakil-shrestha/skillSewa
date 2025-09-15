{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @filamentStyles
    @filamentScripts
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Approved Professionals</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($professionals as $professional)
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                    <img src="{{ Storage::url($professional->profile) }}" class="text-gray-500 mt-1">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $professional->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ $professional->email }}</p>
                    @if ($professional->contact)
                        <p class="text-gray-500 mt-1">Contact: {{ $professional->contact }}</p>
                    @endif
                    @if ($professional->address)
                        <p class="text-gray-500 mt-1">Address: {{ $professional->address }}</p>
                    @endif
                    @if ($professional->profile)
                    @endif
                    <div class="mt-4">
                        <a href="{{ route('professional.detail', $professional) }}" target="_blank"
                            class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html> --}}




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @filamentStyles
    @filamentScripts
</head>

<body class="bg-gradient-to-r from-gray-50 to-gray-200 min-h-screen">
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-8 text-center tracking-tight">Approved Professionals</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($professionals as $professional)
                <div
                    class="relative bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <!-- Profile Image -->
                    @if ($professional->profile)
                        <div class="flex justify-center mb-4">
                            <img src="{{ Storage::url($professional->profile) }}"
                                alt="{{ $professional->name }}'s profile image"
                                class="w-20 h-20 object-cover rounded-full border-4 border-blue-100 shadow-sm">
                        </div>
                    @else
                        <div class="flex justify-center mb-4">
                            <div
                                class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center text-gray-500">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </div>
                        </div>
                    @endif
                    <!-- Professional Details -->
                    <h2 class="text-2xl font-bold text-gray-900 text-center">{{ $professional->name }}</h2>
                    <p class="text-gray-600 mt-2 text-center">{{ $professional->email }}</p>
                    @if ($professional->contact)
                        <p class="text-gray-500 mt-2 text-sm flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            {{ $professional->contact }}
                        </p>
                    @endif
                    @if ($professional->address)
                        <p class="text-gray-500 mt-2 text-sm flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L12 12m0 0l-5.657 5.657M12 12V3" />
                            </svg>
                            {{ $professional->address }}
                        </p>
                    @endif
                    <!-- Action Button -->
                    <div class="mt-6 flex justify-center">
                        <a href="{{ route('professional.detail', $professional) }}"
                            class="inline-flex items-center bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition-colors duration-200 font-medium">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
