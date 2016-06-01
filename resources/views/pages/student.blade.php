@extends('layouts.app')

@section('content')
@include('layouts.partials.sidebar')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
             
            <div class="panel-heading">Provide Your Credentials</div>

            <div class="panel-body">

              @include('pages.errors')
               <!--@if(session('message'))
  {{session('message')}}
@endif-->

              <form action="{{ url('store') }}" method="POST" role="form" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!--Error message display-->

                    <!--end of error message-->
                    <div class="row">

                        <div class="col-sm-6">
                            <label >Full Name</label>
                            <input class="form-control" name="Full_name" placeholder="" />

                        </div>

                       <div class="col-sm-6">
                            <label >Index Number</label>
                            <input class="form-control" name="Index_number" placeholder="" />

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Email</label>
                            <input class="form-control" type="email" name="Email"  placeholder="" />
                        </div>
                        <div class="col-sm-4">
                            <label>Current Address</label>
                             <textarea  name="Current_Address" class="form-control" rows="2"></textarea>
                        </div>
                        
                         <div class="col-sm-4">
                            <label>Level</label>
                            <select class="form-control" name="Level">
                                <option value="">Level</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                                <option value="500">500</option>
                                <option value="600">600</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                         <div class="col-sm-6">
                            <label>Programme</label>
                            <input class="form-control" type="text" name="Programme"  placeholder="" />
                        </div>
                        <div class="col-sm-6">
                            <label>Major</label>
                            <input class="form-control" name="Major" placeholder="" />
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        
                          <div class="col-sm-6">
                            <label>Application Type</label>
                            <select class="form-control" name="Application_Type">
                                <option value="">Status</option>
                                <option value="Student">Student</option>
                                <option value="Alumni">Alumni</option>
                                
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Searching</label>
                            <select class="form-control" name="Job_Search_Status">
                                <option value="">Offer</option>
                                <option value="Internship">Internship</option>
                                <option value="Part time job">Part time Job</option>
                                <option value="Full time job">Full time Job</option>
                                <option value="Volunter">Volunteer</option>
                                
                            </select>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-sm-6">
                            <label>Upload Resume</label>
                            <input class="form-control" type="text" name="Resume" placeholder="" />
                            
                        </div>
                            <div class="control-group">
										<label for="textfield" class="control-label">Basic Skills</label>
										<div class="controls">
											<div class="span12"><input type="text" name="Basic_skills" id="textfield" class="tagsinput" value="PHP,Laravel,Java"></div>
										</div>
									</div>
                        </div>
                    </div>
                    <!--Add children-->
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-btn fa-blue"></i>Add Children
                            </button>
                        </div>
                    </div>


                </form>
                
            </div>
        </div>
    </div>
</div>

		

@endsection