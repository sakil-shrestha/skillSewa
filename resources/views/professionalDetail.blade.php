{{-- <!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <title>Professional Search Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 40px;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            width: 320px;
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
            flex-grow: 1;
        }

        .card-content h2 {
            margin: 0 0 10px;
            font-size: 1.3rem;
            color: #007bff;
        }

        .card-content p {
            margin: 6px 0;
            font-size: 0.95rem;
            color: #555;
        }

        .btn-details {
            padding: 20px;
            text-align: right;
            border-top: 1px solid #eee;
        }

        .view-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .view-btn:hover {
            background-color: #0056b3;
        }

        .view-btn i {
            margin-right: 6px;
        }
    </style>
</head>

        <body>


        <main class="mt-10 space-y-8">






            <section class="grid md:grid-cols-3 gap-6">
                <div class="md:col-span-3">
                    <h2 class="text-2xl font-bold gradient-accent">Education & Skills</h2>
                    <p class="text-sm subtle mt-1">Qualifications, experience and the technologies they work with.</p>
                </div>

                @foreach ($education as $edu)
                    <article class="glass p-5 rounded-2xl hover:shadow-md transition">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="font-semibold text-slate-900">{{ $edu->faculty }}</h3>
                                <div class="text-xs subtle mt-1">Level: {{ $edu->level }}</div>
                                <div class="text-xs subtle mt-1">Experience: {{ $edu->years_of_experience }} years</div>
                            </div>
                        </div>

                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach ($edu->skills as $skill)
                                <span class="skill-pill inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium"
                                      style="background:linear-gradient(90deg,#f8fafc,#eef2ff); border:1px solid rgba(15,23,42,0.03);">
                                    {{ $skill }}
                                </span>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </section>

            <!-- Portfolio -->
            <section>
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold gradient-accent">Portfolio</h2>
                        <p class="text-sm subtle mt-1">Recent projects & links.</p>
                    </div>
                </div>

                <div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($portfolio as $port)
                        <div class="glass p-4 rounded-2xl hover:scale-[1.01] transition">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">Project</h3>
                                    <p class="text-xs subtle">{{ Str::limit($port->title ?? 'Project Website', 60) }}</p>
                                </div>
                                <a href="{{ $port->link }}" target="_blank" class="text-sm font-semibold"
                                   style="color: #7c3aed;">View →</a>
                            </div>

                            @if($port->description)
                                <p class="text-sm subtle mt-3">{{ Str::limit($port->description, 120) }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </section>

            <section>
                <h2 class="text-2xl font-bold gradient-accent">Job Information</h2>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-2 glass p-6 rounded-2xl">
                        <h3 class="text-lg font-semibold text-slate-900">{{ $jobInfo?->job_title ?? 'Not available' }}</h3>
                        <p class="mt-2 text-sm subtle">Hourly Rate: <span class="font-semibold text-slate-800">Rs. {{ $jobInfo?->hourly_rate ?? '—' }}</span></p>

                        <div class="mt-4 text-sm subtle leading-relaxed">
                            {!! $jobInfo->description ?? '<em class="text-slate-500">No description provided.</em>' !!}
                        </div>

                        <div class="mt-6 flex gap-3">
                            <a href="{{ route('book', $professional->id) }}" class="px-4 py-2 rounded-full text-white font-semibold"
                               style="background:linear-gradient(90deg,#7c3aed,#06b6d4);">Book Now</a>
                            <a href="#" class="px-4 py-2 rounded-full glass subtle">Send Inquiry</a>
                        </div>
                    </div>

                    <aside class="glass p-6 rounded-2xl">
                        <div class="text-xs subtle">Available slots</div>
                        <div class="mt-2 text-sm text-slate-800 font-medium">Mon - Fri</div>
                        <div class="mt-3 text-xs subtle">Avg. response time</div>
                        <div class="mt-1 text-sm font-medium">Within 24 hours</div>

                        <div class="mt-5">
                            <div class="text-xs subtle">Languages</div>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded-full text-xs glass">English</span>
                                <span class="px-3 py-1 rounded-full text-xs glass">Nepali</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
        </main>

        <footer class="mt-12 text-center text-sm subtle">
            <div class="max-w-2xl mx-auto">
                <p>© {{ date('Y') }} SkillSewa. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <button id="backTop" aria-label="Back to top"
            class="fixed right-6 bottom-6 w-12 h-12 rounded-full flex items-center justify-center shadow-lg glass hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-700" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script>
        const backTop = document.getElementById('backTop');
        backTop.style.opacity = 0;

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backTop.style.opacity = 1;
                backTop.style.transform = 'translateY(0)';
            } else {
                backTop.style.opacity = 0;
                backTop.style.transform = 'translateY(12px)';
            }
        });

        backTop.addEventListener('click', () => {
            window.scrollTo({top:0, behavior:'smooth'});
        });
    </script>
</body>
</html>
 --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Professional Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes gradientMove {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .animate-gradient {
      background-size: 300% 300%;
      animation: gradientMove 6s ease infinite;
    }

    .float {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-10px);
      }

      100% {
        transform: translateY(0px);
      }
    }
  </style>
</head>

