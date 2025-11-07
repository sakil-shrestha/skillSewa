<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex flex-col items-center justify-center min-h-screen px-6">
    <!-- Breadcrumb -->
    <nav class="w-full max-w-3xl mb-6" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-gray-600 text-sm">
            <li>
                <a href="/" class="hover:text-blue-600">Home</a>
            </li>
            <li>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </li>
            <li class="text-gray-400">Page Not Found</li>
        </ol>
    </nav>

    <!-- 404 Card -->
    <div class="text-center bg-white shadow-lg rounded-2xl p-10 max-w-lg">
        <h1 class="text-8xl font-bold text-blue-600">404</h1>
        <h2 class="mt-4 text-2xl font-semibold text-gray-800">Oops! Page not found</h2>
        <p class="mt-2 text-gray-500">The page you’re looking for doesn’t exist or has been moved.</p>

        <div class="mt-6 flex justify-center space-x-4">
            <a href="/"
               class="px-5 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-200">
                Go Home
            </a>
            <button onclick="window.history.back()"
                    class="px-5 py-2 border border-gray-300 text-gray-700 rounded-full hover:bg-gray-100 transition duration-200">
                Go Back
            </button>
        </div>
    </div>

    <!-- Decorative Illustration -->
    <div class="absolute bottom-8 text-gray-400 text-sm">
        <p>© 2025 Your Company. All rights reserved.</p>
    </div>
</body>
</html>
