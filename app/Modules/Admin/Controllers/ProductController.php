<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Requests\ProductRequest;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$lists = \DB::table('tb_products')
                ->orderBy('created_at', 'asc')
                ->paginate(10);
        return view("Admin::product.index", ['lists' => $lists]);
    }

    public function getCreate()
    {
        return view("Admin::product.create");
    }

    public function postCreate(ProductRequest $request)
    {
        $data 					= 	$request->all();
        $data['created_at']  	=   date('Y/m/d');
        \DB::table('tb_products')->insert($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function getEdit(Request $request)
    {
        $list = \DB::table('tb_products')->where('id', $request->id)->get()->first();
        $list = json_decode(json_encode($list), true);
        return view("Admin::product.edit", ['list' => $list]);
    }

    public function postEdit(ProductRequest $request)
    {
        $data 					= 	$request->all();
        $data['updated_at']  	=   date('Y/m/d');
        \DB::table('tb_products')->where('id', $request->id)->update($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }
    public function postDelete(Request $request)
    {
        \DB::table('tb_products')->where('id', $request->user)->delete();
        return response()->json([
                'status'    =>  true,
            ]);
    }
}