<body class="bg-gradient-to-br from-indigo-100 via-sky-50 to-pink-100 min-h-screen font-sans overflow-x-hidden">

  <div class="relative">
    <!-- Animated Blobs Background -->
    <div
      class="absolute top-[-10rem] left-[-5rem] w-96 h-96 bg-gradient-to-r from-purple-400 via-indigo-500 to-blue-400 rounded-full opacity-30 blur-3xl animate-gradient">
    </div>
    <div
      class="absolute bottom-[-10rem] right-[-5rem] w-[30rem] h-[30rem] bg-gradient-to-r from-pink-400 via-rose-400 to-yellow-300 rounded-full opacity-30 blur-3xl animate-gradient">
    </div>
  </div>

  <div class="relative container mx-auto px-6 py-16">

    <!-- Main Profile Card -->
    <div
      class="relative bg-white/80 backdrop-blur-xl shadow-2xl border border-white/50 rounded-3xl p-10 flex flex-col md:flex-row items-center md:items-start gap-10 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(59,130,246,0.3)]">

      <!-- Profile Image -->
      <div
        class="relative w-44 h-44 rounded-2xl overflow-hidden ring-4 ring-indigo-500/60 shadow-lg float hover:scale-105 transition-transform duration-500">
        <img src="{{ asset(Storage::url($professional->profile)) }}" alt="{{ $professional->name }}"
          class="object-cover w-full h-full" />
        <span
          class="absolute bottom-2 right-2 bg-green-500 text-white text-xs px-3 py-1 rounded-full font-medium shadow-lg">
          {{ $professional->is_available ? 'Available' : 'Unavailable' }}
        </span>
      </div>

      <!-- Info Section -->
      <div class="flex-1 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-3">
          {{ $professional->name }}
        </h1>
        <p class="text-lg text-gray-600 mb-5">Professional {{ $jobInfo->job_title ?? 'Service Provider' }}</p>

        <div class="flex flex-wrap justify-center md:justify-start gap-4 mb-5">
          <span
            class="px-4 py-2 bg-gradient-to-r from-indigo-500 to-blue-500 text-white text-sm rounded-full font-semibold shadow-md hover:shadow-lg transition duration-300">
            {{ $professional->status }}
          </span>
          <span
            class="px-4 py-2 bg-gradient-to-r from-green-400 to-teal-400 text-white text-sm rounded-full font-semibold shadow-md hover:shadow-lg transition duration-300">
            {{ $professional->is_available ? 'Available' : 'Unavailable' }}
          </span>
        </div>

        <div class="text-gray-600 space-y-2 leading-relaxed">
          <p><strong>Email:</strong> {{ $professional->email }}</p>
          <p><strong>Contact:</strong> {{ $professional->contact }}</p>
          <p><strong>Address:</strong> {{ $professional->address }}</p>
        </div>

        <a href="{{ route('book', $professional->id) }}"
          class="inline-flex items-center gap-3 bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-500 text-white mt-8 px-8 py-3 rounded-full text-lg font-semibold shadow-lg transition-all duration-300 hover:shadow-[0_0_25px_rgba(79,70,229,0.7)] hover:scale-105">
          <span>Book Now</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
          </svg>
        </a>
      </div>
    </div>

    <!-- Grid Section -->
    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-10">

      <!-- Education -->
      @foreach ($education as $edu)
        <div
          class="bg-white/90 rounded-2xl p-8 shadow-lg hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2 hover:border-indigo-300 hover:bg-gradient-to-br hover:from-indigo-50 hover:to-white">
          <h2 class="text-2xl font-bold text-indigo-700 mb-4 flex items-center gap-2">
            🎓 Education
          </h2>
          <h3 class="text-lg font-semibold text-gray-800">{{ $edu->faculty }}</h3>
          <p class="text-gray-600">Level: {{ $edu->level }}</p>
          <p class="text-gray-600">Experience: {{ $edu->years_of_experience }} years</p>
          <div class="mt-3">
            <p class="font-medium text-gray-700">Skills:</p>
            <div class="flex flex-wrap mt-2 gap-2">
              @foreach ($edu->skills as $skill)
                <span
                  class="bg-indigo-100 text-indigo-700 text-sm font-medium px-3 py-1 rounded-full hover:bg-indigo-200 transition-all">
                  {{ $skill }}
                </span>
              @endforeach
            </div>
          </div>
        </div>
      @endforeach

      <!-- Portfolio -->
      @foreach ($portfolio as $port)
        <div
          class="bg-white/90 rounded-2xl p-8 shadow-lg hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2 hover:border-purple-300 hover:bg-gradient-to-br hover:from-purple-50 hover:to-white">
          <h2 class="text-2xl font-bold text-purple-700 mb-4 flex items-center gap-2">
            💼 Portfolio
          </h2>
          <p class="text-gray-600 mb-3">Check out some of my works and projects.</p>
          <a href="{{ $port->link }}" target="_blank"
            class="block text-purple-600 font-semibold hover:text-purple-800 underline underline-offset-4 transition-all">View
            Project</a>
          <p class="text-gray-600 mt-3">
            Resume:
            <a href="https://example.com/resume.pdf"
              class="text-blue-600 font-medium hover:text-blue-800 underline underline-offset-4 transition-all">Download</a>
          </p>
        </div>
      @endforeach

      <!-- Job Info -->
      <div
        class="bg-white/90 rounded-2xl p-8 shadow-lg hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2 hover:border-sky-300 hover:bg-gradient-to-br hover:from-sky-50 hover:to-white">
        <h2 class="text-2xl font-bold text-sky-700 mb-4 flex items-center gap-2">
          🧑‍💼 Job Information
        </h2>
        <h3 class="text-lg font-semibold text-gray-800">{{ $jobInfo->job_title }}</h3>
        <p class="text-gray-600">Hourly Rate:
          <span class="text-indigo-600 font-semibold">${{ $jobInfo->hourly_rate }}</span>
        </p>
        <div class="mt-3">
          <p class="font-medium text-gray-700">Description:</p>
          <p class="mt-2 text-gray-600 leading-relaxed">
            {!! $jobInfo->description ?? 'No description available' !!}
          </p>
        </div>
      </div>

    </div>
  </div>

</body>

</html>

