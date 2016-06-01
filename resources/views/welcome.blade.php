@extends('layouts.app')
@section('content')



    <div class="row">
      
       
       
            <div id="main">
			<div class="container-fluid">
				
				
				<div class="row-fluid">
                                    <!--Left panel-->
                                   <!-- <div class="span2 pull-left">
                                        
                                                         
            
                
                
                <a href="{{ url('companys/create')}}" class="list-group-item">COMPANY LOGIN</a>
                <a href="{{ url('pages/create')}}" class="list-group-item">STUDENT LOGIN</a>
                
                <a href="#" class="list-group-item">ADMIN LOGIN</a>
                <a href="#" class="list-group-item">ENQUIRIES</a>
            </div> -->
        
                               
                                    <!--end of left panel-->
					<div class="span9">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-search"></i>
									Search results
								</h3>
							</div>
							<div class="box-content nopadding">
								<!--<div class="highlight-toolbar">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group">
												<div class="pagination pagination-custom">
													<ul>
														<li><a href="#"><i class="icon-double-angle-left"></i></a></li>
														<li><a href="#">1</a></li>
														<li class='active'><a href="#">2</a></li>
														<li><a href="#">3</a></li>
														<li><a href="#">4</a></li>
														<li><a href="#">5</a></li>
														<li><a href="#"><i class="icon-double-angle-right"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<div class="dropdown">
													<a href="#" class="btn" data-toggle="dropdown" rel="tooltip" title="Sort">Sort by <span class="caret"></span></a>
													<ul class="dropdown-menu">
														<li><a href="#">Name</a></li>
														<li><a href="#">Date</a></li>
														<li><a href="#">Relevance</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="pull-right">
										<div class="btn-group">
											<span>Showing results <strong>1-25</strong> of <strong>348</strong></span>
										</div>
									</div>
								</div>-->
								<div class="search-results">
									<ul>
                                                                            @foreach($posts as $row)
										<li>
											<div class="thumbnail">
												<img class="media-object" src="{{URL::asset('uploads/'.$row->user->photo)}}"  width="100" height="100" alt="...">
											</div>
											<div class="search-info">
                                                                                            
												<a href="#"><h4 class="media-heading">{{$row->Job_type}}</h4></a>
                                                                                                
												<p class="url">{{$row->Website}}/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id. </p>
											</div>
										</li>
                                                                                @endforeach
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id. </p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id. </p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id. </p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id. </p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id. </p>
											</div>
										</li>
									</ul>
								</div>
								<div class="highlight-toolbar bottom">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group">
												<div class="pagination pagination-custom">
													<ul>
														<li><a href="#"><i class="icon-double-angle-left"></i></a></li>
														<li><a href="#">1</a></li>
														<li class='active'><a href="#">2</a></li>
														<li><a href="#">3</a></li>
														<li><a href="#">4</a></li>
														<li><a href="#">5</a></li>
														<li><a href="#"><i class="icon-double-angle-right"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<div class="dropdown">
													<a href="#" class="btn" data-toggle="dropdown" rel="tooltip" title="Sort">Sort by <span class="caret"></span></a>
													<ul class="dropdown-menu">
														<li><a href="#">Name</a></li>
														<li><a href="#">Date</a></li>
														<li><a href="#">Relevance</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="pull-right">
										<div class="btn-group">
											<span>Showing results <strong>1-25</strong> of <strong>348</strong></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                                    <!--right panel-->
                                    <div class="span2">
                 <h3>Welcome to UCC SRS</h3></div>
                
            
                                    <!--end of right panel-->
				</div>
			</div>
		</div>
   
             
        </div>

@stop
