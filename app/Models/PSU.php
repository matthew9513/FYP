<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PSU extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'manufacturer','energyEfficient','wattage','modularity','supplier','warranty','price',
    ];
}
