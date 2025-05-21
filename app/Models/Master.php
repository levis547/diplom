<?php

// app/Models/Master.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    // Отключаем массовое присваивание, позволяя массовое присваивание всех полей
    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'master_services');
    }
    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }
// Новое отношение: все записи, где этот мастер участвует
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
