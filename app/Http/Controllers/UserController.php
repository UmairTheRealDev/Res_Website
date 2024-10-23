<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard\user\login');
    }
    public function login(Request $request)
    {
       $data =  $request->validate([
            'email' => ['required','string','email','max:255'],
            'password' => ['required','string','min:8'],
        ]);
        if(Auth::attempt($data))
        {
            return redirect()->route('cheff.show')->with('success','Login Successful');
           
        }
        else
        {
            return back()->with('error','Invalid Credentials');  
        }
      
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login')->with('success','Logout Successful');
    }


    public function register_form()
    {
        return view('Dashboard\user\register');
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
      $data =  $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','min:8'],
        ]);
        User::create($data);
        return redirect()->route('user.login')->with('success','Registration Successful');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
