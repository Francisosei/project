<?php

namespace project\Http\Controllers;
use project\Http\Controllers\Controller;
use Validator;
//use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use project\Http\Requests;
use project\Student as Student;

class StudentController extends Controller {

    public function view() {


        $student = Student::paginate(10);

        return view('pages.view', ['student' => $student]);
    }

    public function create() {
        return view('pages.create');
    }
 public function insert(Request $request) {

  $validator = $this->validate($request,[
      'Full_name' => 'min:4',
            'Index_number' => 'alpha_num',
            
            //'Current_Adddress' => ['required'],
            'Graduation_date' => 'date_format:Y-m-d',
           // 'Level' => ['required'],
      'Email'=>  'email|unique:student,Email',
            'Programme'=>['required'],
      'Basic_skills'=>['required'],
      'Major'=>['required'],
      
       'Resume'=>'mimes:pdf|max:1000'
      
   // '' => ['required,max:100']
    ]);
 /*if ($validator->fails()) {
            return redirect()
                        ->withErrors($validator)
                        ->withInput();
        }else{ */
   //$valid_exts = array('jpeg', 'jpg', 'png'); // valid extensions
         $resume= $request->file('Resume');
         $upload = base_path().'/public/uploads';
         $filename = $resume->getClientOriginalName();
         $success = $resume->move($upload,$filename);
         
         if($success){
        $student = new Student;
        $student->Full_name = $request->Full_name;
       $student->Index_number = $request->Index_number;
       $student->Email = $request->Email;
       $student->Current_address = $request->Current_Address;
       $student->Graduation_date = $request->Graduation_date;
       $student->Level = $request->Level;
       $student->Programme = $request->Programme;
       $student->Basic_skills = $request->Basic_skills;
       $student->Major = $request->Major;
       $student->Application_Type = $request->Application_Type;
       $student->Job_Search_Status= $request->Job_Search_Status;
       $student->Resume = $filename;
       
       $student->save();
      // print_r($users);exit();
        
        }
        $request->session()->flash('flash_message', 'Your Info is successfully created!');
         return redirect('/')->with('message', 'success!');   
   // }
    
    
    }
    
    /*public function insert(Request $request) {
        
      
    
          $validator = Validator::make($request->all(), [
            //'Full_name' => ['required','min:4'],
            //'Index_number' => ['required','numeric'],
            //'Email' => ['required','min:4'],
            //'Current_Adddress' => ['required'],
            //'Graduation_date' => ['required'],
            //'Level' => ['required'],
              //'hobby' => ['required','min:4']
              
        ]);
          if ($validator->fails()) {
            return redirect('pages/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        Student::create($request->all());
           
       $request->session()->flash('flash_message', 'Your Info is successfully created!');
        
        return redirect('pages/create')->with('message', 'Success!');


    }*/

    public function show($id) {

            
        $student =Student::findOrFail($id);
        
        return view('pages.show', [
            'student' => $student,
        ]);
       
    }

    public function update(Request $request, $id) {
        $student = Student::findOrFiail($id);
        $input = $request->all();
        $student->fill($input)->save();
        return redirect('/student');
    }

    public function destroy($id) {
        $student = Student::findOrFail($id);
        //Asset::delete($id);
        $student -> delete();
       // Asset ::destroy($id);
        return redirect('/student');
    }

}
 