<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function __invoke(Request $request)
    {
        if (Auth::check()) {
            return Response::json(['error' => 'Already registered.'], 400);
        }

        $u = User::where('email', $request->input('email'))->first();
        if ($u) {
            return Response::json(['error' => 'Account exists in system.'], 400);
        }

        // TODO: Add validatior
        $u = new User();
        $u->fill($request->all());
        $u->password = bcrypt($u->password);
        $u->save();

        return response()->json($u);
    }
}
