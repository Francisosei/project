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
                                <th>JOB TYPE</th>
                                <th>Name</th>
                                <th>LOCATION</th>
                                <th>Description</th>
                                <th>LOGO</th>
                                 <th>SALARY RANGE</th>
                                <th>CONTACT</th>
                                 
                                <th>Update</th>
                                <th>Delete</th>
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
                           <td>{{$row->user->photo}}</td>
                                <td>{{$row->Salary_Range}}</td>
                                <td>{{$row->user->contact}}</td>
                               <td><a href="{{url('/edit{id}')}}"><i class="icon-edit"></i></a></td>
                                <td>
                                 <a href="{{url('/delete{id}')}}"><i class="icon-remove"></i></a>   
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="text-center">
                <div class="pagination pagination-medium ">
                        <ul>
                            <?php echo $post->render() ?>
                        </ul>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@stop
