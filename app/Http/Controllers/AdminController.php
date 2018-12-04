<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::all()->toArray(); 
        return view('admin/home', compact('information'));
    }

    public function createInformation(Request $request)
    {   
        $crud = new Information([
          'heading_infor' => $request->get('heading_infor'),
          'date' => $request->get('date'),
          'detail_infor' => $request->get('detail_infor')
        ]);
        $crud->save();
        return redirect('home')->with('alert-success','Berhasil Menambah Data!');
    }



    public function editInfor($id)
    {
      $information = Information::where('id',$id)->get();
      return view('admin/editInfor', compact('information'));
    }

    public function updateInfor(Request $request, $id)
    {
       $crud = Information::find($id);
        $crud->heading_infor    = $request->get('heading_infor');
        $crud->date             = $request->get('date');
        $crud->detail_infor     = $request->get('detail_infor');
        $crud->save();
        return redirect('home');
    }



    public function destroyInfor($id)
    {
        $crud = Information::find($id);
        $crud->delete();

        return redirect('/home')->with('alert-success','Berhasil Menghapus Data!');
    }

        public function showInfor(Request $request,$id)
    {
        $crud = Information::find($id);
        return view('showInfor')->with('alert-success','Berhasil Menghapus Data!');
    }
}
