<x-filament-widgets::widget>
    <x-filament::section>
        <div class="p-6 space-y-6 bg-gray-50 rounded-3xl shadow-sm">

            {{-- === Top Stat Cards === --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Earnings --}}
                <div
                    class="flex items-center p-5 bg-white rounded-2xl shadow-sm hover:shadow-md transition duration-300 transform hover:-translate-y-1">
                    <div
                        class="bg-gradient-to-br from-blue-100 to-blue-200 text-blue-600 p-3 rounded-xl mr-4 flex items-center justify-center">
                        <i class="fa-solid fa-wallet text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Earnings</p>
                        <h2 class="text-2xl font-bold text-gray-800">
                            ${{ number_format($this->getData()['earnings'], 2) }}</h2>
                    </div>
                </div>

                {{-- Appointments --}}
                <div
                    class="flex items-center p-5 bg-white rounded-2xl shadow-sm hover:shadow-md transition duration-300 transform hover:-translate-y-1">
                    <div
                        class="bg-gradient-to-br from-purple-100 to-purple-200 text-purple-600 p-3 rounded-xl mr-4 flex items-center justify-center">
                        <i class="fa-solid fa-calendar-check text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Appointments</p>
                        <h2 class="text-2xl font-bold text-gray-800">{{ $this->getData()['appointments'] }}</h2>
                    </div>
                </div>

                {{-- Patients --}}
                <div
                    class="flex items-center p-5 bg-white rounded-2xl shadow-sm hover:shadow-md transition duration-300 transform hover:-translate-y-1">
                    <div
                        class="bg-gradient-to-br from-green-100 to-green-200 text-green-600 p-3 rounded-xl mr-4 flex items-center justify-center">
                        <i class="fa-solid fa-user-group text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Patients</p>
                        <h2 class="text-2xl font-bold text-gray-800">{{ $this->getData()['patients'] }}</h2>
                    </div>
                </div>
            </div>

            {{-- === Latest Bookings === --}}
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2 mb-4">
                    <i class="fa-solid fa-clock text-blue-500"></i> Latest Bookings
                </h3>

                <div class="divide-y divide-gray-100">
                    @forelse ($this->getData()['bookings'] as $booking)
                        <div
                            class="flex justify-between items-center py-3 px-2 hover:bg-gray-50 rounded-xl transition-all duration-200">
                            <div class="flex items-center gap-3">
                                <img src="{{ $booking->user && $booking->user->profile ? asset(Storage::url($booking->user->profile)) : asset('images/default-user.png') }}"
                                    alt="User"
                                    class="w-10 h-10 rounded-full object-cover shadow-sm border border-gray-200">

                                <div>
                                    <p class="text-sm font-semibold text-gray-800">
                                        {{ $booking->user->name ?? 'Unknown User' }}</p>
                                    <p class="text-xs text-gray-500">Booking on
                                        {{ \Carbon\Carbon::parse($booking->start_time)->format('d M Y') }}</p>
                                </div>
                            </div>

                            {{-- Booking Status --}}
                            <div>
                                @if ($booking->status === 'completed')
                                    <span
                                        class="px-3 py-1 text-xs font-semibold text-green-600 bg-green-100 rounded-full">Completed</span>
                                @elseif ($booking->status === 'cancelled')
                                    <span
                                        class="px-3 py-1 text-xs font-semibold text-red-600 bg-red-100 rounded-full">Cancelled</span>
                                @else
                                    <span
                                        class="px-3 py-1 text-xs font-semibold text-yellow-600 bg-yellow-100 rounded-full capitalize">
                                        {{ $booking->status ?? 'Pending' }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center text-sm py-4">No recent bookings found.</p>
                    @endforelse
                </div>
            </div>
        </div>

        {{-- ==== Animations ==== --}}
        <style>
            @keyframes fade-up {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            div[p-6] {
                animation: fade-up 0.5s ease-in-out;
            }
        </style>

    </x-filament::section>
</x-filament-widgets::widget>
