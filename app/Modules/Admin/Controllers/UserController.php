<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Requests\UserRequest;

class UserController extends Controller
{
    public function getIndex()
    {
        $lists = \DB::table('tb_users')
                ->orderBy('created_at', 'asc')
                ->paginate(10);
        return view("Admin::user.index", ['lists' => $lists]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view("Admin::user.create");
    }

    public function postCreateUser(UserRequest $request) {
        $data = $request->all();
        $data['created_at']  =   date('Y/m/d');
        $data['password'] = \Hash::make($request->password);
        \DB::table('tb_users')->insert($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function getEdit(Request $request)
    {
        $list = \DB::table('tb_users')->where('user_name', $request->id)->get()->first();
        $list = json_decode(json_encode($list), true);
        return view("Admin::user.edit", ['list' => $list]);
    }

    public function postEdit(UserRequest $request)
    {
        $data = $request->all();
        $data = [
                "email"             =>  $request->email,
                "first_name"        =>  $request->first_name,
                "last_name"         =>  $request->last_name,
                "gender"            =>  $request->gender,
                "dob"               =>  date('Y/m/d', strtotime($request->dob)),
                "is_role"           =>  $request->is_role,
                "updated_at"        =>  date('Y/m/d')
            ];
        \DB::table('tb_users')->where('user_name', $request->user_name)->update($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }
    public function postDelete(Request $request)
    {
        \DB::table('tb_users')->where('user_name', $request->user)->delete();
        return response()->json([
                'status'    =>  true,
            ]);
    }
}