<?php

namespace App\Http\Controllers\AuthController;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function userlogin(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        if (\Auth::attempt($request->only("email", "password"))) {
            return redirect("/dashboard");
        } else {
            return redirect("/login")->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }
    }

    function add_admin(Request $request)
    {
        
        $request->validate([
            "name" => "required",
            "email" => "required",
        ]);
        

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone_no" => $request->contact_no,
            "password" => Hash::make("Admin@123") // Hash the password before saving
        ]);

        return redirect('/dashboard/add_admin');

    }

    function get_admin(){

        $users = User::get();

        return view('/admin/add_admin/add_admin', compact('users'));
    }

    function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }
}
