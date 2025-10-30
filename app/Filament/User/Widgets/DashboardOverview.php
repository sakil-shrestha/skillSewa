<?php

namespace App\Filament\User\Widgets;

use App\Models\Booking;
use App\Models\Payment;
use Filament\Widgets\Widget;

class DashboardOverview extends Widget
{
    protected string $view = 'filament.user.widgets.dashboard-overview';
    protected int|string|array $columnSpan = 'full';

    public function getData(): array
    {
        $earnings = Payment::where('status', 'success')->sum('amount');
        $appointments = Booking::count();
        $patients = Booking::distinct('user_id')->count('user_id');

        $bookings = Booking::with(['user', 'professional'])
            ->latest()
            ->take(5)
            ->get();

        return compact('earnings', 'appointments', 'patients', 'bookings');
    }
}
