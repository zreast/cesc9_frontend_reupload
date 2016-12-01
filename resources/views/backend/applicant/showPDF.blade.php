<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CESC#9 Backend</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('assets/backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('assets/backend/adminlte/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/adminlte/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/backend/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>

  <body class="skin-blue layout-top-nav">

    <div class="wrapper">

      <div class="content-wrapper">
        <section class="content">

	<div class="row">
		<div class="col-md-7 col-md-offset-1">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-user"></i>ข้อมูลใบสมัคร</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-2">
							<div class="field">
								<span class="title">ID</span>
								<span class="value">{{ str_pad($applicant->id, 4, 0, STR_PAD_LEFT) }}</span>
							</div>
						</div>
						<div class="col-md-5">
							<div class="field">
								<span class="title">ชื่อ-สกุล</span>
								<span class="value">{{ $applicant->prefix }}{{ $applicant->firstname }}  {{ $applicant->lastname }}</span>
							</div>
						</div>
						<div class="col-md-2">
							<div class="field">
								<span class="title">เพศ</span>
								<span class="value">
									@if ($applicant->gender == 0)
										ชาย
									@else
										หญิง
									@endif
								</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">ชื่อเล่น</span>
								<span class="value">{{ $applicant->nickname }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<span class="title">อีเมล</span>
								<span class="value">{{ $applicant->email }}</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">รหัสประจำตัวประชาชน</span>
								<span class="value">{{ $applicant->getFormattedIdCard() }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">วันเกิด</span>
								<span class="value">{{ $applicant->getBirthday() }}</span>
							</div>
						</div>
						<div class="col-md-2">
							<div class="field">
								<span class="title">อายุ</span>
								<span class="value">{{ $applicant->getAge() }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">ศาสนา</span>
								<span class="value">{{ $applicant->religion }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">หมู่เลือด</span>
								<span class="value">{{ $applicant->blood }}</span>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">ที่อยู่</span>
								<span class="value">{{ $applicant->address }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="field">
								<span class="title">จังหวัด</span>
								<span class="value">{{ $applicant->province }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">รหัสไปรษณีย์</span>
								<span class="value">{{ $applicant->post_code }}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">เบอร์บ้าน</span>
								<span class="value">{{ $applicant->getFormattedTelHome() }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">เบอร์ติดต่อ</span>
								<span class="value">{{ $applicant->getFormattedTel() }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">เครือข่าย</span>
								<span class="value">{{ $applicant->tel_carries }}</span>
							</div>
						</div>
						<div class="col-md-5">
							<div class="field">
								<span class="title">โรงเรียน</span>
								<span class="value">{{ $applicant->school }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="field">
								<span class="title">GPA</span>
								<span class="value">{{ $applicant->GPA }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">ระดับชั้น</span>
								<span class="value">ม.{{ $applicant->class }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">สาย</span>
								<span class="value">{{ $applicant->department }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">รู้จักจาก</span>
								<span class="value">{{ $applicant->ref_camp }}</span>
							</div>
						</div>
					</div>
					<div class="row"> <!-- medical -->
						<div class="col-md-6">
							<div class="field">
								<span class="title">สิ่งที่แพ้</span>
								<span class="value">{{ $applicant->allergic }}</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">ไม่ทาน</span>
								<span class="value">{{ $applicant->not_eat }}</span>
							</div>
						</div>
					</div>
					<div class="row"> <!-- medical -->
						<div class="col-md-6">
							<div class="field">
								<span class="title">แพ้ยา</span>
								<span class="value">{{ $applicant->allergic_drug }}</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">แพ้อาหาร</span>
								<span class="value">{{ $applicant->allergic_food }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<span class="title">โรคประจำตัว</span>
								<span class="value"><mark>{{ $applicant->congenital_disease }}</mark></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">ความสามารถพิเศษ</span>
								<span class="value">{{ $applicant->talent }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="field">
								<span class="title">ผู้ปกครอง</span>
								<span class="value">{{ $applicant->parent }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">เกี่ยวข้องเป็น</span>
								<span class="value">{{ $applicant->parent_relationship }}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">เบอร์</span>
								<span class="value">{{ $applicant->getFormattedParentTel() }}</span>
							</div>
						</div>
					</div>
					<div class="row"> <!-- CAMP -->
						<div class="col-md-5">
							<div class="field">
								<span class="title">ค่ายที่ 1</span>
								<span class="value">{{ $applicant->past_camp_1 }}</span>
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ที่</span>
								<span class="value">{{ $applicant->past_camp_place_1 }}</span>
							</div>
						</div>
					</div>
					<div class="row"> <!-- CAMP -->
						<div class="col-md-5">
							<div class="field">
								<span class="title">ค่ายที่ 2</span>
								<span class="value">{{ $applicant->past_camp_2 }}</span>
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ที่</span>
								<span class="value">{{ $applicant->past_camp_place_2 }}</span>
							</div>
						</div>
					</div>
					<div class="row"> <!-- CAMP -->
						<div class="col-md-5">
							<div class="field">
								<span class="title">ค่ายที่ 3</span>
								<span class="value">{{ $applicant->past_camp_3 }}</span>
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ที่</span>
								<span class="value">{{ $applicant->past_camp_place_3 }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="field">
								<span class="title">เอกสาร</span>
								<span class="valus"><a href="{{ asset('uploads/documents/'.$applicant->document) }}" target="_blank">{{ $applicant->document }}</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<!-- Profile Image -->
            <div class="box box-info">
                <div class="box-body box-profile">
                	@if (strpos($applicant->pic,'http') !== false) <img class="profile-user-img img-responsive img-circle" src="{{ $applicant->pic }}" alt="User profile picture">
                	@else <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/images/'.$applicant->pic) }}" alt="User profile picture">
                	@endif
	                <h3 class="profile-username text-center">{{ $applicant->prefix }}{{ $applicant->firstname }}  {{ $applicant->lastname }}</h3>
	                <p class="text-muted text-center">
	                	@if ($applicant->team == NULL) <i class="fa fa-fort-awesome"></i> ยังไม่เลือกค่าย !!
		                @elseif ($applicant->team == "Robot") <i class="fa fa-github-alt"></i>
						@else <i class="fa fa-sitemap"></i>
						@endif
						{{ $applicant->team }}
					</p>

                	<ul class="list-group list-group-unbordered">
                    	<li class="list-group-item">
                      		<b>Facebook</b> <a class="pull-right" href="https://fb.com/{{ $applicant->facebook }}" target="_blank">{{ $applicant->facebook }}</a>
                    	</li>
                    	<li class="list-group-item">
                      		<b>เบอร์มือถือ</b> <a class="pull-right">{{ $applicant->getFormattedTel() }}</a>
                    	</li>
	                    <li class="list-group-item">
	                      <b>อีเมล</b> <a class="pull-right" href="mailto:{{ $applicant->email }}">{{ $applicant->email }}</a>
	                    </li>
                  	</ul>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
		</div>
	</div>
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs"><span class="text-muted">Product of <a href="http://mrnonz.com" target="_blank" style="border-bottom:dotted 1px #d0d6e2;">MrNonz</a> @KMITL</span></div>
        <strong><a href="http://mrnonz.com" target="_blank">CESC#9</a></strong> Backend System
    </footer>

    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/backend/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('assets/backend/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/backend/adminlte/js/app.min.js') }}" type="text/javascript"></script>
  </body>
</html>
