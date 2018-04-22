<?php

namespace App\Modules\User\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\User\Requests\UserCreateRequest;
use App\Modules\User\Requests\UserEditRequest;

class UserController extends Controller
{
    public function getIndex()
    {
        $lists = \DB::table('tb_user')->paginate(10);
        return view("User::index", ['lists' => $lists]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view("User::create");
    }

    public function postCreateUser(UserCreateRequest $request) {
        $data = $request->all();
        $data['password'] = \Hash::make($request->password);
        \DB::table('tb_user')->insert(
            $data
        );
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function getEdit(Request $request)
    {
        $list = \DB::table('tb_user')->where('user_cd', $request->id)->get()->first();
        $list = json_decode(json_encode($list), true);
        return view("User::edit", ['list' => $list]);
    }

    public function postEdit(UserEditRequest $request)
    {
        $data = $request->all();
        $data = [
                "email"             =>  $request->email,
                "first_name"        =>  $request->first_name,
                "last_name"         =>  $request->last_name,
                "gender"            =>  $request->gender,
                "dob"               =>  date('Y/m/d', strtotime($request->dob)),
                "is_role"           =>  $request->is_role,
            ];
        \DB::table('tb_user')->where('user_cd', $request->user_cd)->update($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }
}