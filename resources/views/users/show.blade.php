@extends('layouts.app')
@section('content')
<div class="row">


    <div class="col-md-10 col-md-offset-1">
           
            <div class="pull-right">

                        <a href="{{url('users.edit',$user->id)}}" class="btn btn-info">Edit Your Profile</a>
                    </div>
                            <div class="panel panel-default">

            <div class="panel-heading">HEY FEEL FREE TO POST !!!!</div>

            <div class="panel-body">

            <div class="row">
            <div class="col-md-8">
            <h2>{{$user->name}}</h2>
            <hr >
            </div>
            </div>
             <!--   @include('jobs.errors')
                
    <form action="{{ url('store') }}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">-->
     <!--   {!!Form::open(array('url'=>'show','method'=>'POST'))!!}-->
   <form action="{{ url('store') }}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
                 <!-- @include('users.form')-->

                <!--{!!Form::close()!!}-->
                </form>
            </div>  
        </div>
    </div>
</div>
@stop