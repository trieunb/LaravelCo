<?php
namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller {
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
    }
    public function getIndexBDS(Request $request){
        $lists = \DB::table('tb_news_bds')->paginate(10);
        return view('Admin::news.danh_sach', ['lists' => $lists]);
    }

    public function getIndexTaoMoi(Request $request){
        return view('Admin::news.tao_moi');
    }

    public function postCreateNewBDS(Request $request) {
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        $data = [
                "ten"           =>  $request->title,
                "images"        =>  $file->getClientOriginalName(),
                "gallery"       =>  $request->gallery,
                "gia"           =>  $request->price,
                "dien_tich"     =>  $request->acreage,
                "dia_chi"       =>  $request->address,
                "thong_tin"     =>  $request->info,
                "ngay_dang"     =>  date('Y/m/d', strtotime($request->ngay_dang)),
            ];
        \DB::table('tb_news_bds')->insert($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function getEdit(Request $request) {
        $list = \DB::table('tb_news_bds')->where('news_bds_cd', $request->id)->get()->first();
        // return $list['gellery']; die;
        $list = json_decode(json_encode($list), true);
        $gallery = explode(',', $list['gallery']);
        $list['gallery']    =   $gallery;
        // dd($list); die;
        return view('Admin::news.chinh_sua', ['list' => $list]);
    }

    public function postEdit(Request $request) {
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        $data = [
                "ten"           =>  $request->title,
                "images"        =>  $file->getClientOriginalName(),
                "gia"           =>  $request->price,
                "dien_tich"     =>  $request->acreage,
                "dia_chi"       =>  $request->address,
                "thong_tin"     =>  $request->info,
                "ngay_dang"     =>  date('Y/m/d', strtotime($request->ngay_dang)),
            ];
        // return $data;
        \DB::table('tb_news_bds')->where('news_bds_cd', $request->id)->update($data);
        return response()->json([
                'status'    =>  true,
            ]);
    }

    public function postUploads(Request $request) {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destinationPath = 'uploads/images';
            $name = 
            $file->move($destinationPath, $file->getClientOriginalName());
        }

        $data = [
                "name"    =>  $file->getClientOriginalName(),
                "path"    =>  '/uploads/images/'.$file->getClientOriginalName()
            ];
        \DB::table('tb_library_images')->insert($data);
        return response()->json([
                'success'    =>  true,
                'format'     =>  $file->getClientOriginalName()
            ]);
    }
}