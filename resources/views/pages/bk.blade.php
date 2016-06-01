@extends('layouts.app')

@section('content')
@include('layouts.partials.sidebar')
                      <div class="row">
                    <div class="col-md-6">
                        <label for="name">Organization Name</label>
                        <input type="text" name="name" value="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="Description">Description</label>
                        <input type="text" name="Description" value="" class="form-control">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-xs-3">
                        <label for="Website">Website</label>
                        <input type="text" name="Website" value="" class="form-control">
                    </div>
                    <div class="col-xs-6">
                        <label for="Industry">Industry</label>
                        <input type="text" name="Industry" value="" class="form-control">
                    </div>
                    
                    <div class="col-xs-3">
                        <label for="Contact_Info">Contact </label>
                        <input type="text" name="Contact_Info" value="" class="form-control">
                    </div>
                        </div>
                    <hr />
                   
                    
                        <label for="Title">Title </label>
                        <select class="col-xs-3" name="Title">
                            <option>Title</option>
                              <option>Mr.</option>
                                <option>Mrs</option>
                        </select>
                    
                     <div class="row">
                    <div class="col-md-6">
                        <label for="full_name">Full Name</label>
                        <input type="text" name="Full_name" value="" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="Postion">Position</label>
                        <input type="text" name="Position" value="" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="Division">Division</label>
                        <input type="text" name="Division" value="" class="form-control">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                       <label for="Email">Email</label>
                        <input type="text" name="Email" value="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="Phone">Phone</label>
                        <input type="number" name="Phone" value="" class="form-control">
                    </div>
                    </div>
                        
                        <div class="row">
                    <div class="col-md-6">
                        <label for="Address">Address</label>
                        <textarea  name="Address" class="form-control" rows="3"></textarea>
                    </div>
                        <div class="col-md-6">
                             <label for="logo">Image</label>
                           
                                 {!!Form::file('logo')!!}
                           
                        </div>
                        </div>
                    <div class="form-group">

                        <button type="submit" class="btn btn info">Submit</button>
                    </div>
@endsection