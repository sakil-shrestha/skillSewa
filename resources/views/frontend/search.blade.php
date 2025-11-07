{{--


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Search Results</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #eef2f3, #e3e9ee);
            margin: 0;
            padding: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-size: 2.2rem;
            letter-spacing: 1px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 32px;
        }

        .card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
            border-radius: 16px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 14px 30px rgba(0, 0, 0, 0.12);
        }

        .card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }

        .card-content {
            padding: 22px;
        }

        .card-content h2 {
            margin: 0 0 12px;
            font-size: 1.5rem;
            color: #0067ff;
            font-weight: 600;
        }

        .card-content p {
            margin: 8px 0;
            color: #444;
            font-size: 0.93rem;
            line-height: 1.45;
        }

        .card-content hr {
            margin: 15px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        .btn-details {
            margin-top: 18px;
            text-align: right;
        }

        .view-btn {
            background: #0067ff;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .view-btn:hover {
            background: #0052cc;
            box-shadow: 0 4px 10px rgba(0, 102, 255, 0.3);
        }
    </style>
</head>

<body>
    <h1>Search Results</h1>

    <div class="grid">
        @foreach ($job as $j)
        <div class="card">
            <img src="{{ asset(Storage::url($j->professional->profile)) }}" alt="{{ $j->professional->name }}">

            <div class="card-content">
                <h2>{{ $j->job_title }}</h2>
                <p><strong>Rate:</strong> ${{ $j->hourly_rate }}/hr</p>
                <p>{!! $j->description !!}</p>

                <hr>

                <p><strong>Name:</strong> {{ $j->professional->name }}</p>
                <p><strong>Address:</strong> {{ $j->professional->address }}</p>
                <p><strong>Email:</strong> {{ $j->professional->email }}</p>
                <p><strong>Contact:</strong> {{ $j->professional->contact }}</p>

                <div class="btn-details">
                    <a href="{{ route('professional.detail', $j->professional) }}" class="view-btn">
                        <i class="fa-solid fa-circle-info"></i> View Details
                    </a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</body>
</html> --}}
