<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;





class Users extends BaseWidget
{

    protected function getStats(): array
    {

        return [
          Stat::make('Total de Usuários',User::where('role','user')->count()),

        ];
    }
}
