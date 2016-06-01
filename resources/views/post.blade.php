@extends('layouts.app')

@section('content')

<div class="row-fluid">

    <div class="span12">

        <div class="box">
            <div class="box-content">
                <div class="grids">
                    <!--left panel-->
                    <div class="span1">

                    </div>
                    <!--end of left panel-->
                    
                    <!--middle panel-->
                    <div class="span7">
                        <br >
                        <div class="panel panel-default">

                            <div class="panel-body" >
                                <div class="table-hover">   
                                    <table class='table'>                     
                                        @foreach ($post as $row) 
                                        <tr>
                                            <td class="middle">
                                                <div class="media">
                                                    <a class="pull-right" href="#">

                                                        <img class="media-object" src="{{URL::asset('uploads/'.$row->user->photo)}}"  width="100" height="100" alt="...">
                                                        <strong class="red" > APPLY NOW</strong>
                                                    </a>
                                                    <div class="media-body">

                                                        <h4 class="media-heading text-primary"><a href=""></a>{{$row->Job_type}}</h4>

                                                        <strong class="text-danger" >{{$row->user->name}}</strong>
                                                        <p>{{$row->Location}}</p>
                                                        <p>{{$row->Description}}
                                                        <label>Visit us:{{$row->Website}}</label>
                                                        <label>Contact:{{$row->Contact_Info}}</label>
                                                        <label>Salary:{{$row->Salary_Range}}</label></p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <div class="text-center">
                        <nav>
                                    <?php
                                    echo $post->render();
                                    ?> 
                                </nav>
                        </div>
                    </div>
                    <!--end of right panel-->
                    <div class="span3">

                        <div class="box box-color box-bordered green">
                            <div class="box-title">
                                <h3><i class="icon-bullhorn"></i>Feeds</h3>
                                <div class="actions">
                                    <a href="#" class="btn btn-mini custom-checkbox checkbox-active">Automatic refresh<i class="icon-check-empty"></i></a>
                                </div>
                            </div>
                            <div class="box-content nopadding scrollable" data-height="400" data-visible="true">
                                <table class="table table-nohead" id="randomFeed">
                                    <tbody>
                                        <tr>
                                            <td><span class="label"><i class="icon-plus"></i></span> <a href="#">John Doe</a> added a new photo</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-success"><i class="icon-user"></i></span> New user registered</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-info"><i class="icon-shopping-cart"></i></span> New order received</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-warning"><i class="icon-comment"></i></span> <a href="#">John Doe</a> commented on <a href="#">News #123</a></td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-success"><i class="icon-user"></i></span> New user registered</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-info"><i class="icon-shopping-cart"></i></span> New order received</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-warning"><i class="icon-comment"></i></span> <a href="#">John Doe</a> commented on <a href="#">News #123</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!--end of right panel-->
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


