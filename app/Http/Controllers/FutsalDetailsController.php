<?php

namespace App\Http\Controllers;

use App\Models\FutsalDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $numberoffutsal = DB::table('futsal_details')->count($id);
        $futsal = FutsalDetails::find($id);
        $futsal->time_slots = json_decode($futsal->time_slots, true);
        
       
            
    return view('frontend.futsaldetail', compact('futsal'));
   

    }
// $numberoffutsal=count($id);
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
        'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        'pan_vat_docs' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        'available_date' => 'required|date',
        'time_slots' => 'required|array', 
        'location' => 'required',
        'price_per_hour' => 'required',
        'status' => 'required'
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
        $futsal->time_slots = json_encode($request->time_slots);
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
            'image' => 'sometimes|mimes:jpeg,jpg,png,gif|max:10000', // Change to 'sometimes' to make it optional
            'pan_vat_docs' => 'sometimes|mimes:jpeg,jpg,png,gif|max:10000', // Change to 'sometimes' to make it optional
            'available_date' => 'required|date',
            'time_slots' => 'required|array', // Validate as array
            'location' => 'required',
            'price_per_hour' => 'required',
            'status' => 'required'
        ]);
     $futsal=FutsalDetails::where('id',$id)->first();
        if(isset($request->image)){
            //upload if user want to change image
            $imagename = time() . '.' . $request->file('image')->extension();
            $request->image->move(public_path('/storeimg'), $imagename);
            $futsal->image=$imagename;
        }

         //  futsal docs
          
    if ($request->hasFile('pan_vat_docs') && $request->file('pan_vat_docs')->isValid()) {
        $docsName = time() . '.' . $request->file('pan_vat_docs')->extension();
    } else {
        return redirect()->back()->with('error', 'No valid document file was uploaded');
    }

    $request->pan_vat_docs->move(public_path('/pan_vatimg'), $docsName);

        //  futsal docs
        $futsal->name=$request->name;
        $futsal->pan_vat_docs=$docsName;
        $futsal->available_date=$request->available_date;
        $futsal->location=$request->location;
        $futsal->time_slots = json_encode($request->time_slots);
        $futsal->ratings=$request->ratings;
        $futsal->price_per_hour=$request->price_per_hour;
        $futsal->status=$request->status;
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



}
