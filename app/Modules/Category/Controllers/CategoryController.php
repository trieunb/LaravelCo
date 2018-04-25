<?php

namespace App\Modules\Category\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Category::index");
    }

    public function getCreate()
    {
        return view("Category::create");
    }

    public function postCreate(Request $request)
    {
        $data = $request->all();
        $data['created_at']  =   date('Y/m/d');
        \DB::table('tb_categories')->insert($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }
}