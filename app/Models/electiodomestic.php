<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class electiodomestic extends Model
{
    use HasFactory;
    protected $table = 'electrodomestic';
    protected $primaryKey = 'idElettrodomestico';
    public $timestamps = false;
}
