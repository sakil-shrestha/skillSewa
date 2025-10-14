<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use App\Models\Professional;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Paymentstat extends StatsOverviewWidget
{
    protected function getStats(): array
    {

        $totalPayments = Payment::count();
        $totalAmount = Payment::sum('amount') / 100;
        $successful = Payment::where('status', 'success')->count();
        $pending = Payment::where('status', 'pending')->count();
        $failed = Payment::where('status', 'failed')->count();

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
