{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen font-sans">
    <div class="container mx-auto px-4 py-10">

        <!-- Profile Section -->
        <div
            class="relative bg-white/80 backdrop-blur-md border border-white/50 shadow-xl rounded-2xl p-8 mb-10 transition-all duration-300 hover:shadow-2xl hover:scale-[1.01]">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div
                    class="w-40 h-40 rounded-full overflow-hidden border-4 border-indigo-500 shadow-md hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset(Storage::url($professional->profile)) }}" alt="Profile"
                        class="w-full h-full object-cover">
                </div>

                <div class="flex-1 text-center md:text-left space-y-3">
                    <h1 class="text-4xl font-extrabold text-gray-800 tracking-tight">
                        {{ $professional->name }}
                    </h1>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4 text-gray-600">
                        <p>Status:
                            <span
                                class="text-sm bg-green-100 text-green-600 font-semibold px-3 py-1 rounded-full shadow-sm">
                                {{ $professional->status }}
                            </span>
                        </p>
                        <p>Availability:
                            <span
                                class="text-sm bg-blue-100 text-blue-600 font-semibold px-3 py-1 rounded-full shadow-sm">
                                {{ $professional->is_available ? 'Available' : 'Unavailable' }}
                            </span>
                        </p>
                    </div>
                    <div class="text-gray-600 leading-relaxed">
                        <p><strong>Email:</strong> {{ $professional->email }}</p>
                        <p><strong>Contact:</strong> {{ $professional->contact }}</p>
                        <p><strong>Address:</strong> {{ $professional->address }}</p>
                    </div>
                </div>

                <div class="mt-6 md:mt-0">
                    <a href="{{ route('book', $professional->id) }}"
                        class="group relative inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-blue-500 text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <span>Book Now</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Education Card -->
            @foreach ($education as $edu)
                <div
                    class="bg-white/90 backdrop-blur-sm p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <h2 class="text-2xl font-bold text-indigo-700 mb-4 flex items-center gap-2">
                        🎓 Education
                    </h2>
                    <div class="space-y-3">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $edu->faculty }}</h3>
                        <p class="text-gray-600"><strong>Level:</strong> {{ $edu->level }}</p>
                        <p class="text-gray-600"><strong>Experience:</strong> {{ $edu->years_of_experience }} years</p>
                        <p class="text-gray-600"><strong>Skills:</strong>
                            @foreach ($edu->skills as $index => $skill)
                                <span
                                    class="inline-block bg-indigo-100 text-indigo-700 text-sm font-medium px-2 py-1 rounded-md mr-1 mb-1">{{ $skill }}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
            @endforeach

            <!-- Portfolio Card -->
            @foreach ($portfolio as $port)
                <div
                    class="bg-white/90 backdrop-blur-sm p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <h2 class="text-2xl font-bold text-indigo-700 mb-4 flex items-center gap-2">
                        💼 Portfolio
                    </h2>
                    <div class="space-y-3">
                        <h3 class="text-lg font-semibold text-gray-800">Project Website</h3>
                        <a href="{{ $port->link }}" target="_blank"
                            class="text-blue-600 hover:text-blue-800 font-medium underline underline-offset-4">View
                            Project</a>
                        <p class="text-gray-600 mt-2">
                            <strong>Resume:</strong>
                            <a href="https://example.com/resume.pdf"
                                class="text-indigo-600 hover:text-indigo-800 underline underline-offset-4">Download</a>
                        </p>
                    </div>
                </div>
            @endforeach

            <!-- Job Info Card -->
            <div
                class="bg-white/90 backdrop-blur-sm p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <h2 class="text-2xl font-bold text-indigo-700 mb-4 flex items-center gap-2">
                    🧑‍💼 Job Information
                </h2>
                <div class="space-y-3">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $jobInfo->job_title }}</h3>
                    <p class="text-gray-600"><strong>Hourly Rate:</strong> Rs. {{ $jobInfo->hourly_rate }}</p>
                    <div class="text-gray-600">
                        <span class="font-semibold">Description:</span>
                        <p class="mt-1 text-sm leading-relaxed">
                            {!! $jobInfo->description ?? 'No description available' !!}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Subtle background floating animation -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div
            class="absolute top-10 left-20 w-72 h-72 bg-indigo-300 opacity-30 rounded-full mix-blend-multiply filter blur-3xl animate-pulse">
        </div>
        <div
            class="absolute bottom-10 right-20 w-96 h-96 bg-blue-300 opacity-30 rounded-full mix-blend-multiply filter blur-3xl animate-pulse">
        </div>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Professional Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background: linear-gradient(180deg, #1d4ed8 0%, #a855f7 100%);
            background-attachment: fixed;
            color: #f1f5f9;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in {
            animation: slideIn 0.8s ease-out forwards;
        }

        .neumorphic {
            background: #1e293b;
            box-shadow: 8px 8px 16px rgba(0, 0, 0, 0.3), -8px -8px 16px rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .neumorphic:hover {
            box-shadow: 12px 12px 24px rgba(0, 0, 0, 0.4), -12px -12px 24px rgba(255, 255, 255, 0.1);
            transform: translateY(-5px);
        }

        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #f472b6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glow-button {
            background: linear-gradient(45deg, #3b82f6, #f472b6);
            transition: all 0.3s ease;
        }

        .glow-button:hover {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.6);
            transform: scale(1.05);
        }

        .bg-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800"%3E%3Cfilter id="bb"%3E%3CfeGaussianBlur in="SourceGraphic" stdDeviation="20" /%3E%3C/filter%3E%3Ccircle cx="400" cy="400" r="300" fill="%23ffffff" fill-opacity="0.05" filter="url(%23bb)" /%3E%3C/svg%3E');
            opacity: 0.3;
            pointer-events: none;
            z-index: 0;
        }

        .status-badge {
            background: linear-gradient(45deg, #22c55e, #4ade80);
            box-shadow: 0 0 15px rgba(34, 197, 94, 0.5);
            transition: all 0.3s ease;
        }

        .status-badge:hover {
            box-shadow: 0 0 25px rgba(34, 197, 94, 0.7);
            transform: scale(1.1);
        }

        .status-badge-unavailable {
            background: linear-gradient(45deg, #ef4444, #f87171);
            box-shadow: 0 0 15px rgba(239, 68, 68, 0.5);
        }

        .status-badge-unavailable:hover {
            box-shadow: 0 0 25px rgba(239, 68, 68, 0.7);
            transform: scale(1.1);
        }

        .card {
            background: #2d3748;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body class="min-h-screen">

    <!-- Particle Background -->
    <div class="bg-particles"></div>

    <div class="container mx-auto px-4 py-12 md:py-16 max-w-6xl relative z-10">

        <!-- Hero Section -->
        <div class="neumorphic p-8 md:p-12 rounded-3xl mb-16 slide-in flex flex-col items-center text-center">
            <div class="w-40 h-40 md:w-48 md:h-48 rounded-full overflow-hidden shadow-xl mb-6 relative">
                <img src="{{ asset(Storage::url($professional->profile)) }}" alt="{{ $professional->name }}"
                    class="object-cover w-full h-full" />
                <span
                    class="absolute bottom-2 right-2 text-white text-xs px-3 py-1 rounded-full font-medium shadow-md {{ $professional->is_available ? 'status-badge' : 'status-badge-unavailable' }}">
                    {{ $professional->is_available ? 'Available' : 'Unavailable' }}
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-3">{{ $professional->name }}</h1>
            <p class="text-xl font-medium text-gray-300 mb-6">{{ $jobInfo->job_title ?? 'Service Provider' }}</p>
            <div class="flex gap-4 mb-8">
                <span
                    class="px-5 py-2 text-sm font-medium text-gray-300 {{ $professional->is_available ? 'status-badge' : 'status-badge-unavailable' }}">{{ $professional->status }}</span>
                <span
                    class="px-5 py-2 text-sm font-medium text-gray-300 {{ $professional->is_available ? 'status-badge' : 'status-badge-unavailable' }}">{{ $professional->is_available ? 'Available' : 'Unavailable' }}</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8 max-w-2xl w-full">
                <p class="text-gray-300"><strong class="text-white">Email:</strong> {{ $professional->email }}</p>
                <p class="text-gray-300"><strong class="text-white">Contact:</strong> {{ $professional->contact }}</p>
                <p class="text-gray-300"><strong class="text-white">Address:</strong> {{ $professional->address }}</p>
            </div>
            <a href="{{ route('book', $professional->id) }}"
                class="glow-button px-8 py-3 rounded-full text-white font-bold text-lg flex items-center gap-3">
                Book Now
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>

        <!-- Content Sections -->
        <div class="space-y-12">
            <!-- Education Section -->
            <div class="neumorphic p-8 rounded-3xl slide-in" style="animation-delay: 0.2s;">
                <h2 class="text-3xl font-bold gradient-text mb-6 flex items-center gap-3">
                    <svg class="w-8 h-8 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zM12 14l.01-.01M12 19l9-5-9-5-9 5 9 5z" />
                    </svg>
                    Education & Skills
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($education as $edu)
                        <div class="card p-6 neumorphic">
                            <h3 class="text-lg font-semibold text-white mb-2">{{ $edu->faculty }}</h3>
                            <p class="text-gray-400 text-sm mb-1">Level: {{ $edu->level }}</p>
                            <p class="text-gray-400 text-sm mb-3">Experience: {{ $edu->years_of_experience }} years</p>
                            <div>
                                <p class="font-medium text-white text-sm mb-2">Skills:</p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($edu->skills as $skill)
                                        <span
                                            class="bg-gradient-to-r from-indigo-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                            {{ $skill }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Portfolio Section -->
            <div class="neumorphic p-8 rounded-3xl slide-in" style="animation-delay: 0.4s;">
                <h2 class="text-3xl font-bold gradient-text mb-6 flex items-center gap-3">
                    <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6H7m10 0h-3" />
                    </svg>
                    Portfolio
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($portfolio as $port)
                        <div class="card p-6 neumorphic">
                            <p class="text-gray-400 text-sm mb-3">Explore my projects and achievements.</p>
                            <a href="{{ $port->link }}" target="_blank"
                                class="text-indigo-400 font-semibold hover:text-indigo-300 transition text-sm">View
                                Project →</a>
                            <p class="text-gray-400 text-sm mt-3">
                                Resume: <a href="https://example.com/resume.pdf"
                                    class="text-indigo-400 font-semibold hover:text-indigo-300 transition">Download
                                    →</a>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Job Info Section -->
            <div class="neumorphic p-8 rounded-3xl slide-in" style="animation-delay: 0.6s;">
                <h2 class="text-3xl font-bold gradient-text mb-6 flex items-center gap-3">
                    <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Job Information
                </h2>
                <div class="bg-gray-800/30 p-6 rounded-xl">
                    <h3 class="text-xl font-semibold text-white mb-3">{{ $jobInfo->job_title }}</h3>
                    <p class="text-gray-400 mb-3">Hourly Rate: <span
                            class="text-indigo-400 font-semibold">${{ $jobInfo->hourly_rate }}</span></p>
                    <div>
                        <p class="font-medium text-white mb-2">Description:</p>
                        <p class="text-gray-400 leading-relaxed">
                            {!! $jobInfo->description ?? 'No description available' !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
