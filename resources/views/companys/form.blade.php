

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
												<label for="name" class="control-label">Organization Name</label>
												<div class="controls">
													<input type="text" name="name" id="firstname" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
											<div class="control-group">
												<label for="Description" class="control-label">Description</label>
												<div class="controls">
													<input type="text" name="Description" id="anotherelem" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
                                                                                    
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
                                                                                            <textarea name="textare" mame="Current_Address" id="tt333" class="span5" rows="3" placeholder="You can provide additional information in here..."></textarea>
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