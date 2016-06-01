@extends('layouts.app')
@section('content')
<div class="row">


    <div class="col-md-10 col-md-offset-1">
           
            <div class="pull-right">

                        <a href="{{url('users.edit',$user->id)}}" class="btn btn-info">Edit Your Profile</a>
                    </div>
                            <div class="panel panel-default">

            <div class="panel-heading"></div>

            <div class="panel-body">

            <div class="row">
            <div class="col-md-8">
            <h2>{{$user->name}}</h2>
            <hr >
            </div>
            </div>
             <!--   @include('jobs.errors')
                
    <form action="{{ url('store') }}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">-->
      <!--{!!Form::model(array('url'=>'store','method'=>'POST'))!!}-->
      <!--<!Form::model($user, array('_method'=>'post','route' => array('UserController@update', $user->id)))-->
   <form action="{{ url('UserController@update') }}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
                 <!-- @include('users.form')-->

                <!--{!!Form::close()!!}-->
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    

                    <div class="row">
                    <div class="col-md-6">
                        <label for="name">{{$user->name}}</label>
                        <!--<input type="text" name="Post_Title" value="" class="form-control">-->
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control">
                    </div>
                    
                    </div>
                    <div class="row">
                                        <div class="col-xs-6">
                        <label for="industry">Industry</label>
                        <input type="text" name="industry" value="{{$user->industry}}" class="form-control">
                    </div>
                    <div class="col-xs-3">
                        <label for="website">Website</label>
                        <input type="text" name="website" value="{{$user->websit}}" class="form-control">
                    </div>

                    <div class="col-xs-3">
                        <label for="Contact_Info">Contact </label>
                        <input type="text" name="contact" value="{{$user->contact}}" class="form-control">
                    </div>
                        </div>
                   
                     <div class="row">
                    <div class="col-md-6">
                        <label for="address">Address </label>
                        <input type="text" name="address" value="{{$user->address}}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="logo">Company Logo</label>
                        {!!Form::file('logo')!!}
                    </div>
                    

<hr >
<div class="form-group">

                        <button type="submit" class="btn btn-info">UPDATE</button>
                    </div>


                     
                </form>
            </div>  
        </div>
    </div>
</div>
@stop