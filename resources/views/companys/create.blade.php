@extends('layouts.app')

@section('content')
@include('layouts.partials.sidebar')

                
                
   <div id="main"> 
                <div class="row-fluid">
                    
					<div class="span12">
						<div class="box">
							<div class="box-title">
                                                             @include('companys.errors')
								<h3>
									<i class="icon-ok"></i>
									More validation elements
								</h3>
							</div>
                                                   
							<div class="box-content">
								{!!Form::open(array('url'=>'store_company','method'=>'POST','file'=>'true'))!!}
                                                                          <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="Organization_name" class="control-label">Company Name</label>
                                    <div class="controls">
                                        <input type="text" name="Organization_name" id="firstname" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="Description" class="control-label">Description</label>
                                    <div class="controls">
                                        <input type="text" name="Description" id="anotherelem" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                        </div> 
                                                               
                                                                                                 <div class="row-fluid">
                            <div class="span5"> 
									 <div class="control-group">
                                    <label for="Industry" class="control-label">Industry</label>
                                    <div class="controls">
                                        <input type="text" name="Industry" id="Industry" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                                                                                                     <div class="span6">
									<div class="control-group">
										<label for="urlfield" class="control-label">Website<small>with http://</small></label>
										<div class="controls">
                                                                                    <input type="text" placeholder="Enter valid URL" class="span7" name="Website" id="urlfield" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
                                                                                                     </div>
                                                                                                 </div>
                <div class="row-fluid">
                            <div class="span5">
                             <div class="control-group">
										<label for="textfield" class="control-label">Title</label>
										<div class="controls">
											<select name="Title" id="bbb" data-rule-required="true">
												<option value="">-- Please select Title--</option>
												<option value="Mr">Mr</option>
												<option value="Miss">Miss</option>
												<option value="Mrs">Mrs</option>
												<option value="Dr.">Dr</option>
												<option value="Prof">Prof</option>
												
											</select>
										</div>
									</div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="Contact_Info" class="control-label">Contact</label>
                                    <div class="controls">
                                        <input type="text" name="Contact_Info" id="anotherelem" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                                                             
                                   <div class="row-fluid">                              
                                                                   <div class="span5">
                                <div class="control-group">
                                    <label for="Fullname" class="control-label">Full Name</label>
                                    <div class="controls">
                                        <input type="text" name="Full name" id="Industry" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="Contact_Info" class="control-label">Position</label>
                                    <div class="controls">
                                        <input type="text" name="Position" id="anotherelem" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                  <div class="row-fluid">                              
                                                                   <div class="span5">
                                <div class="control-group">
                                    <label for="Division" class="control-label">Division</label>
                                    <div class="controls">
                                        <input type="text" name="Division" id="Industry" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="Email" class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" name="Email" id="anotherelem" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                  <div class="row-fluid">                              
                                                                   <div class="span5">
                                <div class="control-group">
                                    <label for="Phone" class="control-label">Phone Number</label>
                                    <div class="controls">
                                        <input type="text" name="Phone" id="Industry" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="Address" class="control-label">Address</label>
                                    <div class="controls">
                                        <input type="text" name="Address" id="anotherelem" class="span8" data-rule-required="true">
                                    </div>
                                </div>
                            </div>
                        </div>
									<!--<div class="control-group">
										<label for="minlengthfield" class="control-label">Minlength <small>minlength: 3</small></label>
										<div class="controls">
											<input type="text" placeholder="At least 3 characters" name="minlengthfield" id="minlengthfield" data-rule-minlength="3" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="maxlengthfield" class="control-label">Maxlength <small>maxlength: 6</small></label>
										<div class="controls">
											<input type="text" placeholder="At least 3 characters" name="maxlengthfield" id="maxlengthfield" data-rule-maxlength="6" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="datefield" class="control-label">Date <small>YYYY-MM-DD</small></label>
										<div class="controls">
											<input type="text" placeholder="Only numbers" name="datefield" id="datefield" data-rule-dateISO="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="numberfield" class="control-label">Number</label>
										<div class="controls">
											<input type="text" placeholder="Only numbers" name="numberfield" id="numberfield" data-rule-number="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="digitsfield" class="control-label">Digits</label>
										<div class="controls">
											<input type="text" placeholder="Only digits" name="digitsfield" id="digitsfield" data-rule-digits="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="creditcardfield" class="control-label">Creditcard <small>try 446-667-651</small></label>
										<div class="controls">
											<input type="text" placeholder="Enter valid creditcard" name="creditcardfield" id="creditcardfield" data-rule-creditcard="true" data-rule-required="true">
										</div>
                                                                        </div>-->
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Submit">
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		
          
      
@stop