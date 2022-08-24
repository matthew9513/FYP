<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPU extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'manufacturer','memory','supplier','warranty','price',
    ];
}
