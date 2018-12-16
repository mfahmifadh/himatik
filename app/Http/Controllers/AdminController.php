<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Post;

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
        return view('admin/home');
    }

    public function information()
    {
      $information  = Information::all()->toArray();
       return view('admin/information', compact('information'));
    }    

    public function post()
    {
      $post  = Post::all()->toArray();
       return view('admin/post', compact('post'));
    }

    public function createInformation(Request $request)
    {   
        $crud = new Information([
          'heading_infor' => $request->get('heading_infor'),
          'date' => $request->get('date'),
          'detail_infor' => $request->get('detail_infor')
        ]);
        $crud->save();
        return redirect('admin/information')->with('alert-success','Berhasil Menambah Data!');
    }

    public function createPost(Request $request)
    {
      $post = new Post();

        $post->title = $request->input('title');
        $post->konten = $request->input('konten');

        if ($request->hasfile('filename')) {
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/posts/', $filename);
            $post->filename = $filename;
        } else {
            return $request;
            $post->image = '';
        }
       $post->save();

       return redirect('admin/post')->with('alert-success','Berhasil Menambah Data!');
    }



    public function editInfor($id)
    {
      $information = Information::where('id',$id)->get();
      return view('admin/editInfor', compact('information'));
    }    

    public function editPost($id)
    {
      $post = Post::where('id',$id)->get();
      return view('admin/editPost', compact('post'));
    }

    public function updateInfor(Request $request, $id)
    {
       $crud = Information::find($id);
        $crud->heading_infor    = $request->get('heading_infor');
        $crud->date             = $request->get('date');
        $crud->detail_infor     = $request->get('detail_infor');
        $crud->save();
        return redirect('admin/information')->with('alert-success','Berhasil Mengubah Data!');
    }    


    public function updatePost(Request $request, $id)
    {
       $post = Post::find($id);

        $post->title   = $request->get('title');
        $post->konten  = $request->get('konten');

        if ($request->hasfile('filename')) {
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/posts/', $filename);
            $post->filename = $filename;
        } else {
            $post->save();
        }
       

       return redirect('admin/post')->with('alert-success','Berhasil Mengubah Data!');
    }

    public function destroyInfor($id)
    {
        $crud = Information::find($id);
        $crud->delete();

        return redirect('admin/information')->with('alert-success','Berhasil Menghapus Data!');
    }    


    public function destroyPost($id)
    {
        $crud = Post::find($id);
        $crud->delete();

        return redirect('admin/post')->with('alert-success','Berhasil Menghapus Data!');
    }





        public function showInfor(Request $request,$id)
    {
        $crud = Information::find($id);
        return view('showInfor')->with('alert-success','Berhasil Menghapus Data!');
    }
}
