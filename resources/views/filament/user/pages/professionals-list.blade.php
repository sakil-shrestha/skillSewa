<x-filament::page>

    {{ dd($professionals) }}
    <div class="professional-card-container">
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
