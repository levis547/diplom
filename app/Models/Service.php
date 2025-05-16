<?php

// app/Models/Service.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Отключаем массовое присваивание, позволяя массовое присваивание всех полей
    protected $guarded = [];

    public function masters()
    {
        return $this->belongsToMany(Master::class, 'master_services');
    }
    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
    public function appointments()
    {
        return $this->belongsToMany(Appointment::class, 'appointment_services');
    }
}
