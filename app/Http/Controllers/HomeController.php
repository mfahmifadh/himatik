<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

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
        $information = Information::all(); 
        return view('welcome',compact('information'));
    }

    public function detailInfor($id)
    {
      $information = Information::where('id',$id)->get();
      return view('detail-infor', compact('information'));
    }
}
