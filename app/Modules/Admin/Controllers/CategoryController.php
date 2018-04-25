<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Requests\CategoryRequest;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$lists = \DB::table('tb_categories')
                ->orderBy('created_at', 'asc')
                ->paginate(10);
        return view("Admin::category.index", ['lists' => $lists]);
    }

    public function getCreate()
    {
        return view("Admin::category.create");
    }

    public function postCreate(CategoryRequest $request)
    {
        $data 					= 	$request->all();
        $data['created_at']  	=   date('Y/m/d');
        \DB::table('tb_categories')->insert($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function getEdit(Request $request)
    {
        $list = \DB::table('tb_categories')->where('id', $request->id)->get()->first();
        $list = json_decode(json_encode($list), true);
        return view("Admin::category.edit", ['list' => $list]);
    }

    public function postEdit(CategoryRequest $request)
    {
        $data 					= 	$request->all();
        $data['updated_at']  	=   date('Y/m/d');
        \DB::table('tb_categories')->where('id', $request->id)->update($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }
    public function postDelete(Request $request)
    {
        \DB::table('tb_categories')->where('id', $request->user)->delete();
        return response()->json([
                'status'    =>  true,
            ]);
    }
}