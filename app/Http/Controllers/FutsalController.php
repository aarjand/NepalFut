<?php

namespace App\Http\Controllers;
use App\Models\FutsalDetails;
use Illuminate\Http\Request;

class FutsalController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', ''); 
        $futsal = FutsalDetails::query();
        if ($search !== "") {
            $futsal->where('name', 'LIKE', "%$search%");
        }
        $futsal = $futsal->get();
        return view('frontend.futsals', compact('futsal', 'search'));
    }
    
}
