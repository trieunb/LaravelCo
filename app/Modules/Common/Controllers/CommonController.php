<?php

namespace App\Modules\Common\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Common::index");
    }
    
    public function postUploads(Request $request) {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destinationPath = 'uploads/images';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        $data = [
                "name"    =>  $file->getClientOriginalName(),
                "path"    =>  '/uploads/images/'.$file->getClientOriginalName()
            ];
        \DB::table('tb_images')->insert($data);
        return response()->json([
                'success'    =>  true,
                'format'     =>  $file->getClientOriginalName()
            ]);
    }

    public function postUploadsTinymce(Request $request) {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destinationPath = 'tinymce/images';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        return response()->json([
                'location'     =>  $file->getClientOriginalName()
            ]);
    }
}