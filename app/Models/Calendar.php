<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comunidade;

class Calendar extends Model
{
    protected $table = 'calendar';
    protected $fillable = ['title','comunidade_id','start_date','end_date','color'];

    public function comunidade()
    {
        return $this->belongsTo(Comunidade::class);
    }

   /*  public static function isOverlapping($comunidadeId, $startDate, $endDate)
    {
        return self::where('comunidade_id', $comunidadeId)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('start_date', [$startDate, $endDate])
                    ->orWhereBetween('end_date', [$startDate, $endDate])
                    ->orWhere(function ($query) use ($startDate, $endDate) {
                        $query->where('start_date', '<=', $startDate)
                            ->where('end_date', '>=', $endDate);
                    });
            })
            ->exists();
    } */

}
