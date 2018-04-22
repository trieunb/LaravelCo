<?php
namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        # parent::__construct();
    }

    public function index(Request $request) {
        return view('Admin::user.index');
    }

    public function postCreateUser(Request $request) {
        $this->validate($request, [
            'user_cd'       => 'required|unique:tb_user,user_cd',
            'password'      => 'required',
            'email'         => 'required|email|unique:tb_user,email',
            'first_name'    => 'required'
        ]);
        $data = $request->all();
        $data['password'] = \Hash::make($request->password);
        \DB::table('tb_user')->insert(
            $data
        );
        return response()->json([
                'status'    =>  true,
            ]);
    }
}