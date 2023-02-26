<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json(['success' => true, 'redirect' => '/admin/home']);
            
        }
        return response()->json(['success' => false], 401);
    }
}
