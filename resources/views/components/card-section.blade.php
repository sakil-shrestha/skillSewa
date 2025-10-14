{{-- <div class="professional-card-container">
    @foreach ($professionals as $professional)
        <div class="custom-professional-card">
            <div class="professional__card grid-card">
                <img src="{{ asset(Storage::url($professional->profile)) }}" alt="{{ $professional->name }}"
                    class="professional__card--image" />

                <div class="company-name">
                    <h2>{{ $professional->name }}</h2>
                    @foreach ($professional->jobInfos as $job)
                        <p>{{ $job->job_title ?? 'Service Type' }}</p>
                    @endforeach
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
                            <span>{{ $professional->contact ?? '+977-056-XXXXXX' }}</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>{{ $professional->address ?? 'Bharatpur-10, Chitwan' }}</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-money-bill-wave"></i>
                            @foreach ($professional->jobInfos as $job)
                                <span>{{ $job->hourly_rate ?? 'Rs. 500' }}</span>
                            @endforeach
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
</div> --}}
<section class="max-w-7xl mx-auto px-6 py-12 fade-in">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-900 mb-2">Appointments with Top Professionals</h2>
        <p class="text-gray-600 text-sm md:text-base">Experienced professionals available for online or in-person
            consultation.</p>
    </div>

    <!-- Swiper Carousel -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($professionals as $professional)
                <div class="swiper-slide flex justify-center">
                    <div class="professional-card bg-white rounded-xl overflow-hidden w-64">
                        <!-- Image -->
                        <div class="h-56 bg-gray-100 overflow-hidden">
                            <img src="{{ asset(Storage::url($professional->profile)) }}" alt="{{ $professional->name }}"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>

                        <!-- Info -->
                        <div class="p-4 text-center">
                            <h3 class="text-base font-semibold text-gray-900">{{ $professional->name }}</h3>

                            @foreach ($professional->jobInfos as $job)
                                <p class="text-gray-500 text-sm mb-2">{{ $job->job_title ?? 'Service Type' }}</p>
                            @endforeach

                            <p class="text-gray-600 text-xs mb-4">
                                <i class="fa-regular fa-clock mr-1"></i>
                                Next available:
                                <span class="text-rose-600 font-medium">Oct 15 at 7:00 AM</span>
                            </p>

                            <a href="{{ route('professional.detail', $professional) }}"
                                class="book-btn inline-flex items-center justify-center w-full px-4 py-2 text-white rounded-lg font-medium shadow-sm">
                                <i class="fa-solid fa-calendar-check mr-2 text-sm"></i> Book Appointment
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- Pagination dots -->
        <div class="swiper-pagination mt-4"></div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 25,
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
            1280: {
                slidesPerView: 4
            },
        },
    });
</script>
