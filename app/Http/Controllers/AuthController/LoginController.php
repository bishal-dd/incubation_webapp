<?php

namespace App\Http\Controllers\AuthController;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function userlogin(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "requried",
        ]);

        dd($request->all());
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
        ]);

        if (\Auth::attempt($request->only("email", "password"))) {
            return redriect("/login");
        }
    }
}
