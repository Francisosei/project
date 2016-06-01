<?php

namespace project\Http\Controllers;

use project\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use project\Http\Requests;
use project\User;
use project\PostModel as Post;

class PostController extends Controller {
    
      public function index(Request $request){
      $post = Post::paginate(5);

      return view('pages.view', ['post' => $post]);
      } 
public function post() {
        $post = Post::paginate(3);
        return view('post', ['post' => $post]);
    }
   /* public function view() {
        $post = Post::paginate(8);
        return view('opportunity', ['post' => $post]);
    }*/
    

    public function create_post() {
        return view('jobs/create_post');
    }

    public function store(Request $request) {
        $validator = $this->validate($request,[
            'Post_Title'=>'required',
            'Job_type' => 'required',
            'Role' => 'required',
           // 'Qualifictaion'=>'required',
            
            //'Salary' => 'integer',
            'Location' =>'required',
            'Deadline' =>'date_format:Y-m-d'
            
            ]);

        //$validator = Validator::make($request->all(), [
        $user = Auth::user();
        $post = new Post;

      
        $post->Post_Title = $request->Post_Title;
        $post->Job_type = $request->Job_type;
        $post->Description = $request->Description;
        $post->Role = $request->Role;
        $post->Qualification = $request->Qualification;
        $post->Location = $request->Location;
        $post->Salary_range = $request->Salary_range;
        $post->Deadline = $request->Deadline;
        $user->post()->save($post);

        // ]);
        // if ($validator->fails()) {
        //  return redirect('jobs/create_post')
        ///             ->withErrors($validator)
        //            ->withInput();
   
         $request->session()->flash('flash_message', 'A HAS BEEN ADDED SUCCESSFULLY');
        return redirect('/create_post');  
    }  

}
