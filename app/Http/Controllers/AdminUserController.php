<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('admin.homepage');
    }
    public function userregister(Request $request)
    {
       
        if ($request->isMethod('post')) {
            $request->validate([
                'fname' => 'required|max:255',
                'lname' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required|min:6',

            ]);
            $user = new User;
            $user->name = $request->fname . ' ' . $request->lname;
            $user->email = $request->email;
            
            $user->password = bcrypt($request->password);
          
            $user->save();

            Auth::login($user);
            return redirect('/adminlogin');
        }

        return view('admin.register');
    }
    public function userlogin(Request $request)
{
   
    if ($request->isMethod('post')) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid login credentials.']);
    }

    return view('admin.login');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminUser $adminUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminUser $adminUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminUser $adminUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function AdminLogout(Request $request):RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/adminlogin');
    }
}
