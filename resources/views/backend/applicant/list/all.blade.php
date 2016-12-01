@extends('backend.applicant.list.layout')

@section('data')
@forelse($applicants as $applicant)
<tr>
	<td>{{ str_pad($applicant->id, 4, 0, STR_PAD_LEFT) }}</td>
	<td><a href="{{ route('backend.applicant.show', $applicant->id) }}">{{ $applicant->prefix.$applicant->firstname.'  '.$applicant->lastname }}</a></td>
	<td>{{ $applicant->school }}</td>
	<td>{{ $applicant->getFormattedTel() }}</td>
	<td>
		@if ($applicant->team == "Robot") <i class="fa fa-github-alt"></i>
		@else <i class="fa fa-sitemap"></i>
		@endif
		{{ $applicant->team }}
	</td>
	<td>{{ $applicant->congenital_disease.', '.$applicant->allergic_food }}</td>
	<td>
		<div class="btn-group">
			@if ($applicant->status == 0)
			<button type="button" class="btn btn-xs btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   		ผ่านค่าย <span class="caret"></span>
			</button>
			@elseif ($applicant->status == 1)
			<button type="button" class="btn btn-xs btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   		ไม่ผ่านค่าย <span class="caret"></span>
			</button>
			@elseif ($applicant->status == 2)
			<button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   		รอตรวจใบสมัคร <span class="caret"></span>
			</button>
			@else
			<button type="button" class="btn btn-xs btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
	</td>
</tr>
@empty
<tr>
	<td>ยังไม่มีใบสมัคร</td>
</tr>
@endforelse
@endsection
