<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$lists = \DB::table('tb_jobs')
                ->orderBy('created_at', 'asc')
                ->paginate(10);
        return view("Admin::job.index", ['lists' => $lists]);
    }

    public function getCreate()
    {
        return view("Admin::job.create");
    }

    public function postCreate(jobRequest $request)
    {
        $data 					= 	$request->all();
        $data['created_at']  	=   date('Y/m/d');
        \DB::table('tb_jobs')->insert($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function getEdit(Request $request)
    {
        $list = \DB::table('tb_jobs')->where('id', $request->id)->get()->first();
        $list = json_decode(json_encode($list), true);
        return view("Admin::job.edit", ['list' => $list]);
    }

    public function postEdit(jobRequest $request)
    {
        $data 					= 	$request->all();
        $data['updated_at']  	=   date('Y/m/d');
        \DB::table('tb_jobs')->where('id', $request->id)->update($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }
    public function postDelete(Request $request)
    {
        \DB::table('tb_jobs')->where('id', $request->user)->delete();
        return response()->json([
                'status'    =>  true,
            ]);
    }
}