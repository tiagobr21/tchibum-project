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
        $users = DB::table(config('session.table'))
            ->distinct()
            ->select(['users.id', 'users.name', 'users.email'])
            ->whereNotNull('user_id')
            ->leftJoin('users', config('session.table') . '.user_id', '=', 'users.id')
            ->get();

        return [
          Stat::make('Total de Usuários',User::where('role','user')->count()),
          Stat::make('Usuários Online',   DB::table(config('session.table'))->count()),
        ];
    }
}
