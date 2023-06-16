<?php

namespace App\Http\Controllers\AuthController;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

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

    $check_email = User::where('email', $request->email)->get();
    if ($check_email->count() > 0) {
        $error = "This email already exists";
        return redirect('/dashboard/add_admin')->with('error', $error);
    }

    $password = "Admin@123"; // Retrieve the plain text password from the request or generate it dynamically
    $hashedPassword = Hash::make($password);

    $newUser = User::create([
        "name" => $request->name,
        "email" => $request->email,
        "phone_no" => $request->contact_no,
        "status"   => $request->add_status,
        "password" => $hashedPassword // Hash the password before saving
    ]);

    Mail::to($newUser->email)->send(new WelcomeEmail($newUser, $password));


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
