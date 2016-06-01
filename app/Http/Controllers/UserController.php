<?php

namespace project\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use project\User as User;
use project\Http\Requests;

class UserController extends Controller {

    public function index(Request $request) {

        $users = User::all();
        //$company = Company::paginate(10);
        return view('users.index', ['user' => $users]);
    }

    public function create() {
        return view('users/create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
                    'name' => ['required'],
                    'email' => ['required', 'email'],
        ]);
        if ($validator->fails()) {
            return redirect('')
                            ->withErrors($validator)
                            ->withInput();
        }
        /*$data = User::Create($request->all());
        if ($data) {
            $valid_exts = array('jpeg', 'jpg', 'png'); // valid extensions
            $max_size = 400000; // max file size
            $photo = $request->file('logo');


            if (!empty($photo)) {
                // get uploaded file extension
                $ext = strtolower($request->file('logo')->getClientOriginalExtension());
                $photo = $ext;
                $savepath = 'public/uploads';
                if (in_array($ext, $valid_exts)) {
                    if ($request->file('logo')->move($savepath, $photo)) {
                        \DB::table('users')->increment('id');
                    }
                }
            }
            $request->session()->flash('flash_message', 'Your Info is successfully created!');
        }
        return redirect('')->with('message', 'Success!');
        */
    }

    /*
      public function UploadLogo(Request $request){
      $photo = $request->file('logo')->getClientOriginalExtension();
      $destination = base_path().'/public/img';
      $request->file('logo')->move($destination,$photo);
      $data=$request->all();
      $data['logo']= $photo;
      Company::Create($data);

      } */

    public function show($id) {
        $users = User::findOrFail($id);
        return view('users.show')->with('user', $users);
    }

    public function edit($id) {

        $users = User::findOrFail($id);

        return view('users/edit', [
            'user' => $users,
        ]);
    }

    public function update($id, Request $request) {

  $validator = $this->validate($request,[
    'name' => ['required'],
    'email'=> ['required'],
    //'role' => ['required'],
    'industry' => ['required'],
    'website' => ['required'],
    'contact' => ['required'],
    'address' => ['required'],
      'address'=>['required'],
      'photo' =>['max:500']
   // 'photo' => ['required|mimes:jpg,jpeg,png|max:100']
    ]);
 /*if ($validator->fails()) {
            return redirect()
                        ->withErrors($validator)
                        ->withInput();
        }else{ */
   //$valid_exts = array('jpeg', 'jpg', 'png'); // valid extensions
         $photo = $request->file('photo');
         $upload = base_path().'/public/uploads';
         $filename = $photo->getClientOriginalName();
         $success = $photo->move($upload,$filename);
         
         if($success){
        $users = User::findOrFail($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->role = $request->input('role');
        $users->industry = $request->input('industry');
        $users->website = $request->input('website');
        $users->contact = $request->input('contact');
        $users->address = $request->input('address');
        $users->password = $request->input('password');
         $users->photo = $filename;
        
        
       
       $users->save();
      // print_r($users);exit();
        
        }
        $request->session()->flash('flash_message', 'Your Info is successfully created!');
         return redirect('/')->with('message', 'success!');   
   // }
    
    
    }
    
}
