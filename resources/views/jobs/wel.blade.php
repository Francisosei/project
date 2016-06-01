@extends('layouts.app')
@section('content')
<div class="container">


    <div class="row">
       <div class="col-xs-2 ">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    UCC SRS
                </a>
                
                <a href="{{ url('companys/create')}}" class="list-group-item">COMPANY LOGIN</a>
                <a href="{{ url('pages/create')}}" class="list-group-item">STUDENT LOGIN</a>
                
                <a href="#" class="list-group-item">ADMIN LOGIN</a>
                <a href="#" class="list-group-item">ENQUIRIES</a>
            </div> 
        </div>
        <div class="col-md-10">
           <h3>
                <a href="{{url('create')}}">Add A Child</a>
            </h3>
            <div class="panel panel-default">
                <div class="panel-heading">Registered </div> 
                <div class="panel-body" >
                    <div class="table-responsive">   
                        <table class='table'>                     




                            @foreach ($post as $posts) 
                            <tr>

                                <td class="middle">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                           
                                            <img class="media-object" src="{{URL::asset('uploads/'.$row->logo)}}"  width="100" height="100" alt="...">
                                            <!--{!!Html::image('uploads/',$row->logo,array('class'=>'media-object','width'=>100,'height'=>100))!!}-->
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{$posts->Post_Title}}</h4>
                                            <address>
                                                <strong>{{$posts->Job_type}}</strong><br>
                                                {{$posts->Description}}<br>
                                                <label>Visit us:{{$posts->Qualification}}</label><br>
                                                <label>Contact:{{$posts->Location}}</label>
                                            </address>
                                            
                                            This is some sample text. This is some sample text.
                                            This is some sample text. This is some sample text.
                                            This is some sample text. This is some sample text.
                                            This is some sample text. This is some sample text.
                                        </div>
                                    </div>
                               
                           
                                </td>
                                <td  widith="100" class="middle"></td>

                            
                            </tr>
                            @endforeach


                        </table>
                    </div>
                    <div class="text-center">
                        <nav>
                          <?php
                            //echo $company->render();
                            ?> 
                        </nav>
                    </div>

                    
                </div>
            </div>
        </div>

    </div>
</div>
@endsection