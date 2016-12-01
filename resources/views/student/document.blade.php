@extends('student.layout')

@section('content')
@if ($applicant->team != NULL)
	<div class="row">
		<div class="col-md-7 col-md-offset-1">
			<div class="callout bg-maroon">
		        <h4><i class="fa fa-bullhorn"></i> สถานที่จัดส่งเอกสาร!</h4>
		        <p style="text-indent: 50px">อาคารปฏิบัติการรวม คณะวิศวกรรมศาสตร์ 2 (ECC) ภาควิชาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง เลขที่ 1 ซอยฉลองกรุง 1 เขตลาดกระบัง กรุงเทพฯ 10520</p>
    		</div>
			<!-- start file -->
			<div class="box box-danger"> 
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-file-pdf-o"></i>เอกสาร</h3><small> น้องๆ ต้องจัดส่งเอกสารทั้งหมดผ่านทางส่งไปรษณีย์มาให้พี่ด้วยนะคะ</small>
				</div>
				<div class="box-body">
					<div class="box-body table-responsive no-padding">
	                  <table class="table table-hover table-striped">
	                    <tr>
		                    <td><i class="fa fa-check"></i> ใบสมัครค่าย CE Smart Camp #9</td>
		                    <td>
		                      	<a href="{{ route('student.applicant.showPDF') }}" class="btn bg-teal pull-right btn-sm" style="margin-right: 5px;" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
		                    </td>
	                    </tr>
	                    <tr class="info">
	                    	<td><i class="fa fa-check"></i> ใบอนุญาตผู้ปกครอง</td>
	                    	<td>
	                    		<a href="{{ asset('assets/PDF/PermissionParent.pdf') }}" class="btn btn-primary pull-right btn-sm" style="margin-right: 5px;" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
	                    	</td>
	                    </tr>
	                    <tr>
	                    	<td><i class="fa fa-check"></i> General Quiz Questions</td>
	                    	<td>
	                    		<a href="{{ asset('assets/PDF/GENERAL.pdf') }}" class="btn bg-teal pull-right btn-sm" style="margin-right: 5px;" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
	                    	</td>
	                    </tr>
	                    <tr class="info">
	                    	<td><i class="fa fa-check"></i> คำถามของค่าย {{ $applicant->team }}</td>
	                    	<td>
	                    		@if ($applicant->team == "Robot")
	                    			<a href="{{ asset('assets/PDF/ROBOT.pdf') }}" class="btn btn-primary pull-right btn-sm" style="margin-right: 5px;" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
	                    		@else
	                    			<a href="{{ asset('assets/PDF/NETWORK.pdf') }}" class="btn btn-primary pull-right btn-sm" style="margin-right: 5px;" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
	                    		@endif
	                    	</td>
	                    </tr>
	                  </table>
	                </div><!-- /.box-body -->
				</div> <!-- end box-body -->
			</div>
			<!-- end file -->
			<!-- start info -->
			<div class="box box-success"> 
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-envelope"></i>หลักฐานการสมัครค่าย</h3>
				</div>
				<div class="box-body">
					<div class="box-body no-padding">
	                  <table class="table table-hover table-striped">
	                  	<thead>
	                  		<th>เอกสาร</th>
	                  		<th>จำนวน</th>
	                  	</thead>
	                    <tr>
	                    	<td>1. ใบสมัครค่าย + ใบคำถามของค่าย {{ $applicant->team }} (ตัวจริง)</td>
	                    	<td>1 ชุด</td>
	                    </tr>
	                    <tr>
	                    	<td>2. ใบขออนุญาตผู้ปกครอง</td>
	                    	<td>1 ชุด</td>
	                    </tr>
	                    <tr>
	                    	<td>3. ใบรับรองแสดงผลการเรียน (ปพ.1)</td>
	                    	<td>1 ชุด</td>
	                    </tr>
	                    <tr>
	                    	<td>4. ใบรับรองการเป็นนักเรียนของสถานศึกษา (ปพ.7)</td>
	                    	<td>1 ชุด</td>
	                    </tr>
	                    <tr>
	                    	<td>5. ภาพถ่ายหน้าตรงสวมชุดนักเรียน ขนาด 3×4 เซนติเมตร (ติดใบสมัคร)</td>
	                    	<td>1 รูป</td>
	                    </tr>
	                    <tr>
	                    	<td>6. ภาพถ่ายอิสระของผู้สมัครที่เห็นหน้าชัดเจน และมีขนาดไม่ต่ำกว่า 4×6 นิ้ว พร้อมเขียนชื่อ-นามสกุล และโรงเรียน หลังภาพ</td>
	                    	<td>1 รูป</td>
	                    </tr>
	                  </table>
	                </div><!-- /.box-body -->
				</div> <!-- end box-body -->
			</div>
			<!-- end info -->
		</div>
		<!-- Profile zone -->
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
	              	@if ($applicant->status == 0)
	              	<div class="callout callout-success">
		                <h4>สถานะ</h4>

		                <p>ยินดีด้วยค่ะ น้องผ่านการคัดเลือก :)</p>
	              	</div>
	              	@elseif ($applicant->status == 1)
	              	<div class="callout callout-danger">
		                <h4>สถานะ</h4>

		                <p>เสียใจด้วยค่ะ น้องไม่ผ่านการคัดเลือก</p>
	              	</div>
	              	@elseif ($applicant->status == 2)
	              	<div class="callout callout-info">
		                <h4>สถานะ</h4>

		                <p>พี่ๆ กำลังตรวจใบสมัครของน้องอยู่ค่ะ</p>
	              	</div>
	              	@else
	              	<div class="callout callout-warning">
		                <h4>สถานะ</h4>

		                <p>พี่ๆ กำลังรอใบสมัครของน้องอยู่ค่ะ</p>
	              	</div>
	              	@endif
                </div><!-- /.box-body -->
            </div><!-- /.box -->
		</div>
	</div>
@else
<body class="hold-transition login-page">
    <div class="login-box">
      	<div class="login-logo">
        	<b>CE</b> SMARTCAMP #9
      	</div><!-- /.login-logo -->
      	<div class="login-box-body">
          	<div class="row">
	            <div class="col-xs-8 col-xs-offset-2">
	            	<button type="submit" class="btn bg-maroon btn-block" data-toggle="modal" data-target="#agreeTermsModal" >อ่านข้อตกลงเพื่อสมัครค่าย</button>
	            </div><!-- /.col -->
          	</div>
    	</div><!-- /.login-box-body -->
	</div><!-- /.login-box -->
</body>
@endif
@endsection