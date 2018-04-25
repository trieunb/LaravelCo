<?php

namespace App\Modules\Test\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$lists = \DB::table('tb_test')->paginate(10);
        return view("Test::danh_sach", ['lists' => $lists]);
    }
    public function getCreate(Request $request){
        return view('Test::tao_moi');
    }

    public function postCreate(Request $request) {
        if ($request->hasFile('item_image')) {
            $file = $request->file('item_image');
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        $data = [
                "item_int"           =>  $request->item_int,
                "item_varchar"       =>  $request->item_varchar,
                "item_text"          =>  $request->item_text,
                "item_date"          =>  date('Y/m/d', strtotime($request->item_date)),
                "item_image"         =>  $file->getClientOriginalName(),
                "item_gallery"       =>  $request->item_gallery,
            ];
        // return $data;
        \DB::table('tb_test')->insert($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function getEdit(Request $request) {
        $list       = \DB::table('tb_test')->where('id', $request->id)->get()->first();
        $list       = json_decode(json_encode($list), true);
        $gallery    = explode(',', $list['item_gallery']);
        $list['item_gallery']    =   $gallery;
        return view('Test::chinh_sua', ['list' => $list]);
    }

    public function postEdit(Request $request) {
        if ($request->hasFile('item_image')) {
            $file = $request->file('item_image');
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        $data = [
                "item_int"           =>  $request->item_int,
                "item_varchar"       =>  $request->item_varchar,
                "item_text"          =>  $request->item_text,
                "item_date"          =>  date('Y/m/d', strtotime($request->item_date)),
                "item_image"         =>  $file->getClientOriginalName(),
                "item_gallery"       =>  $request->item_gallery,
            ];
        // return $data;
        \DB::table('tb_test')->where('id', $request->id)->update($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }
}