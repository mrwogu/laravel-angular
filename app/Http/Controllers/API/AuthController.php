<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Auth Controller
    |--------------------------------------------------------------------------
    */

    public function self(Request $request)
    {
        if (Auth::check()) {
            return response()->json($request->user());
        }

        return Response::json(['error' => 'Unauthorized'], 401);
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return response()->json([]);
        }

        return Response::json(['error' => 'Unauthorized'], 401);
    }
}
