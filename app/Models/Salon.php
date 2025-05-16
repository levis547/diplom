<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    protected $fillable = [
        'address', 'phone', 'work_time', 'image_path'
    ];

    // Связь с услугами
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    // Связь с мастерами
    public function masters()
    {
        return $this->hasMany(Master::class);
    }

    // Связь с записями
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
