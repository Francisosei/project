@extends('layouts.app')

@section('content')
@include('layouts.partials.sidebar')
<div id="main">
    <div class="row-fluid">
        <div class="span12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="icon-edit"></i> Provide Credential</h3>
                </div>
                <div class="box-content">
                    @include('pages.errors')
                    <form action="{{ url('store') }}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="fullname" class="control-label">First name</label>
                                    <div class="controls">
                                        <input type="text" name="Full_name" id="firstname" class="input-xlarge" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="indexnumber" class="control-label">Index</label>
                                    <div class="controls">
                                        <input type="text" name="Index_number" id="anotherelem" class="input-xlarge" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="email" class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" name="Email" id="additionalfield" class="input-xlarge" data-rule-required="true" data-rule-email="@" >
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="text" class="control-label">Level</label>
                                    <div class="controls">
                                        <select name="Level" id="gend" data-rule-required="true">
                                            <option value="">-- Choose one --</option>
                                            <!--<option value="">Level</option>-->
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                            <option value="600">600</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="programme" class="control-label">Programme</label>
                                    <div class="controls">
                                        <input type="text" name="Programme" id="anotherelem" class="input-xlarge" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="major" class="control-label">Major</label>
                                    <div class="controls">
                                        <input type="text" name="Major" id="anotherelem" class="input-xlarge" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row-fluid">
                            
                                <div class="control-group">
                                    <label for="textfield" class="control-label">Basic Skills</label>
                                    <div class="controls">
                                        <div class="span12"><input type="text" name="Basic_skills" id="textfield" class="tagsinput" value=" "></div>
                                    </div>
                                </div>
                        
                        </div>
                         <div class="row-fluid">
                            <div class="span12">
                                
                                <div class="control-group">
                                    <label for="text" class="control-label">Address</label>
                                    <div class="controls">
                                        <textarea  name="Current_Address" id="tt333"  class="span12" rows="2" placeholder="You can provide additional information in here..."></textarea>
                                    </div>
                                </div>
                           
                            </div>
                        </div>
                  <div class="row-fluid">
                            
                            <div class="span5">
                                <div class="control-group">  
                                    <label for="text" class="control-label">Upload CV</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" name="Resume" /></span>
                                            <span class="fileupload-preview"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                      <div class="span5">
                         <div class="control-group">
										<label for="numberfield" class="control-label">Graduation Year</label>
										<div class="controls">
											<input type="text" placeholder="Only numbers" name="Graduation_date" class="input-xlarge" id="numberfield" data-rule-number="true" data-rule-required="true">
										</div>
									</div>
                        </div>
                       
                  </div>

 <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    
                                   <label for="text" class="control-label">Application Type</label>
                                    <div class="controls">
                                        <select name="Application_Type" id="gend" data-rule-required="true">
                                             <option value="">Status</option>
                                <option value="Student">Student</option>
                                <option value="Alumni">Alumni</option>
                                        </select>
                                </div>
                            </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    
                                   <label for="text" class="control-label">Searching FOR</label>
                                    <div class="controls">
                                        <select name="Job_Search_Status" id="gend" data-rule-required="true">
                                             <option value="">--Choose one--</option>
                                <option value="Internship">Internship</option>
                                <option value="Part time job">Part time Job</option>
                                <option value="Full time job">Full time Job</option>
                                <option value="Volunter">Volunteer</option>
                                        </select>
                                </div>
                            </div>
                            </div>
                        </div>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection