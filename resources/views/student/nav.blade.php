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
					<li><a href="/"><i class="fa fa-home"></i>หน้าแรก</a></li>
					<li @if(Request::is('student')) class="active bg-blue-active" @endif>
					<a href="{{ route('student.index') }}"><i class="fa fa-database"></i>ประวัติส่วนตัว</a></li>
					<li @if(Request::is('student/document')) class="active bg-blue-active" @endif>
					<a href="{{ route('student.document') }}"><i class="fa fa-file-text"></i>คำถามค่ายและการส่งเอกสาร</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ $applicant->firstname }} {{ $applicant->lastname }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="https://facebook.com/MrNonz" target="_blank"><span class="fa fa-wrench"></span>แจ้งปัญหาการใช้งาน</a></li>
							<li class="divider"></li>
							<li><a href="{{ route('student.logout') }}"><span class="glyphicon glyphicon-log-out text-danger"></span><span class="text-danger">ออกจากระบบ</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
			@endif
		</div>
	</nav>
</header>