<?php

namespace App\Http\Controllers;

use App\Models\futsaluser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class FutsaluserController extends Controller
{

    protected $futsaluser = null;
    public function __construct(futsaluser $futsaluser)
    {
        $this->futsaluser = $futsaluser;
    }
    public function index()
    {

        $data = $this->futsaluser->get();

        return view('admin.Futsal.userdetails', compact('data'));

    }

    public function futsaluserregister(Request $request)
    {

        if ($request->isMethod('post')) {
            $request->validate([
                'fname' => 'required|max:255',
                'lname' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required',
                'address' => 'required|max:255',
                'contact' => 'required|max:255',


            ]);
            $futsaluser = new futsaluser;
            $futsaluser->name = $request->fname . ' ' . $request->lname;
            $futsaluser->email = $request->email;
            $futsaluser->address = $request->address;
            $futsaluser->contact = $request->contact;
            $futsaluser->password = bcrypt($request->password);

            $futsaluser->save();

            Auth::login($futsaluser);
            return redirect('/futsaluserlogin');




        }

        return view('futsaluser.register');
    }
    public function futsaluserlogin(Request $request)
    {

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('/userdashboard');
            }

            return back()->withErrors(['email' => 'Invalid login credentials.']);
        }

        return view('futsaluser.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // if ($request->isMethod('post')) {
        //     $request->validate([
        //         'fname' => 'required|max:255',
        //         'lname' => 'required|max:255',
        //         'address' => 'required|max:255',
        //         'email' => 'required|email',
        //         'contact' => 'required',
        //         'password' => 'required|min:6',

        //     ]);
        //     $user = new futsaluser;
        //     $user->name = $request->fname . ' ' . $request->lname;
        //     $user->email = $request->email;
        //     $user->address = $request->address;
        //     $user->contact = $request->contact;
        //     $user->password = bcrypt($request->password);
        //     $user->save();
        //     Auth::login($user);
        //     return redirect('/');
        // }

        // return view('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(futsaluser $futsaluser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(futsaluser $futsaluser)
    {
        //futsal user
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, futsaluser $futsaluser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function futsaldelete($id)
    {

        $futsaluser = futsaluser::where('id', $id)->first();
        $futsaluser->delete();
        return back()->withSuccess('Sucessfully deleted user');
    }
}
