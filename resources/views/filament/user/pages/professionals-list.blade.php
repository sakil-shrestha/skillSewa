{{-- <!DOCTYPE html>
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

</html> --}}

<x-filament::page>


    <div class="professional-card-container">

        @foreach ($professionals as $professional)
            <div class="custom-professional-card">
                <div class="professional__card grid-card">
                    <img src="{{ asset(Storage::url($professional->profile)) }}" alt="{{ $professional->name }}"
                        class="professional__card--image" />

                    <div class="company-name">
                        <h2>{{ $professional->name }}</h2>
                        <p>{{ $professional->jobInfo->job_title ?? 'Service Type' }}</p>

                    </div>

                    <div class="card-status">
                        <span>{{ $professional->is_available ? 'Available' : 'Not Available' }}</span>
                        <i class="ri-checkbox-circle-fill"></i>
                    </div>

                    <div class="card-info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <span>{{ $professional->email ?? 'example@gmail.com' }}</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span>{{ $professional->phone ?? '+977-056-XXXXXX' }}</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>{{ $professional->address ?? 'Bharatpur-10, Chitwan' }}</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-money-bill-wave"></i>
                                <span>{{ $professional->jobInfo->hourly_rate ?? 'Rs. 500' }}</span>
                            </li>
                        </ul>
                    </div>

                    <div class="btn-details">
                        <a href="{{ route('professional.detail', $professional) }}" class="view-btn">
                            <i class="fa-solid fa-circle-info"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- ICON LIBRARIES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <style>
        /* --- CARD GRID LAYOUT --- */
        .professional-card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.8rem;
            padding: 2rem;
        }

        /* --- CARD WRAPPER --- */
        .custom-professional-card {
            all: revert;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
        }

        /* --- CARD BODY --- */
        .custom-professional-card .grid-card {
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            grid-template-rows: repeat(4, auto);
            gap: 0.8rem;
            background: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 1rem;
            width: 28rem;
            transition: all 0.3s ease;
        }

        .custom-professional-card .grid-card:hover {
            transform: scale(1.04);
            cursor: pointer;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
        }

        /* --- IMAGE --- */
        .custom-professional-card .professional__card--image {
            border: 2px solid rgb(68, 68, 223);
            grid-row: 1 / span 3;
            height: 8rem;
            width: 8rem;
            border-radius: 50%;
            object-fit: cover;
            justify-self: center;
            align-self: center;
        }

        /* --- COMPANY INFO --- */
        .custom-professional-card .company-name {
            grid-row: 4;
            text-align: center;
        }

        .custom-professional-card .company-name h2 {
            text-transform: uppercase;
            font-size: 1.1rem;
            font-weight: 600;
            color: #1e293b;
        }

        .custom-professional-card .company-name p {
            font-size: 0.95rem;
            color: #475569;
        }

        /* --- STATUS --- */
        .custom-professional-card .card-status {
            text-align: right;
            font-size: 1rem;
            color: #018f43;
        }

        /* --- CONTACT INFO --- */
        .custom-professional-card .card-info {
            grid-row: 2 / span 2;
        }

        .custom-professional-card .card-info i {
            background: linear-gradient(45deg, #163ba0, #4b5dff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .custom-professional-card .card-info ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }

        .custom-professional-card .card-info ul li {
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* --- BUTTON AREA --- */
        .custom-professional-card .btn-details {
            align-self: end;
            text-align: center;
            margin-top: 0.5rem;
        }

        .custom-professional-card .view-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1.5rem;
            border-radius: 2rem;
            border: none;
            background: linear-gradient(90deg, #163ba0, #4b5dff);
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 500;
            text-decoration: none;
            box-shadow: 0 3px 10px rgba(68, 68, 223, 0.3);
            transition: all 0.3s ease;
        }

        .custom-professional-card .view-btn:hover {
            background: linear-gradient(90deg, #1e46b3, #5c6cf7);
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 6px 15px rgba(68, 68, 223, 0.4);
        }

        .custom-professional-card .view-btn i {
            font-size: 1rem;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .custom-professional-card .grid-card {
                width: 100%;
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</x-filament::page>
