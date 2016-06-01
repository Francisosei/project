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
                        REGISTERED STUDENTS
                    </h3>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-nomargin table-colored-header">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>INDEX</th>
                                <th>EMAIL</th>
                                <th>LEVEL</th>
                                <th>PROGRAMME</th>
                                <th>MAJOR</th>
                                <th>SKILLS</th>
                                <th>RESUME</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($student as $row)  
                            <tr>
                                <td>{{$row->stu_id}}</td>
                                <td>{{$row->Full_name}}</td>
                                <td>{{$row->Index_number}}</td>
                                <td>{{$row->Email}}</td>
                                <td>{{$row->Level}}</td>
                                <td>{{$row->Programme}}</td>
                                <td>{{$row->major}}</td>
                                <td>{{$row->Basic_skills}}</td>
                                <td>{{$row->Resume}}</td>
                                <td><a href="{{url('/edit{id}')}}"><i class="icon-edit"></i></a></td>
                                <td>
                                    <a href="{{url('/delete{id}')}}"><i class="icon-remove"></i></a>   
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                  <div class="text-center">
                        <nav>
                                    <?php
                                    echo $student->render();
                                    ?> 
                                </nav>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop