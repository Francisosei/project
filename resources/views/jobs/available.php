@extends('layouts.app')
@section('content')
@include('layouts.partials.sidebar')
<div id="main">
    <div class="row-fluid">
        <div class="span12">
            <div class="box">
                <div class="box-title">
                    <h3>
                        <i class="icon-table"></i>
                        Available Post
                    </h3>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-nomargin table-colored-header">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Web site</th>
                                <th>Industry</th>
                                <th>Contact</th>
                                 
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($post as $row)  
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->Job_type}}</td>

                                <td>{{$row->user->name}}</td>
                                <td>{{$row->Location}}</td>
                                <td>{{$row->Description}}</td>
                                <td>{{$row->Website}}</td>
                                <td>{{$row->Contact_Info}}</td>
                                <td>{{$row->Salary_Range}}</td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop