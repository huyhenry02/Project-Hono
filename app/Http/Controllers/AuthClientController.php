<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthClientController extends Controller
{
    public function show_change_pass()
    {
        return view('hono.login.change_pass');
    }

    public function show_login()
    {
        return view('hono.login.index');
    }

    public function show_register()
    {
        return view('hono.login.register');
    }

    public function postRegister(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        $accessToken = $data->createToken('authToken')->accessToken;
        $route = route('login_client.index');
        return Redirect::to($route)->with('response', $accessToken);

    }
    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
//        dd('$credentials');
        if (Auth::attempt($credentials)) {
            $accessToken = Auth::user()->createToken('authToken')->accessToken;
            $route = route('my_account_client.index');

            return Redirect::to($route)->with('response', $accessToken);

        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_client.index');
    }
}
