<?php

namespace App\Filament\User\Pages;

use App\Models\JobInfo;
use App\Models\Professional;
use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;

class ProfessionalsList extends Page
{
    protected string $view = 'filament.user.pages.professionals-list';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingOffice;

    // protected static string $view = 'filament.pages.professionals-list';

    public $professionals;

    public function mount(): void
    {

        $this->professionals = Professional::where('status', 'approved')->with('jobInfos')->get();
    }

    // protected function getHeader(): ?\Illuminate\Contracts\View\View
    // {
    //     return view('filament.pages.professionals-list-header');
    // }
}
