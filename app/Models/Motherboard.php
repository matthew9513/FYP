<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'manufacturer','socketType','formFactor','memoryMax','memorySlots','supplier','warranty','price',
    ];
}
