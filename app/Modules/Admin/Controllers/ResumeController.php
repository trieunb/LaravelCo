<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Requests\resumeRequest;

class ResumeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$lists = \DB::table('tb_resumes')
                ->orderBy('created_at', 'asc')
                ->paginate(10);
        return view("Admin::resume.index", ['lists' => $lists]);
    }

    public function getCreate()
    {
        return view("Admin::resume.create");
    }

    public function postCreate(ResumeRequest $request)
    {
        $data 					= 	$request->all();
        $data['created_at']  	=   date('Y/m/d');
        $id     =   \DB::table('tb_resumes')->insert($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function getEdit(Request $request)
    {
        $list = \DB::table('tb_resumes')->where('id', $request->id)->get()->first();
        $list = json_decode(json_encode($list), true);
        return view("Admin::resume.edit", ['list' => $list]);
    }

    public function postEdit(ResumeRequest $request)
    {
        $data 					= 	$request->all();
        $data['updated_at']  	=   date('Y/m/d');
        \DB::table('tb_resumes')->where('id', $request->id)->update($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }
    public function postDelete(Request $request)
    {
        \DB::table('tb_resumes')->where('id', $request->user)->delete();
        return response()->json([
                'status'    =>  true,
            ]);
    }
}