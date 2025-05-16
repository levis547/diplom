<?php

// app/Models/Appointment.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Отключаем массовое присваивание, позволяя массовое присваивание всех полей
    protected $guarded = false;

    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function service()
    {
        return $this->belongsToMany(Service::class, 'appointment_services');
    }

    public function master()
    {
        return $this->belongsTo(Master::class);
    }
    public static function countAppointments()
    {
        return self::count();
    }
}
