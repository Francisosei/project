@extends('layouts.app')
@section('content')
@include('layouts.partials.sidebar')
<div id="main">
    <div class="row-fluid">
        <div class="page-header">
					<!--<div class="pull-left">
						<h2>{{$user->name}}</h2>
					</div>-->
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-user"></i>
									Edit user profile
								</h3>
							</div>
							<div class="box-content nopadding">
								 <form action="{{ url('update',$user->id) }}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
                    <!--{!!Form::open(array('url'=>'update',$user->id),array('method'=>'POST','file'=>'true'))!!}-->     

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

									<div class="control-group">
										<label for="textfield" class="control-label">Username</label>
										<div class="controls">
                                                                                    <span class="uneditable-input form-control" >{{$user->name}}</span>
											<span class="help-block">*You cannot change your Username</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Avatar</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="fileupload-new thumbnail" style="width: 100px; height: 100px;"><img src="{{URL::asset('uploads/'.$user->photo)}}" />{{$user->photo}}</div>
												<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
												<div>
                                                                                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="photo" type="file" /></span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Full name</label>
										<div class="controls">
                                                                                    <input type="text" class="uneditable-input" name="name" value="{{$user->name}}">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Email</label>
										<div class="controls">
											<span class="uneditable-input">{{$user->email}}</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Password</label>
										<div class="controls">
                                                                                    <span class="uneditable-input">{{$user->password}}</span> <a href="#" class="btn"><input name="password"> Change password</a>
											<span class="help-block">*For security reasons hidden</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Contact</label>
										<div class="controls">
											<div class="span5"><input type="text" name="role" value="{{$user->contact}}"></div>
										</div>
									</div>
                                                                    <div class="control-group">
										<label for="textfield" class="control-label">Address</label>
										<div class="controls">
											<div class="span5"><input type="text" name="address" id="textfield" value="{{$user->contact}}"></div>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


@stop