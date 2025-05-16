<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'full_name',
        'rating',
        'comment',
        'status',
    ];
    public static function countReviews()
    {
        return self::where('status', 'На рассмотрении')->count(); // фильтруем по статусу "pending"
    }

}
