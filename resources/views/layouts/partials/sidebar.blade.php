
	<div class="container-fluid" id="content">
		<div id="left">
			<form action="#" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit"><i class="icon-search"></i></button>
				</div>
			</form>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>COMPANY</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/company')}}">Registered Companies</a>
					</li>
					<li>
						<a href="{{url('/companys/create')}}">Add Company</a>
					</li>
					
				</ul>
			</div>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>STUDENT</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/student')}}">Registered Student</a>
					</li>
					<li>
						<a href="{{url('/pages/create')}}">Add Student</a>
					</li>
					<li>
						<a href="#">Contact form generator</a>
					</li>
					<li>
						<a href="#">SEO optimization</a>
					</li>
				</ul>
			</div>
                    <div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>POST</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/available')}}">Available Post</a>
					</li>
					<li>
						<a href="{{url('/create_post')}}">Add Post</a>
					</li>
					
				</ul>
			</div>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Manage Account</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('edit/{id}')}}">Profile</a>
					</li>
					<li>
						<a href="{{url('/locked')}}">locked Screen</a>
					</li>
					<li>
						<a href="{{url('/logout')}}">Logout</a>
					</li>
				</ul>
			</div>
		</div>