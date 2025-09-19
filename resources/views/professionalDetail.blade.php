<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="container mx-auto px-4 py-8">
        {{ asset(Storage::url($professional->profile)) }}
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <img src="{{ asset(Storage::url($professional->profile)) }}" alt="Profile"
                    class="w-32 h-32 rounded-full object-cover border-4 border-blue-500">
                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-3xl font-bold text-gray-800">{{ $professional->name }}</h1>

                    {{-- @foreach ($jobInfo as $job)
                        <p class="text-gray-600 mt-2">{{ $job->job_title }}</p>
                    @endforeach --}}

                    <p class="text-gray-500">Status: <span
                            class="text-green-500 font-semibold">{{ $professional->status }}</span></p>
                    <p class="text-gray-500">Availability: <span
                            class="text-green-500 font-semibold">{{ $professional->is_available ? 'Available' : 'Unavailable' }}</span>
                    </p>
                    <p class="text-gray-500 mt-2">Email: {{ $professional->email }}</p>
                    <p class="text-gray-500">Contact: {{ $professional->contact }}</p>
                    <p class="text-gray-500">Address: {{ $professional->address }} </p>
                </div>
                <button
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">Book
                    Now</button>
            </div>
        </div>

        <!-- Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Education Card -->
            @foreach ($education as $edu)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Education</h2>
                    <div class="space-y-4">

                        <div>
                            <h3 class="text-lg font-medium text-gray-700">{{ $edu->faculty }}</h3>
                            <p class="text-gray-500">Level:{{ $edu->level }}</p>
                            <p class="text-gray-500">Years of Experience:{{ $edu->years_of_experience }}
                            </p>
                            <p class="text-gray-500">Skills:
                                @foreach ($edu->skills as $index => $skill)
                                    {{ $skill }}

                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </p>
                        </div>


                    </div>

                </div>
            @endforeach


            <!-- Portfolio Card -->
            @foreach ($portfolio as $port)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Portfolio</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-medium text-gray-700">Project Website</h3>
                            <a href="{{ $port->link }}" target="_blank" class="text-blue-500 hover:underline">View
                                Project</a>
                            <p class="text-gray-500 mt-2">Resume: <a href="https://example.com/resume.pdf"
                                    class="text-blue-500 hover:underline">Download</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Job Info Card -->


            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Job Information</h2>
                <div class="space-y-4">
                    <div>
                        <h3 class="text-lg font-medium text-gray-700">{{ $jobInfo->job_title }}</h3>
                        <p class="text-gray-500">Hourly Rate: {{ $jobInfo->hourly_rate }}</p>
                        <div class="text-gray-500">
                            <span class="font-medium">Description:</span>
                            <p class="line-clamp-2 mt-1 leading-relaxed">
                                {!! $jobInfo->description ?? 'No description available' !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
