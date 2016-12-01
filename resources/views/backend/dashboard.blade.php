@extends('backend.layout')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<div class="bs-wizard"> <!-- class of line [complete, active, disabled]  -->
					<div class="col-xs-2 bs-wizard-step complete">
						<div class="text-center bs-wizard-stepnum">ทดสอบเว็บ</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">2 กุมภาพันธ์ 2559</div>
					</div>
					<div class="col-xs-2 bs-wizard-step active">
						<div class="text-center bs-wizard-stepnum">เปิดรับสมัคร</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">27 กุมภาพันธ์ 2559</div>
					</div>
					<div class="col-xs-2 bs-wizard-step disabled">
						<div class="text-center bs-wizard-stepnum">อัพโหลดเอกสาร</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">30 มีนาคม 2559</div>
					</div>
					<div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">ตรวจใบสมัคร</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">6 เมษายน 2559</div>
					</div>
					<div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">ประกาศผลและยืนยันสิทธิ์</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">24 เมษายน 2559</div>
					</div>
					<div class="col-xs-2 bs-wizard-step disabled"><!-- active -->
						<div class="text-center bs-wizard-stepnum">วันค่าย</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">26 พฤษภาคม 2559</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-orange">
			<span class="info-box-icon"><i class="fa no-margin fa-users"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">รอใบสมัคร </span>
				<span class="info-box-number">{{ $applicantsStatus3 }} คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: {{ $applicantsCount == 0 ? 0 : ($applicantsStatus3*100)/$applicantsCount }}%"></div>
				</div>
				<span class="progress-description">
					จาก {{ $applicantsCount }} คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-teal">
			<span class="info-box-icon"><i class="fa no-margin fa-commenting"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">รอตรวจคำตอบ</span>
				<span class="info-box-number">{{ $applicantsStatus2 }} คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: {{ $applicantsCount == 0 ? 0 : ($applicantsStatus2*100)/$applicantsCount }}%"></div>
				</div>
				<span class="progress-description">
					จาก {{ $applicantsCount }} คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-purple">
			<span class="info-box-icon"><i class="fa no-margin fa-check-circle"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">ตรวจคำตอบแล้ว</span>
				<span class="info-box-number">{{ $completeApplicants }} คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: {{ ($applicantsCount-$applicantsStatus3) == 0 ? 0 : ($completeApplicants*100)/($applicantsCount-$applicantsStatus3) }}%"></div>
				</div>
				<span class="progress-description">
					จาก {{ $applicantsCount-$applicantsStatus3 }} คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-green">
			<span class="info-box-icon"><i class="fa no-margin fa-rocket"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">ผ่านการคัดเลือก</span>
				<span class="info-box-number">{{ $applicantsStatus0 }} คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: {{ ($applicantsCount-$applicantsStatus3) == 0 ? 0 : ($applicantsStatus0*100)/($applicantsCount-$applicantsStatus3) }}%"></div>
				</div>
				<span class="progress-description">
					จาก {{ $applicantsCount-$applicantsStatus3 }} คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
</div>
<div class="row">
	<div class="col-xs-5 col-xs-offset-1">
		<!-- DONUT CHART -->
	    <div class="box box-info">
	        <div class="box-header with-border">
	            <h3 class="box-title"><i class="fa fa-pie-chart"></i>สถานะ</h3>
	        <div class="box-tools pull-right">
	        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	    </div>
	    </div>
	    <div class="box-body">
	        <canvas id="pieChart" style="height:250px"></canvas>
	    </div><!-- /.box-body -->
	    </div><!-- /.box -->
    </div>
    <div class="col-xs-5">
		<!-- DONUT CHART -->
	    <div class="box box-info">
	        <div class="box-header with-border">
	            <h3 class="box-title"><i class="fa fa-users"></i>จำนวนผู้สมัคร</h3>
	        <div class="box-tools pull-right">
	        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	    </div>
	    </div>
	    <div class="box-body">
	        <canvas id="pieChartTeam" style="height:250px"></canvas>
	    </div><!-- /.box-body -->
	    </div><!-- /.box -->
    </div>
</div>
@endsection
@section('footer')
<script src="{{ asset('assets/backend/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">

        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: "{{ $applicantsStatus1 }}",
            color: "#d73925",
            highlight: "#d73925",
            label: "ไม่ผ่านค่าย"
          },
          {
            value: "{{ $applicantsStatus0 }}",
            color: "#00a65a",
            highlight: "#00a65a",
            label: "ผ่านค่าย"
          },
          {
            value: "{{ $applicantsStatus3 }}",
            color: "#f39c12",
            highlight: "#f39c12",
            label: "รอใบสมัคร"
          },
          {
            value: "{{ $applicantsStatus2 }}",
            color: "#00c0ef",
            highlight: "#00c0ef",
            label: "รอตรวจใบข้อสอบ"
          }
        ];
        var pieOptions = {
        	showScale: true,
          	//Boolean - Whether we should show a stroke on each segment
	        segmentShowStroke: true,
	        //String - The colour of each segment stroke
	        segmentStrokeColor: "#fff",
	        //Number - The width of each segment stroke
	        segmentStrokeWidth: 2,
	        //Number - The percentage of the chart that we cut out of the middle
	        percentageInnerCutout: 50, // This is 0 for Pie charts
	        //Number - Amount of animation steps
	        animationSteps: 100,
	        //String - Animation easing effect
	        animationEasing: "easeOutBounce",
	        //Boolean - Whether we animate the rotation of the Doughnut
	        animateRotate: true,
	        //Boolean - Whether we animate scaling the Doughnut from the centre
	        animateScale: false,
	        //Boolean - whether to make the chart responsive to window resizing
	        responsive: true,
	        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
	        maintainAspectRatio: true,

	    	tooltipTemplate: "<%= label%>: <%= value %>",

		    onAnimationComplete: function()
		    {
		        this.showTooltip(this.segments, true);	
		    },

		    tooltipEvents: [],

		    showTooltips: true
	    };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

        var pieChartCanvasTeam = $("#pieChartTeam").get(0).getContext("2d");
        var pieChartTeam = new Chart(pieChartCanvasTeam);
        var PieDataTeam = [
          {
            value: "{{ $applicantsRobot }}",
            color: "#d73925",
            highlight: "#d73925",
            label: "Robot"
          },
          {
            value: "{{ $applicantsNetwork }}",
            color: "#00c0ef",
            highlight: "#00c0ef",
            label: "Network"
          }
        ];
        pieChartTeam.Doughnut(PieDataTeam, pieOptions);
</script>
@endsection