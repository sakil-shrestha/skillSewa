<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation and Login Credentials</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources / css / app . css', 'resources / js / app . js'])
    <style>
        /* Additional styles to ensure email client compatibility */
        body {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
        }

        a {
            text-decoration: none;
        }

        @media only screen and (max-width: 600px) {
            .container {
                padding: 16px !important;
            }

            .button {
                width: 100% !important;
            }
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <table width="100%" cellpadding="0" cellspacing="0" class="bg-gray-100">
        <tr>
            <td align="center" class="py-8">
                <table width="100%" max-width="600px" cellpadding="0" cellspacing="0"
                    class="bg-white rounded-lg shadow-lg container mx-auto">
                    <!-- Header -->
                    <tr>
                        <td class="bg-blue-600 text-white text-center py-6 rounded-t-lg">
                            <h1 class="text-2xl font-bold">Booking Confirmation</h1>
                            <p class="text-sm mt-2">New Booking Assigned to You</p>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Dear {{ $book->professional->name }},
                            </h2>
                            <p class="text-gray-600 mb-4">A new booking has been assigned to you. Below are the details
                                of the booking along with your login credentials to access the system.</p>

                            <!-- Booking Details -->
                            <div class="border border-gray-200 rounded-lg p-4 mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Booking Details</h3>
                                <table class="w-full text-left text-gray-600">
                                    <tr>
                                        <td class="font-medium py-2 w-1/3">Booking ID:</td>
                                        <td class="py-2">{{ $book->id }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-medium py-2">Client:</td>
                                        <td class="py-2">{{ $book->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-medium py-2">Start Time:</td>
                                        <td class="py-2">{{ $book->start_time }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-medium py-2">End Time:</td>
                                        <td class="py-2">{{ $book->end_time }}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-medium py-2">Status:</td>
                                        <td class="py-2">
                                            <span class="[Booking Status Class]">{{ $book->status }}</span>
                                        </td>
                                    </tr>

                                </table>
                            </div>



                            <!-- Instructions -->
                            <p class="text-gray-600 mb-4">Please review the booking details and prepare accordingly. The
                                booking will automatically update to "completed" 48 hours after the start time unless
                                otherwise modified. If you have any questions, contact support at <a
                                    href="mailto:support@example.com"
                                    class="text-blue-600 underline">support@example.com</a>.</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td class="bg-gray-200 text-gray-600 text-center py-4 rounded-b-lg">
                            <p class="text-sm">© 2025 Your Skill Sewa. All rights reserved.</p>
                            <p class="text-sm">Bharatpur-27,Chitwan</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
