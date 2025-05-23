<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    public function services()
    {
        return $this->hasMany(Service::class); // Один к многим: одна категория может иметь несколько услуг
    }
}
