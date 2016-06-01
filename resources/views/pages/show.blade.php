@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Provide Child's Information</div>

                  <div class="panel-body">
                      
                       <form action="{{ url('show'.$row->id) }}" method="POST">
                 <!--<form action="show" method="POST" class="responsive" class="form-horizontal">-->
             <input type="hidden" name="_token" value="{{ csrf_token() }}">

           
                <div class="row">
                   
                    <div class="col-sm-6">
                         <label>Name</label>
                        <input class="form-control" value="{{$asset->name}}" />

                    </div>
                   
                    <div class=col-sm-6>
                         <label>Age</label>
                        <input class="form-control" name="age" value="{{$asset->age}}"/>
                    </div>

                </div>
                 <div class="row">
                  <div class="col-sm-6">
                         <label>Mother's name</label>
                         <input class="form-control" name="mum_name"  value="{{$asset->mum_name}}" />
                    </div>
                    <div class="col-sm-6">
                         <label>Daddy's name</label>
                         <input class="form-control" name="dad_name" value="{{$asset->dad_name}}" />
                    </div>
                  	
                  </div>
                   
                   <div class="row">
                  <div class="col-sm-6">
                         <label>Shool name</label>
                         <input class="form-control" name="school_name"  value="{{$asset->school_name}}" />
                    </div>
            
                    <div class="col-sm-6">
                         <label>Hobby</label>
                         <input class="form-control" name="hobby" value="{{$asset->hobby}}" />
                    </div>
                  	
                  </div>
            
             <!--Add children-->
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-btn fa-blue"></i>Save
                            </button>
                        </div>
                    </div>


                 </form>
        </div>
    </div>
</div>
</div>



@endsection