<?php

namespace App\Http\Controllers;

use App\Models\FutsalDetails;
use Illuminate\Http\Request;

class FutsalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //fetching values stored in futsal details by using model
    protected $FutsalDetails =null;
    public function __construct(FutsalDetails $futsalDetails){

        $this->FutsalDetails=$futsalDetails;
    }
    public function userdashboard()
    {
        return view('futsaluser.homepage');
    }
    public function index(Request $request)
{
    $searchfutsal = $request->input('search', ''); 
    $futsals = FutsalDetails::query();
    
    if ($searchfutsal !== "") {
        $futsals->where('name', 'LIKE', "%$searchfutsal%");
    }
    
    $data = $futsals->get(); // Use $futsals variable instead of $this->FutsalDetails
       
    return view('admin.futsal.futsaldetails', compact('data', 'futsals', 'searchfutsal'));
}


    public function futsaldetails($id)
    {
        $futsal = $this->FutsalDetails->findOrFail($id);
    return view('frontend.futsaldetail', compact('futsal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        
        
        return view('admin.futsal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
    //validate data    
     $request->validate([
        'name' => 'required',
        'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
        'pan_vat_docs'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
        'available_date'=>'required|date',
        'time_slots'=>'required',
        'location'=>'required',
        'price_per_hour'=>'required',
        'status'=>'required'

     ]);
        // futsal image
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagename = time() . '.' . $request->file('image')->extension();
           
        } 

        else{
                return redirect()->back()->with('error', 'No valid file was uploaded');
        }
        $request->image->move(public_path('/storeimg'), $imagename);
         // futsal image

        //  futsal docs
          // Futsal documents
    if ($request->hasFile('pan_vat_docs') && $request->file('pan_vat_docs')->isValid()) {
        $docsName = time() . '.' . $request->file('pan_vat_docs')->extension();
    } else {
        return redirect()->back()->with('error', 'No valid document file was uploaded');
    }

    $request->pan_vat_docs->move(public_path('/pan_vatimg'), $docsName);

        //  futsal docs


        $futsal=new FutsalDetails;
        $futsal->name=$request->name;
        $futsal->image=$imagename;
        $futsal->pan_vat_docs=$docsName;
        $futsal->available_date=$request->available_date;
        $futsal->location=$request->location;
        $futsal->time_slots=$request->time_slots;
        $futsal->ratings=$request->ratings;
        $futsal->price_per_hour=$request->price_per_hour;
        $futsal->status=$request->status;

        $futsal->save();
        return back()->withSuccess('Successfully added futsal');

    }   

    /**
     * Display the specified resource.
     */
    public function show()

    {
      
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $futsal =FutsalDetails::where('id',$id)->first();
        return view('admin.futsal.edit', ['futsal'=>$futsal]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //validate data    
     $request->validate([
        'name' => 'required',
        'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        'location'=>'required',
        'price_per_hour'=>'required',
        'status'=>'required'

     ]);
     $futsal=FutsalDetails::where('id',$id)->first();
        if(isset($request->image)){
            //upload if user want to change image
            $imagename = time() . '.' . $request->file('image')->extension();
            $request->image->move(public_path('/storeimg'), $imagename);
            $futsal->image=$imagename;
        }
       
        $futsal->name=$request->name;
        $futsal->location=$request->location;
        $futsal->ratings=$request->ratings;
        $futsal->price_per_hour=$request->price_per_hour;
        $futsal->status=$request->status;
        $futsal->save();
        return back()->withSuccess('Successfully updated Futsal Details');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $futsal=FutsalDetails::where('id', $id)->first();
    $futsal->delete();
    return back()->withSuccess('Successfully deleted Futsal');
}

public function getTimeSlots(Request $request)
{
    $date = $request->input('date');

    // Replace this with your actual logic to fetch time slots for the selected date
    $timeSlots = $this->getTimeSlotsForDate($date);

    return response()->json($timeSlots);
}

private function getTimeSlotsForDate($date)
{
    // Define time slots for each date (Example)
    $timeSlotsByDate = [
        '2024-04-18' => ['6:00 AM - 7:00 AM', '7:00 AM - 8:00 AM', '8:00 AM - 9:00 AM'],
        '2024-04-19' => ['9:00 AM - 10:00 AM', '10:00 AM - 11:00 AM', '11:00 AM - 12:00 PM'],
        // Add more dates and corresponding time slots as needed
    ];

    // Return time slots for the selected date, or an empty array if no time slots are defined for that date
    return $timeSlotsByDate[$date] ?? [];
}


}
