<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthCompany;
use Illuminate\Support\Facades\DB;

class AuthcompanyController extends Controller
{
    public function company_store(Request $request) {

        $AuthCompany = new AuthCompany();

        $AuthCompany->company_name = $request->input('company_name');
        $AuthCompany->company_tin = $request->input('company_tin');
        $AuthCompany->company_phone = $request->input('company_phone');
        $AuthCompany->company_email = $request->input('company_email');
        $AuthCompany->company_password = $request->input('company_password');
        $AuthCompany->company_mail_check = 0;

        $AuthCompany->save();

        return view('welcome', ['notification' => 'Please confirm your email address by opening link on your email']);

    }

    public function login(Request $request) {

        $email = $request->input('email');
        $a = $request->input('email');
        $password = $request->input('password');
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
