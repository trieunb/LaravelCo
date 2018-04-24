<?php

namespace App\Modules\Auth\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Auth::index");
    }

    public function postLogin(Request $request) {
        $data     = $request->all();
        $user     = \DB::table('tb_user')
                        ->where('user_cd', '=', $request->user_cd)
                        ->where('is_role', '=', 1)
                        ->get();
        $validates  =   '' ;
        if (count($user) > 0) {
            $user     = json_encode($user[0]);
            $password = json_decode($user, true)['password'];
            if (Hash::check($request->password, $password)) {
                $status = true;
            } else {
                $status = false;
                $validates['password']  =   'password not exist';
            }
        } else {
            $status  = false;
            $validates['user_cd']   =   'user name not exist';
        }
        sessionSet('key', $user);
        return response()->json([
                    'status'    =>  $status,
                    'validates' =>  $validates
                ]);
    }
}