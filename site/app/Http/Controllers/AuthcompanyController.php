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
    public function company_login(Request $request) {

        $company_email = $request->input('company_email');
        $a1 = $request->input('company_email');
        $c1 = $password = $request->input('company_password');

        $b1 = DB::table('auth_companies')->where('company_email', $company_email)->value('company_email');
        $d1 = DB::table('auth_companies')->where('company_email', $company_email)->value('company_password');

        if($a1 == $b1 and $c1 == $d1) {
            return view('auth.userpanel', ['notification' => $company_email]);
        }
        else {
            return view('auth.companylogin', ['notification' => 'true']);
        }

    }
}
