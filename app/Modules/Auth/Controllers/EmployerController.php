<?php

namespace App\Modules\Auth\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Authenticate For Employer
    public function index()
    {
        return view("Auth::index");
    }
    public function postLogin(Request $request) {
        $data     = $request->all();
        $user     = \DB::table('tb_users')
                        ->where('user_name', '=', $request->user_name)
                        ->where('is_role', '=', 2)
                        ->get();
        $validates  =   '' ;
        if (count($user) > 0) {
            $user     = json_encode($user[0]);
            $password = json_decode($user, true)['password'];
            if (Hash::check($request->password, $password)) {
                $status = true;
                sessionSet('auth_employer', $user);
            } else {
                $status = false;
                $validates['password']  =   'password not exist';
            }
        } else {
            $status  = false;
            $validates['user_name']   =   'user name not exist';
        }
        return response()->json([
                    'status'    =>  $status,
                    'validates' =>  $validates
                ]);
    }
    public function getLogout(Request $request) {
        if (sessionHas('auth_employer')) {
            sessionDelete('auth_employer');
            return redirect('employer/login');
        }
    }
}