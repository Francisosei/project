@extends('layouts.app')
@section('content')
@include('layouts.partials.sidebar')
<div id="main"> 
    <div class="row-fluid">

        <div class="span12">
            <div class="box">
                <div class="box-title">
                    @include('jobs.errors')
                    <h3>
                        <i class="icon-dashboard"></i>
                        Post A Job
                    </h3>
                </div>

                <div class="box-content">
                    {!!Form::open(array('url'=>'store_post','method'=>'POST'))!!}

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row-fluid">
                        <div class="span5">
                            <div class="control-group">
                                <label for="Post_Title" class="control-label">Post Title</label>
                                <div class="controls">
                                    <input type="text" name="Post_Title" id="firstname" class="span8" data-rule-required="true">
                                </div>
                            </div>
                        </div>
                          <div class="span5">
                            <div class="control-group">
                                <label for="textfield" class="control-label">JOB TYPE</label>
                                <div class="controls">
                                    <select name="Job_type" id="bbb" data-rule-required="true">
                            <option value=""> SELECT JOB TYPE</option>
                            <option value="Full Time">FULL TIME</option>
                            <option value="Part Time">PART TIME</option>
                            <option value="Internship">INTERNSHIP</option>
                            <option value="Volunteer">VOLUNTEER</option>
                       
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                    </div> 

                    <div class="row-fluid">
                        <div class="span5"> 
                            <div class="control-group">
                                <label for="DESCRIPTION" class="control-label">DESCRIPTION</label>
                                <div class="controls">
                                    <input type="text" name="DESCRIPTION" id="Industry" class="span8" data-rule-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="control-group">
                                <label for="urlfield" class="control-label">Role</label>
                                <div class="controls">
                                    <input type="text" class="span7" name="Role" data-rule-url="true" data-rule-required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                       <div class="span5">
                            <div class="control-group">
                                <label for="Description" class="control-label">Description</label>
                                <div class="controls">
                                    <input type="text" name="Description" id="anotherelem" class="span8" data-rule-required="true">
                                </div>
                            </div>
                        </div>
                       <div class="span5">
                            <div class="control-group">
                                <label for="textfield" class="control-label">Qualification</label>
                                <div class="controls">
                                    <select name="Qualification" id="bbb" data-rule-required="true">
                           <option value="">SELECT QUALIFICATION LEVEL </option>
                            <option value="1ST DEGREE">1ST DEGREE</option>
                            <option value="2ND DEGREE">2ND DEGREE</option>
                            <option value="HND">HND</option>
                            <option value="WAECE">WAECE</option>
                       
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">                              
                        <div class="span5">
                            <div class="control-group">
                                <label for="Location" class="control-label">LOCATION</label>
                                <div class="controls">
                                    <input type="text" name="Location" id="Industry" class="span8" data-rule-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="span5">
                            <div class="control-group">
                                <label for="Salary_range" class="control-label">Salary range</label>
                                <div class="controls">
                                    <input type="text" name="Salary_range" id="anotherelem" class="span8" data-rule-required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">                              
                        <div class="span5">
                            <div class="control-group">
                                <label for="Deadline" class="control-label">Deadline</label>
                                <div class="controls">
											<input type="text" name="Deadline" id="textfield" class="input-xlarge " data-rule-required="true">
											<span class="help-block">YYYY-MM-DD</span>
										</div>
                            </div>
                        </div>
                         <!-- <div class="span5">
                            <div class="control-group">
                                <label for="Address" class="control-label">Address</label>
                                <div class="controls">
                                    <input type="text" name="Address" id="anotherelem" class="span8" data-rule-required="true">
                                </div>
                            </div>-->
                        </div>
                        
                    </div>
                   
                <!--<div class="span5">
                            <div class="control-group">
                                <label for="Deadline" class="control-label">Deadline</label>
                                <div class="controls">
                                    <input type="date" name="Deadline" class="span8" value="{{\Carbon\Carbon::now()}}">
                                </div>
                            </div>
                        </div>-->    
                
                    <div class="form-actions">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <button type="button" class="btn">Cancel</button>
                    </div>
                      {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@stop

