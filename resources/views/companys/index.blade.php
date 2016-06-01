
@extends('layouts.app')
@include('layouts.partials.sidebar')

@section('content')
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
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>CONTACT</th>
                                <th>ADDRESS</th>  
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($company as $row)  
                            <tr>
                                <td>{{$row->company_id}}</td>
                                <td>{{$row->Organization_name}}</td>
                                <td>{{$row->Description}}</td>

                                <td>{{$row->Phone}}</td>
                                <td>{{$row->Address}}</td>


                                <td><a href="{{url('/edit{id}')}}"><i class="icon-edit"></i></a></td>
                                <td>
                                    <a href="{{url('/delete{id}')}}"><i class="icon-remove-circle"></i></a>   
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
        <div class="pagination pagination-small ">
                        <ul>
                            <?php echo $company->render() ?>
                        </ul>
                    </div>
    </div>
</div>

@endsection
