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
    public function index()
    {
        $data=$this->FutsalDetails->get();
        return view('admin.futsal.futsaldetails', compact('data'));
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
        'location'=>'required',
        'price_per_hour'=>'required',
        'status'=>'required'

     ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagename = time() . '.' . $request->file('image')->extension();
           
        } 

        else{
                return redirect()->back()->with('error', 'No valid file was uploaded');
        }
        $request->image->move(public_path('/storeimg'), $imagename);

        $futsal=new FutsalDetails;
        $futsal->name=$request->name;
        $futsal->image=$imagename;
        $futsal->location=$request->location;
        $futsal->ratings=$request->ratings;
        $futsal->price_per_hour=$request->price_per_hour;
        $futsal->status=$request->status;

        $futsal->save();
        return back()->withSuccess('Successfully added futsal');

    }   

    /**
     * Display the specified resource.
     */
    public function show(FutsalDetails $futsalDetails)
    {
        //
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

}
