<header class="main-header">
	<nav class="navbar navbar-static-top navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><span class="logo-lg"><b>CESC</b>#9</span></a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				Menu <i class="fa fa-bars"></i>
				</button>

			</div>

			@if(Auth::check())
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li @if(Request::is('backend')) class="active bg-blue-active" @endif><a href="{{ route('backend.index') }}"><i class="fa fa-database"></i>หน้าแรก</a></li>
					<li @if(Request::is('backend/applicant*')) class="active bg-blue-active" @endif><a href="{{ route('backend.applicant.index') }}"></i><i class="fa fa-users"></i>จัดการใบสมัคร</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="https://facebook.com/MrNonz" target="_blank"><span class="fa fa-wrench"></span>แจ้งปัญหาการใช้งาน</a></li>
							<li class="divider"></li>
							<li><a href="{{ URL::to('/backend/auth/logout') }}"><span class="glyphicon glyphicon-log-out text-danger"></span><span class="text-danger">ออกจากระบบ</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
			@endif
		</div>
	</nav>
</header>