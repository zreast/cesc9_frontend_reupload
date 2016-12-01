@extends('backend.layout')

@section('content')

	<div class="row">
		<div class="col-md-7 col-md-offset-1">
			<!-- start info -->
			<div class="box box-primary"> 
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-user"></i>ข้อมูลใบสมัคร</h3>
					<a href="{{ route('backend.applicant.showPDF', $applicant->id) }}" class="btn btn-success pull-right btn-sm" style="margin-right: 5px;" target="_blank"><i class="fa fa-download"></i> Generate PDF</a>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-2">
							<div class="field">
								<span class="title">ID</span>
								<span class="value">{{ str_pad($applicant->id, 4, 0, STR_PAD_LEFT) }}</span>
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ชื่อ-สกุล</span>
								<span class="value">{{ $applicant->prefix }}{{ $applicant->firstname }}  {{ $applicant->lastname }}</span>
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
						<div class="col-md-3">
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
						<div class="col-md-5">
							<div class="field">
								<span class="title">โรงเรียน</span>
								<span class="value">{{ $applicant->school }}</span>
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
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">GPA เทอมล่าสุด</span>
								<span class="value">{{ $applicant->GPA }}</span>
							</div>
						</div>
						<div class="col-md-8">
							<div class="field">
								<span class="title">ความสามารถพิเศษ</span>
								<span class="value">{{ $applicant->talent }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">รู้จักค่ายนี้จาก</span>
								<span class="value">{{ $applicant->ref_camp }}</span>
							</div>
						</div>
					</div>
				</div> <!-- end box-body -->
			</div>
			<!-- end info -->
			<!-- start contact -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-phone"></i>ข้อมูลติดต่อ<small> </small></h3>
					<div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">เบอร์มือถือ</span>
								<span class="value">{{ $applicant->getFormattedParentTel() }}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">เครือข่ายมือถือ</span>
								<span class="value">{{ $applicant->tel_carries }}</span>
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
								<span class="title">ผู้ปกครอง</span>								
								<span class="value">{{ $applicant->parent }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">เกี่ยวข้องเป็น</span>								
								<span class="value">{{ $applicant->parent_relationship }}</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">เบอร์ผู้ปกครอง</span>								
								<span class="value">{{ $applicant->getFormattedParentTel() }}</span>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<!-- end contact -->
			<!-- start medical -->
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-stethoscope"></i>สุขภาพ<small> ข้อมูลส่วนนี้สำคัญมากๆ นะคะ พี่ๆ จะได้ดูแลน้องๆ ได้เต็มที่เลย</small></h3>
					<div class="box-body">
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
						<div class="col-md-12">
							<div class="field">
								<span class="title">โรคประจำตัว</span>
								<span class="value"><mark>{{ $applicant->congenital_disease }}</mark></span>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<!-- end medical -->
			<!-- start History of CAMP -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-history"></i>ค่ายที่เคยเข้าร่วม<small> น้องๆ เคยเข้าค่ายไหนมาบ้าง กรอกให้พี่ด้วยนะคะ</small></h3>
					<div class="box-body">
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
					</div>
				</div>
			</div>
			<!-- end History of CAMP -->
			<!-- start Archive -->
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-archive"></i>เอกสาร<small> คำถามของน้องๆ ที่ตอบเรียบร้อยแล้วสามารถส่งทางนี้ได้เลยค่ะ (ไฟล์ docx, doc, pdf เท่านั้นนะคะ)</small></h3>
					<div class="box-body">
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
			<!-- end Archive-->
			<div class="row">
				<div class="col-xs-4 col-xs-offset-4">
					<div class="text-center">
						<a href="{{ route('backend.applicant.edit', $applicant->id) }}">
							<button class="btn btn-block btn-warning">แก้ไขข้อมูล</button>
						</a>
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
                <div class="text-center">
					<div class="btn-group">
						@if ($applicant->status == 0)
						<button type="button" class="btn btn-block btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   		ผ่านค่าย <span class="caret"></span>
						</button>
						@elseif ($applicant->status == 1)
						<button type="button" class="btn btn-block btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   		ไม่ผ่านค่าย <span class="caret"></span>
						</button>
						@elseif ($applicant->status == 2)
						<button type="button" class="btn btn-block btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   		รอตรวจใบสมัคร <span class="caret"></span>
						</button>
						@else
						<button type="button" class="btn btn-block btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   		รอใบสมัคร <span class="caret"></span>
						</button>
						@endif
						  	<ul class="dropdown-menu">
						    <li><a href="{{ route('backend.applicant.setStatus', ['id' => $applicant->id, 'status' => 3]) }}">รอใบสมัคร</a></li>
						    <li><a href="{{ route('backend.applicant.setStatus', ['id' => $applicant->id, 'status' => 2]) }}">รอตรวจข้อสอบ</a></li>
						    <li><a href="{{ route('backend.applicant.setStatus', ['id' => $applicant->id, 'status' => 1]) }}">ไม่ผ่านค่าย</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="{{ route('backend.applicant.setStatus', ['id' => $applicant->id, 'status' => 0]) }}">ผ่านค่าย</a></li>
					  	</ul>
					</div>
				</div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
		</div>
	</div>

@endsection
