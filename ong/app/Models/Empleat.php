<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleat extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nif',
        'nom',
        'cognoms',
        'adreça',
        'poblacio',
        'comarca',
        'telfix',
        'telf',
        'email',
        'dataingres'
    ];
}
