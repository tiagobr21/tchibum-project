<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Users extends BaseWidget
{
    protected function getStats(): array
    {
        return [
          Stat::make('Total Users',User::count()),
          Stat::make('user',Auth::user()->name)

        ];
    }
}
