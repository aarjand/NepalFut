<?php

namespace App\Models;

use App\Http\Controllers\BookingFutsalsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingFutsal extends Model
{
    use HasFactory;

    protected $table = 'booking_details'; // Ensure this matches the table name in your migration

    protected $fillable = ['user_id', 'futsal_id', 'timeslot', 'status', 'booking_date', 'special_requests'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function futsal()
    {
        return $this->belongsTo(BookingFutsalsController::class);
    }
}
