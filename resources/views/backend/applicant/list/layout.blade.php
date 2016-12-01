@extends('backend.layout')

@section('header')
	<!-- DataTables -->
    <link href="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">ใบสมัครค่าย</h3>
            </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tableall" class="table table-bordered table-striped">
                    <thead>
                    	<tr>
                    		<th>ID</th>
	                        <th>ชื่อ-สกุล</th>
	                        <th>โรงเรียน</th>
	                        <th>เบอร์โทรศัพท์</th>
                            <th>ฝ่าย</th>
	                        <th>หมายเหตุ</th>
	                        <th>สถานะ</th>
                    	</tr>
                    </thead>
                    <tbody>
                   		@yield('data')
                    </tbody>
                    <tfoot>
                    	<tr>
                    		<th>ID</th>
	                        <th>ชื่อ-สกุล</th>
	                        <th>โรงเรียน</th>
	                        <th>เบอร์โทรศัพท์</th>
                            <th>ฝ่าย</th>
	                        <th>หมายเหตุ</th>
	                        <th>สถานะ</th>
                    	</tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
	</div>
</div>
@endsection

@section('footer')
    <!-- DataTables -->
    <script src="{{ asset('assets/backend/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>

    <script>
      $(function () {
        $("#tableall").DataTable();
      });
    </script>
@endsection
