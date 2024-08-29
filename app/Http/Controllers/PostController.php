<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        //select * from post 
                $postfromdb=Post::all();//collection object 
        // dd($postfromdb);
     
         return view('posts.index',['posts'=>$postfromdb]);
       }
       public function show($postId){
        $singlepost=
            ['id'=>1, 'name'=>'laravel','description'=>'PHP is a cool langauge','posted_by'=>'john', 'created_at'=>'2014-12-10 09:00:00'];
        return view('posts.show',['post'=>$singlepost]);
       }
       public function create(){
        return view('posts.create');
    }
    public function store(){
        $data=request()->all();
        $title=request()->title;
        $description=request()->description;
        $postcreator=request()->postcreator;
        // dd($data,$title,$description,$postcreator);
        return to_route('posts.index');
    }
    public function edit(){
        return view('posts.edit');
    }
    public function update(){
        $data=request()->all();
        $id=request()->id;
        $title=request()->title;
        $description=request()->description;
        $postupdater=request()->postupdater;
        // dd($data,$id,$title,$description,$postupdater);
        return to_route('posts.show',1);
    }
    public function destory(){
        return to_route('posts.index');
    }
}
