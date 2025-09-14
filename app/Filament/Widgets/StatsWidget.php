<?php

namespace App\Filament\Widgets;

use App\Models\Professional;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Unique views', '192.1k'),
            Stat::make('Total Professional', Professional::count()),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
