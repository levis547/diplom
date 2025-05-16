<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitlsPage extends Model
{
    use HasFactory;

    protected $table = 'titls_pages';

    protected $fillable = [
        'page_url',
        'page_title',
        'page_description'
    ];
}
