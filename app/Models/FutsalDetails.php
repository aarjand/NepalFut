<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FutsalDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'address',
        'price',
        'rating',
        'pan_vat_image',
        'available_date',
        'time_slots',
    ];

    protected $casts = [
        'available_date' => 'date',
        'time_slots' => 'array',
    ];

    
    }

