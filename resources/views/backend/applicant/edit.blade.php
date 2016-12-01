@extends('backend.layout')

@section('content')
<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
		<div class="col-md-7 col-md-offset-1">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-user"></i>ข้อมูลใบสมัคร</h3>
					<a href="{{ route('backend.applicant.showPDF', $applicant->id) }}" class="btn btn-success pull-right btn-sm" style="margin-right: 5px;" target="_blank"><i class="fa fa-download"></i> Generate PDF</a>
				</div>
				@if (count($errors) > 0)
		            <div class="callout callout-danger" style="margin-left: 15px; margin-right: 15px; margin-top: 5px; margin-bottom: 0px;">
		            @foreach ($errors->all() as $error)
		              <p>{{ $error }}</p>
		            @endforeach
		            </div>
		        @endif
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
								<input type="text" name="prefix" value="{{ $applicant->prefix }}" style="width: 15%;" placeholder="นาย">
								<input type="text" name="firstname" value="{{ $applicant->firstname }}" style="width: 32%;" placeholder="ชื่อจริง">
								<input type="text" name="lastname" value="{{ $applicant->lastname }}" style="width: 32%;" placeholder="นามสกุล">
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">ชื่อเล่น</span>
								<input type="text" name="nickname" value="{{ $applicant->nickname }}" style="width: 60%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="field">
								<span class="title">เพศ</span>
								<select name="gender" class="form-control" style="width: 62%; float: right; height: inherit;">
								  <option @if ($applicant->gender == 0) selected="selected" @endif>ชาย</option>
								  <option @if ($applicant->gender == 1) selected="selected" @endif>หญิง</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">รหัสประจำตัวประชาชน</span>
								<input type="text" name="id_card" value="{{ $applicant->id_card }}" style="width: 40%" maxlength="13" placeholder="ใส่เฉพาะตัวเลข">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">วันเกิด</span>
								<input type="text" name="birthday" value="{{ $applicant->getBirthday() }}" style="width: 70%" placeholder="yyyy/mm/dd ปี คศ.">
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
								<input type="text" name="religion" value="{{ $applicant->religion }}" style="width: 60%">
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">หมู่เลือด</span>
								<input type="text" name="blood" value="{{ $applicant->blood }}" style="width: 55%">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">ที่อยู่</span>
								<input type="text" name="address" value="{{ $applicant->address }}" style="width: 93%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="field">
								<span class="title">จังหวัด</span>
								<input type="text" name="province" value="{{ $applicant->province }}" style="width: 75%">
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">รหัสไปรษณีย์</span>
								<input type="text" name="post_code" value="{{ $applicant->post_code }}" style="width: 35%" maxlength="5">
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">เบอร์บ้าน</span>
								<input type="tel" name="tel_home" value="{{ $applicant->tel_home }}" style="width: 65%" maxlength="10">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="field">
								<span class="title">โรงเรียน</span>
								<input type="text" name="school" value="{{ $applicant->school }}" style="width: 75%">
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">ระดับชั้น</span>
								ม. 
								<input type="text" name="class" value="{{ $applicant->class }}" style="width: 40%" placeholder="X">
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">สาย</span>
								<input type="text" name="department" value="{{ $applicant->department }}" style="width: 65%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">GPA เทอมล่าสุด</span>
								<input type="text" name="GPA" value="{{ $applicant->GPA }}" style="width: 30%" maxlength="4" placeholder="X.XX">
							</div>
						</div>
						<div class="col-md-8">
							<div class="field">
								<span class="title">ความสามารถพิเศษ</span>
								<input type="text" name="talent" value="{{ $applicant->talent }}" style="width: 70%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">รู้จักค่ายนี้จาก</span>
								<input type="text" name="ref_camp" value="{{ $applicant->ref_camp }}" style="width: 85%" placeholder="เว็บไซต์, เพื่อนๆ แนะนำ, อาจารย์แนะนำ">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- start contact -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-phone"></i>ข้อมูลติดต่อ<small> </small></h3>
					<div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">เบอร์มือถือ</span>
								<input type="tel" name="tel" value="{{ $applicant->tel }}" style="width: 55%" maxlength="10">
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">เครือข่ายมือถือ</span>
								<input type="text" name="tel_carries" value="{{ $applicant->tel_carries }}" style="width: 40%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<span class="title">อีเมล</span>
								<input type="email" name="email" value="{{ $applicant->email }}" style="width: 80%">
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">ผู้ปกครอง</span>								
								<input type="text" name="parent" value="{{ $applicant->parent }}" style="width: 70%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">เกี่ยวข้องเป็น</span>								
								<input type="text" name="parent_relationship" value="{{ $applicant->parent_relationship }}" style="width: 50%">
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">เบอร์ผู้ปกครอง</span>								
								<input type="tel" name="parent_tel" value="{{ $applicant->parent_tel }}" style="width: 50%" maxlength="10">
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<!-- end contact -->
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-stethoscope"></i>สุขภาพ<small> ข้อมูลส่วนนี้สำคัญมากๆ นะคะ พี่ๆ จะได้ดูแลน้องๆ ได้เต็มที่เลย</small></h3>
					<div class="box-body">
					<div class="row"> <!-- medical -->
						<div class="col-md-6">
							<div class="field">
								<span class="title">สิ่งที่แพ้</span>
								<input type="text" name="allergic" value="{{ $applicant->allergic }}" style="width: 80%">
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">ไม่ทาน</span>
								<input type="text" name="not_eat" value="{{ $applicant->not_eat }}" style="width: 80%">
							</div>
						</div>
					</div>
					<div class="row"> <!-- medical -->
						<div class="col-md-6">
							<div class="field">
								<span class="title">แพ้ยา</span>								
								<input type="text" name="allergic_drug" value="{{ $applicant->allergic_drug }}" style="width: 83%">
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">แพ้อาหาร</span>
								<input type="text" name="allergic_food" value="{{ $applicant->allergic_food }}" style="width: 75%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">โรคประจำตัว</span>
								<input type="text" name="congenital_disease" value="{{ $applicant->congenital_disease }}" style="width: 85%">
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-history"></i>ค่ายที่เคยเข้าร่วม<small> น้องๆ เคยเข้าค่ายไหนมาบ้าง กรอกให้พี่ด้วยนะคะ</small></h3>
					<div class="box-body">
					<div class="row"> <!-- CAMP -->
						<div class="col-md-5">
							<div class="field">
								<span class="title">ค่ายที่ 1</span>
								<input type="text" name="past_camp_1" value="{{ $applicant->past_camp_1 }}" style="width: 75%">
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ที่</span>
								<input type="text" name="past_camp_place_1" value="{{ $applicant->past_camp_place_1 }}" style="width: 90%">
							</div>
						</div>
					</div>
					<div class="row"> <!-- CAMP -->
						<div class="col-md-5">
							<div class="field">
								<span class="title">ค่ายที่ 2</span>
								<input type="text" name="past_camp_2" value="{{ $applicant->past_camp_2 }}" style="width: 75%">
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ที่</span>
								<input type="text" name="past_camp_place_2" value="{{ $applicant->past_camp_place_2 }}" style="width: 90%">
							</div>
						</div>
					</div>
					<div class="row"> <!-- CAMP -->
						<div class="col-md-5">
							<div class="field">
								<span class="title">ค่ายที่ 3</span>
								<input type="text" name="past_camp_3" value="{{ $applicant->past_camp_3 }}" style="width: 75%">
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ที่</span>
								<input type="text" name="past_camp_place_3" value="{{ $applicant->past_camp_place_3 }}" style="width: 90%">
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-archive"></i>เอกสาร<small> คำถามของน้องๆ ที่ตอบเรียบร้อยแล้วสามารถส่งทางนี้ได้เลยค่ะ (ไฟล์ docx, doc, pdf เท่านั้นนะคะ)</small></h3>
					<div class="box-body">
						<div class="row">
							<div class="col-xs-8">
								<div class="field">
									<span class="title">เอกสาร</span>
									<span class="valus"><a href="{{ asset('uploads/documents/'.$applicant->document) }}" target="_blank">{{ $applicant->document }}</a></span>
								</div>
							</div>
						    <div class="col-xs-2">
						        <input type="file" name="document">
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-xs-offset-4">
					<div class="text-center">
						<a href="{{ route('backend.applicant.edit', $applicant->id) }}">
							<button type="submit" class="btn btn-block btn-success">บันทึกข้อมูล</button>
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
                	<div class="row">
					    <div class="col-xs-4 col-xs-offset-2">
					        <input type="file" name="image">
					    </div>
					</div>
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
                      		<b>ค่าย</b> <a class="pull-right" target="_blank">
							<select name="team" class="form-control" style="float: right; height: inherit;">
							<option @if ($applicant->team == "Robot") selected="selected" @endif>Robot</option>
							<option @if ($applicant->team == "Network") selected="selected" @endif>Network</option>
							</select>
                      		</a>
                    	</li>
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
</form>
@endsection
