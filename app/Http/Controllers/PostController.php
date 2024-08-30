<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class PostController extends Controller
{
    //
    public function index()
    {
        //select * from post 
        $postfromdb = Post::all(); //collection object 
        // dd($postfromdb);

        return view('posts.index', ['posts' => $postfromdb]);
    }
    public function show(Post $post)
    {

          // select * from post where post_id = $postId
         // $singlepostfromdb=Post::findOrFail($postId);//model object
         
         //  $singlepostfromdb=Post::where('id',$postId)->first();//select * from post where post_id = $postId order by post_id limit 1
         //  $singlepostfromdb=Post::where('id',$postId)->get();//collection object select * from post where title='php'
         
         //  if(is_null($singlepostfromdb)){
         //   return to_route('posts.index');
         //}
         return view('posts.show', ['post' => $post]);
        }
        public function create()
        {
            //!select * from users;
            $users = User::all();
            return view('posts.create', ['users' => $users]);
        }
        public function store()
        {
            request()->validate([
                'title' =>['required'],
                'description' =>['required'],
                'postcreator' =>['required','exists:users,id']  
            ]);
            $data = request()->all();

            $title = request()->title;
            $description = request()->description;
            $postcreator = request()->postcreator;
            
            // $post = new Post;
            // $post->title=$title;
            // $post->description=$description;
            // $post->save();
            
            Post::create([
                'title' => $title,
                'description' => $description,
                'user_id'=>$postcreator
            ]);
            return to_route('posts.index');
        }
        public function edit(Post $post)
        {
            //!select * from users;
            $users = User::all();
            return view('posts.edit', ['users' => $users],['post' => $post]);
        }
        public function update($postId)
        {
            request()->validate([
                'title' =>['required'],
                'description' =>['required'],
                'postcreator' =>['required','exists:users,id']  
            ]);
            
            $data = request()->all();
            $id = request()->id;
            $title = request()->title;
            $description = request()->description;
            $postcreator = request()->postcreator;
            
            
            $singlepostfromdb=Post::findOrFail($postId);//model object
            $singlepostfromdb->update([
                'title' => $title,
                'description' => $description,
                'user_id'=> $postcreator
            ]);
        
        return to_route('posts.show',$postId);
    }
    public function destory($postId)
    {
       $post= Post::findOrFail($postId);
      $post->delete();
        return to_route('posts.index');
    }
}
