<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    public function store(Request $request) {

        $auth = new auth();

        $auth->first_name = $request->input('first_name');
        $auth->last_name = $request->input('last_name');
        $auth->phone = $request->input('phone');
        $auth->email = $request->input('email');
        $auth->password = $request->input('password');
        $auth->date_of_birth = $request->input('date_of_birth');
        $auth->location = $request->input('location');
        $auth->mail_check = 0;

        $auth->save();

        return view('welcome', ['notification' => 'Please confirm your email address by opening link on your email']);

    }

    public function login(Request $request) {

        $email = $request->input('email');
        $a = $request->input('email');
        $c = $password = $request->input('password');

        $b = DB::table('auths')->where('email', $email)->value('email');
        $d = DB::table('auths')->where('email', $email)->value('password');

        if($a == $b and $c == $d) {
            return view('auth.userpanel', ['notification' => $a]);
        }
        else {
            return view('auth.login', ['notification' => 'true']);
        }

    }
}
