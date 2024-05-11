<?php

namespace App\Http\Controllers;

use App\Models\BookingFutsal;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BookingFutsalsController extends Controller
{
    public function bookedfutsal(Request $request)
    {
        $bookings = BookingFutsal::join('futsalusers', 'booking_futsals.futsaluser_id', '=', 'futsalusers.id')
                             ->join('futsal_details', 'booking_futsals.futsal_id', '=', 'futsal_details.id')
                             ->select('booking_futsals.*', 'futsal_details.name as futsal_name', 'futsalusers.name as user_name')
                             ->get();

    return view('admin.futsal.bookingdetails', compact('bookings'));
      
    }

    public function index(){
        $userId = session('sessionUser');
    if (!$userId) {
        return redirect('login')->with('error', 'You must be logged in to view this page.');
    }
        $user = \DB::table('futsalusers')->select('id', 'name')->where('id', $userId)->first();
   
       
        if (!$user) {
            return redirect('futsaluserlogin')->with('error', 'User not found.');
        }
        
        $bookedFutsals = BookingFutsal::where('futsaluser_id', $user->id)
                                     ->join('futsal_details', 'booking_futsals.futsal_id', '=', 'futsal_details.id')
                                     ->select('booking_futsals.*', 'futsal_details.image', 'futsal_details.location', 'futsal_details.name', 'futsal_details.price_per_hour')
                                     ->get();
        
        return view('frontend.bookedfutsal',compact('bookedFutsals'));
    }
    

//     public function booked_futsals(Request $request){
//         if($request->isMethod('post')){
//             $request->validate([
//                 'futsal_id' => 'required|exists:futsal_details,id',
//                  'selected_timeslot' => 'required|json'
//                  ]);

//                  $booking = new BookingFutsal;
//                  $booking=$request->futsal_id;
//                  $booking=$request->futsaluser_id;
//                  $booking=$request->selected_date;
//                  $booking=$request->selected_timeslots;
//                  $booking->save();
//     }
// }


public function store(Request $request)
{
   

    $request->validate([
        'futsal_id' => 'required|integer',
        'selected_date' => 'required|date',
        'selected_timeslots' => 'required|string',
    ]);

    $existingBooking = BookingFutsal::where('futsal_id', $request->futsal_id)
                                    ->where('selected_date', $request->selected_date)
                                    ->whereJsonContains('selected_timeslots', $request->selected_timeslots) 
                                    ->first();

    if ($existingBooking) {
        return redirect()->back()->with('error', 'This time slot is already booked.');
    }
    
    try {
        $userId = session('sessionUser');
        if (!$userId) {
            return redirect()->route('futsaluserlogin')->with('error', 'You must be logged in to perform this action.');
        }

        $user = \DB::table('futsalusers')->select('id', 'name')->where('id', $userId)->first();
        if (!$user) {
            return redirect()->route('futsaluserlogin')->with('error', 'User not found.');
        }

      

        $book = new BookingFutsal();
        $book->futsal_id = $request->futsal_id;
        $book->selected_date = $request->selected_date;
        $book->futsaluser_id = $user->id;
        $book->selected_timeslots = json_encode([$request->selected_timeslots]);
        $book->save();

        return redirect()->back()->withSuccess('Successfully booked futsal, now pay from the booked futsal');
    } catch (\Exception $ex) {
        \Log::error('Error saving booking:', ['error' => $ex->getMessage(), 'trace' => $ex->getTraceAsString()]);
        return redirect()->back()->with('error', 'Failed to book futsal.');
    }
}




}