<?php

namespace App\Filament\Professional\Widgets;

use App\Models\Payment;
use App\Models\Professional;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class PaymentStat extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $userId = Auth::user()->id; // Get currently logged-in user ID

        // Filter only this user's payments
        $userPayments = Payment::where('professional_id', $userId);

        $totalPayments = $userPayments->count();
        $totalAmount = $userPayments->sum('amount') / 100;
        $successful = $userPayments->where('status', 'success')->count();
        $pending = $userPayments->where('status', 'pending')->count();
        $failed = $userPayments->where('status', 'failed')->count();

        return [
            Stat::make('Total Payments', $totalPayments)
                ->description('All payment records')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('primary'),

            Stat::make('Total Amount', 'Rs. ' . number_format($totalAmount, 2))
                ->description('Total revenue received')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('success'),

            Stat::make('Successful Payments', $successful)
                ->description('Payments marked as successful')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Pending Payments', $pending)
                ->description('Awaiting confirmation')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('Failed Payments', $failed)
                ->description('Unsuccessful transactions')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger'),

            Stat::make('Total Professionals', Professional::count())
                ->description('Workers to provide the services')
                ->descriptionIcon('heroicon-m-user')
                ->color('primary'),

        ];
    }
}
