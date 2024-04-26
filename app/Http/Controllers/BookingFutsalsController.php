<?php

namespace App\Http\Controllers;

use App\Models\BookingFutsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingFutsalsController extends Controller
{
    public function book(Request $request)
    {

        return view('admin.futsal.bookingdetails');
        // $request->validate([
        //     'futsal_id' => 'required|exists:futsals,id',
        //     'selected_timeslot' => 'required|string'
        // ]);

        // $booking = new BookingFutsal([
        //     'user_id' => auth()->id(),  // Assuming you have user authentication
        //     'futsal_id' => $request->futsal_id,
        //     'timeslot' => $request->selected_timeslot,
        //     'status' => 'pending'  // Default status
        // ]);
        
        // $booking->save();

        // return redirect()->back()->with('success', 'Booking has been successfully created.');
    }
}