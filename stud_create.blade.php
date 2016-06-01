
<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3><i class="icon-edit"></i> Basic forms</h3>
							</div>
							<div class="box-content">
								<form action="#" method="POST" class='form-horizontal'>
									<div class="control-group">
										<label for="textfield" class="control-label">Text input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" class="input-xlarge">
											<span class="help-block">This is just a supporting text</span>
										</div>
									</div>
									<div class="control-group">
										<label for="password" class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="password" placeholder="*********" class="input-xlarge">
											<span class="help-block">Minimum length: 9, only numeric</span>
										</div>
									</div>
									<div class="control-group">
										<label for="file" class="control-label">File-input</label>
										<div class="controls">
											<input type="file" name="file" id="file" class="input-block-level">
											<span class="help-block">Only .jpg (Max Size: 100MB)</span>
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Select</label>
										<div class="controls">
											<select name="select" id="select" class='input-large'>
												<option value="1">Option-1</option>
												<option value="2">Option-2</option>
												<option value="3">Option-3</option>
												<option value="4">Option-4</option>
												<option value="5">Option-5</option>
												<option value="6">Option-6</option>
												<option value="7">Option-7</option>
												<option value="8">Option-8</option>
												<option value="9">Option-9</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkboxes</label>
										<div class="controls">
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
											</label>
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> ipsum eiusmod
											</label>
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> Eiusmod lorem ipsum
											</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Radios</label>
										<div class="controls">
											<label class='radio'>
												<input type="radio" name="radio"> Lorem
											</label>
											<label class='radio'>
												<input type="radio" name="radio"> Ipsum
											</label>
											<label class='radio'>
												<input type="radio" name="radio"> Eiusmod
											</label>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">Textarea</label>
										<div class="controls">
											<textarea name="textarea" id="textarea" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
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

<!--Forms----->
<div id="main">
    	<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="icon-magic"></i>
									Wizard with validation
								</h3>
							</div>
							<div class="box-content">
								<form action="{{ url('store') }}" method="POST" class='form-horizontal form-wizard' id="ss">
                                                                    
                                                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="step" id="firstStep">
										<ul class="wizard-steps steps-4">
											<li class='active'>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="step-forms">
											<div class="control-group">
												<label for="fullname" class="control-label">First name</label>
												<div class="controls">
													<input type="text" name="Full_name" id="firstname" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
											<div class="control-group">
												<label for="indexnumber" class="control-label">Index Number</label>
												<div class="controls">
													<input type="text" name="Index_number" id="anotherelem" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
                                                                                    <!--<div class="control-group">
												<label for="Email" class="control-label">Last name</label>
												<div class="controls">
													<input type="text" name="" id="anotherelem" class="input-xlarge" data-rule-required="true">
												</div>
											</div>-->
											<div class="control-group">
												<label for="email" class="control-label">Email</label>
												<div class="controls">
													<input type="text" name="Email" id="additionalfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="10">
												</div>
											</div>
										</div>
									</div>
									<div class="step" id="secondStep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Level</label>
											<div class="controls">
												<select name="level" id="gend" data-rule-required="true">
													<option value="">-- Chose one --</option>
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
										<!--<div class="control-group">
											<label for="text" class="control-label">Accept policy</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="policy" value="agree" data-rule-required="true"> I agree the policy.</label>
											</div>
										</div>-->
                                                                            <div class="control-group">
												<label for="programme" class="control-label">Programme</label>
												<div class="controls">
													<input type="text" name="Programme" id="anotherelem" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
                                                                            <div class="control-group">
												<label for="major" class="control-label">Major</label>
												<div class="controls">
													<input type="text" name="Major" id="anotherelem" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
                                                                                <div class="control-group">
											<label for="text" class="control-label">Address</label>
											<div class="controls">
                                                                                            <textarea  mame="Current_Address" id="tt333" class="span5" rows="3" placeholder="You can provide additional information in here..."></textarea>
											</div>
										</div>
									</div>
									<div class="step" id="thirdStep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
                                                                            <div class="control-group">
											<label for="text" class="control-label">Appliction Type</label>
											<div class="controls">
												<select name="Application_Type" id="gend" data-rule-required="true">
													<option value="">-- Chose one --</option>
						<option value="">Status</option>
                                <option value="Student">Student</option>
                                <option value="Alumni">Alumni</option>
												</select>
											</div>
										</div>
                                                                             <div class="control-group">
											<label for="text" class="control-label">Searching</label>
											<div class="controls">
												<select name="Job_Search_Status" id="gend" data-rule-required="true">
													<option value="">Status</option>
						<option value="">Offer</option>
                                <option value="Internship">Internship</option>
                                <option value="Part time job">Part time Job</option>
                                <option value="Full time job">Full time Job</option>
                                <option value="Volunter">Volunteer</option>
												</select>
											</div>
										</div>
										<!--<div class="control-group">
											<label for="text" class="control-label">Additional information</label>
											<div class="controls">
												<textarea name="textare" id="tt333" class="span12" rows="7" placeholder="You can provide additional information in here..."></textarea>
											</div>
										</div>-->
									</div>
									<div class="step" id="fourthstep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<!--<div class="control-group">
											<label for="text" class="control-label">Check again</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="policy" value="agree" data-rule-required="true"> Everything is ok. Submit</label>
											</div>
										</div>-->
                                                                                 <div class="control-group">
												<label for="Resume" class="control-label">Upload Resume</label>
												<div class="controls">
													<input type="text" name="Resume" id="anotherelem" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
                                                                                 <div class="control-group">
										<label for="textfield" class="control-label">Basic Skills</label>
										<div class="controls">
											<div class="span12"><input type="text" name="Basic_skills" id="textfield" class="tagsinput" value="PHP,Laravel,Java"></div>
										</div>
									</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="btn" value="Back" id="back">
										<input type="submit" class="btn btn-primary" value="Submit" id="next">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>