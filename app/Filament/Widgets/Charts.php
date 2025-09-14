<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class Charts extends ChartWidget
{
    // protected ?string $heading = 'Charts';
    protected  ?string $heading = 'Professional Chart';

    // protected int | string | array $columnSpan = 'full'; // This makes the widget full-width

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
