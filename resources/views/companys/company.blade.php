@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>
                <a href="{{url('create')}}">Add A Child</a>
            </h3>
            <div class="panel panel-default">
                <div class="panel-heading">Registered </div> 
                <div class="panel-body" >
                    <div class="table-responsive">   
                        <table class='table table-striped'>                     
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Web site</th>
                            <th>Industry</th>
                            <th>Contact</th>
                            <th>Title</th>
                            <th>Full Name</th>
                            <th>Position</th>
                            <th>Division</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>

                            </thead>
                            <tbody>

                                @foreach ($asset as $row) 
                                <tr >

                                    <td>{{ $row->id}}</td>
                                    <td>{{ $row->name}}</td>
                                    <td>{{$row->age}}</td>
                                    <td>{{$row->mum_name}}</td>
                                    <td>{{$row->dad_name}}</td>
                                    <td>{{$row->school_name}}</td>
                                    <td>{{$row->hobby}}</td>

                                    <td><a href="{{url('show', $row->id)}}">Edit</a>|</td>
                                    <td>    


                                        <form action="{{ url('destroy/'.$row->id) }}" method="POST">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!--paginate-->

                    <div class="text-center">
                        <nav>


                            <?php
                            echo $asset->render();
                            ?>
                        </nav>
                    </div>

                    <!--paginate-->
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
