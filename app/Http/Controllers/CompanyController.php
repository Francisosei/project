<?php
//namespace app;
namespace project\Http\Controllers;
use project\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use project\Company as Company;
use Validator;
use project\Http\Requests;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function view(Request $request){
        $company = CompanyController::
    }


    public function index(Request $request){
       $company = Company::query();
       if ($request->has('term') && trim($request->input('term')) != "") {
           // dd($request);
            $company->where($request->input('by'), "LIKE", "%" . $request->input("term", "") . "%");
          }
          if ($request->has('name') && trim($request->input('name')) != "") {
                 $company->where("name","LIKE","%".$request->input("name","")."%");
            }
            if ($request->has('Phone') && trim($request->input('Phone')) != "") {
                 $company->where("Email","LIKE","%".$request->input("Email","")."%");
            }
            if ($request->has('Division') && trim($request->input('Devision')) != "") {
                 $company->where("Division","LIKE","%".$request->input("Division","")."%");
            }
            if ($request->has('Position') && trim($request->input('Position')) != "") {
                 $company->where("Position","=",$request->input("Position",""));
            }
            $company = Company::all();
      //$company = Company::paginate(10);
       return view('companys.index',['company'=>$company]);
   }
  
       
   public function create(){
       return view('companys/create');
   }
   public function store(Request $request)
   {   
        $validator = Validator::make($request->all(), [
            'Organization name' => 'require|min:5',
            //'Description' => ['required'],
            //'Website' => 'active_url',
           // 'Industry' => ['required'],
            //'Contact' => ['required'],
            'Title' => ['required'],
              //'Full name' => ['required'],
             'Position' => ['required'],
             'Division' => ['required'],
              'Email' => 'required|email',
              'Phone' => 'required|numeric|min:10',
              'Address' => 'required',
            //'logo' =>['required']
        ]);
          if ($validator->fails()) {
            return redirect('companys/create')
                        ->withErrors($validator)
                        ->withInput();
        }
       $data =  Company::Create($request->all());
   if($data){
       $valid_exts = array('jpeg', 'jpg'); // valid extensions
          $max_size = 400000; // max file size
          $photo=$request->file('logo');
                    

               if (!empty($photo)) {
                // get uploaded file extension
                $ext = strtolower( $request->file('logo')->getClientOriginalExtension());
                $photo = $ext;
                $savepath = 'public/uploads';
               if (in_array($ext, $valid_exts)) {
                    if( $request->file('logo')->move($savepath, $photo)){
                        \DB::table('company')->increment('company_id');
                    }
               }
               }
         $request->session()->flash('flash_message', 'Your Info is successfully created!');
   }
        return redirect('companys/create')->with('message', 'Success!');
   }
   /*
   public function UploadLogo(Request $request){
       $photo = $request->file('logo')->getClientOriginalExtension();
       $destination = base_path().'/public/img';
       $request->file('logo')->move($destination,$photo);
       $data=$request->all();
       $data['logo']= $photo;
       Company::Create($data);
       
   }*/
   
   public function edit($id){
           
        $company =Compnay::findOrFail($id);
        
        return view('companys.view', [
            'company' => $company,
        ]);
       
       
   }

   }
  

