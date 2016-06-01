@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <div class="col-xs-2 ">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    UCC SRS
                </a>
                <a href="#" class="list-group-item">COMPANY LOGIN</a>
                <a href="#" class="list-group-item">STUDENT LOGIN</a>
                <a href="#" class="list-group-item">ADMIN LOGIN</a>
                <a href="#" class="list-group-item">ENQUIRIES</a>
            </div> 
        </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
