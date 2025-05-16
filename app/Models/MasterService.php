<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterService extends Model
{
    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }
    public function master()
    {
        return $this->belongsTo(Master::class);
    }

    // Связь "многие к одному" с услугой
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
