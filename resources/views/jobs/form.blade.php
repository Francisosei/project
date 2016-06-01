  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
                    <div class="row">
                    <div class="col-md-6">
                        <label for="Post_Title">POST TITLE</label>
                        <input type="text" name="Post_Title" value="" class="form-control">
                    </div>
                        <div class="col-md-6">
                        <label for="Job_type">JOB TYPE</label>
                        <select class="form-control"  name="Job_type">
                             <option value=""> SELECT JOB TYPE</option>
                            <option value="Full Time">FULL TIME</option>
                             <option value="Part Time">PART TIME</option>
                              <option value="Internship">INTERNSHIP</option>
                              <option value="Volunteer">VOLUNTEER</option>
                        </select>
                    </div>
                    
                    </div>
            <div class="row">
            <div class="col-md-6">
                        <label for="Description">DESCRIPTION</label>
                        <input type="text" name="Description" value="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="Role">ROLE</label>
                        <textarea type="text" rows="2" name="Role" value="" class="form-control"></textarea>
                    </div>
                   
            </div>
            <div class="row">
                   
                 <div class="col-md-6">
                        <label for="Qualification">QUALIFICATION</label>
                        
                        <select class="form-control"  name="Qualification">
                            <option value="">SELECT QUALIFICATION LEVEL </option>
                            <option value="1ST DEGREE">1ST DEGREE</option>
                             <option value="2ND DEGREE">2ND DEGREE</option>
                              <option value="HND">HND</option>
                              <option value="WAECE">WAECE</option>
                        </select>
                    </div>
                <div class="col-md-6">
                        <label for="Location">LOCATION</label>
                        <textarea type="text" rows="2" name="Location" value="" class="form-control"></textarea>
                    </div>
                    </div>  
                        
                    
                     <div class="row">
                    <div class="col-md-6">
                        <label for="Salary_range">SALARY RANGE</label>
                        <input type="text" name="Salary_range" value="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="Deadline">DEADLINE</label>
                       
                        <input type="date" name="Deadline" value="{{\Carbon\Carbon::now(); }}"  class="form-control">
                    </div>
                     </div>
                   
                    <div class="form-group">

                        <button type="submit" class="btn btn info">POST</button>
                    </div>