<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts= Post::paginate(50);

       // $user=User::find(1);

        return view ('posts.index')->with(['posts' => $posts , 'user'=>$user]);

        // $user = User::user();
       // $user = Post::find()->posts;
        //dd($users);
     
        // $user->posts()->saveMany([
        //     new Post(['title'=>'title_1', 'body'=>'data_1']),
        //     new Post(['title'=>'title_2', 'body'=>'data_2']),
        //     ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create') ;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreBlogPost  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreBlogPost $request)
    {
        // $req=$request->only('title','body','enabled');
        // $user=Auth::user();
        // $req['user_id']=$user->id;
        // Post::create($req);
        // return redirect()->route('posts.index');

        // if($request->file('image')->isValid()){
        //         $req['image']= $request->file('image')->store('posts');
        //        }
        
        //        $created = $user->posts()->create($req);
        //        if($created){
        //         return 'success post has been added';

        //        }
        //        return 'faild to add new post ';

        $user=Auth::user();
        
        $req=$request->only('title','body','enabled');

        $post = new Post([
            'title' => $request->get('title'),
            'body'=> $request->get('body'),
            'enabled'=> $request->get('enabled'),
            // 'user_id' => auth()->id(),
        ]);

       $post->save();


       //$users=User::all();

       //$user->posts()->create(new Post($req));


       //image:
      
       //$req['id']=$user->id;

       if($request->file('image')->isValid()){
        $req['image']= $request->file('image')->store('posts');
       }

       $created = $user->posts()->create($req);
       if($created){
        return 'success post has been added';
       }
       return 'faild to add new post ';
       
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        //$user= User::find($id);

        // Storage::disk()->url($post->image);

        return view ('posts.show')->with(['posts' => $post ]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , Post $post )
    {
        $user = Auth::id();

        if($user == $post->user_id) {

            $post=Post::find($id);  
            return view('posts.edit')->with(['post' => $post , 'id' => $id]) ;
           
            }
            
             return redirect()->route('posts.index');
            
            

    }





    /**
     * Update the specified resource in storage.
     *
     * @param  StoreBlogPost  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, $id)
    {
        $user = Auth::id();
        $post= Post::find($id);
        if($user == $post->user_id){
        
        $request->only('title','body','enabled');

        Post::where('id', $id)->update([
        'title' =>$request['title'],
        'body' =>$request['body'],
        'enabled' =>$request['enabled'],
        ]);

        return 'success post has been updated';
    }
    return 'faild post not updated';

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return 'success post has been deleted';

    }




    public function trashed()
    {
        $post = Post::onlyTrashed()->get();
       return view('posts.softdelete')->with('posts',$post);
    }


    

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->route('posts.index');
    }

}
