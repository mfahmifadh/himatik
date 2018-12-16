<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Post;
use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $users = \DB::table('users')->get();
        $information = DB::table('information')->orderBy('id','desc')->paginate(4); 
        $post        = DB::table('post')->orderBy('id','desc')->paginate(6);
        return view('welcome',compact('information','post'));
    }

    public function detailInfor($id)
    {
      $information = Information::where('id',$id)->get();
      return view('detail-infor', compact('information'));
    }
}
