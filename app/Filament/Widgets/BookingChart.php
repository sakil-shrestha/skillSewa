<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class BookingChart extends ChartWidget
{
    protected ?string $heading = 'Booking Chart';

    protected static ?int $sort = 2;
    protected int|array|string $columnSpan = "full";

    protected function getData(): array
    {
        // Get last 7 days
        $dates = collect(range(6, 0))->map(function ($i) {
            return Carbon::today()->subDays($i)->format('Y-m-d');
        });

        $bookings = $dates->map(function ($date) {
            return Booking::whereDate('created_at', $date)->count();
        });

        return [
            'datasets' => [
                [
                    'label' => 'Bookings per Day',
                    'data' => $bookings,
                    'backgroundColor' => 'rgba(59,130,246,0.7)', // Tailwind blue-500
                ],
            ],
            'labels' => $dates->map(fn($d) => Carbon::parse($d)->format('M d')),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
