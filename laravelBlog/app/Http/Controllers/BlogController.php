<?php

namespace App\Http\Controllers;

use App\Models\blog;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['expect'=>['index','show']]);
    }

    public function index(){
        $blogs=DB::select('select * from blogs');
       return view('blog.index')->with('blogs',$blogs);
        //  return $blogs;
    }
 public function create(){
    // $post=DB::insert('insert into blogs');
    // return view ('blog.create',compact('post'));
    return view('blog.create');
  }
  public function show(){
    $blogs=DB::select('select * from blogs');
    return view('blog.show')->with('blogs',$blogs);
    // return $blogs;
  }
  public function edit($id){
    $blogs=blog::find($id);
    return view('blog.edit',compact('blogs'));
  }
  public function destroy($id){
    $blogs=blog::find($id);
    $blogs->delete();
    return 'Post '.$id.' deleted';

  }
  public function store(Request $request){
    // dd($request->all());
    $request->validate([
            'topic'=>'required',
            'detail'=>'required',
            'pics'=>'required',
            'writer'=>'required'
        ]);
    $fileName=$request->pics->getClientOriginalName();
    $request->pics->storeAs('images',$fileName,'public');

        $blog=new blog();
        $blog->topic=$request->input('topic');
        $blog->detail=$request->input('detail');
        $blog->writer=$request->input('writer');

        $blog->user_id=auth()->user()->id;


        $blog->pics=$fileName;
        $blog->save();
        // return redirect()->back();
        return view('blog.show');
  }
    public function update(Request $request, $id){
        $fileName=$request->pics->getClientOriginalName();

        $post=blog::find($id);
        $post->topic=$request->input('topic');
        $post->detail=$request->Input('detail');
        $post->writer=$request->input('writer');
        $post->pics=$fileName;

        $post->save();

             Storage::delete('/public/images/'.auth()->user()->pics);
             $request->pics->storeAs('public',$fileName,'images');
             blog::find(Auth::user()->pics)->update(['pics'=>$fileName]);

        return redirect()->back()->with('updated to database');
    }
  public function updatefile(Request $request){
    $fileName=$request->avatar->getClientOriginalName();
    if(Auth::user()->id){
        Storage::delete('/public/images/'.auth()->user()->avatar);
        $request->avatar->storeAs('public',$fileName,'images');
        User::find(Auth::User()->avatar)->update(['avatar'=> $fileName]);
    }
    return redirect()->back();

}
}
