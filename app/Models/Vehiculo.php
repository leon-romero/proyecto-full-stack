<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';

    // CONST STATUS = [
    //     1 => 'PENDIENTE',
    //     2 => 'REALIZADO',
    //     3 => 'CANCELADO'
    // ];

    // public function getStatus()
    // {
    //     return self::STATUS[$this->status];
    // }
}
