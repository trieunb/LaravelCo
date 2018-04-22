<?php
namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        # parent::__construct();
    }

    public function index(Request $request) {
        return view('Admin::login.index');
    }

    public function postLogin(Request $request) {
        $data     = $request->all();
        $user     = \DB::table('tb_user')->where('user_cd', '=', $request->user_cd)->get();

        $validates = [
            'user_cd'   =>  '',
            'password'  =>  ''
        ];
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
        return response()->json([
                    'status'    =>  $status,
                    'validates' =>  $validates
                ]);
    }
}