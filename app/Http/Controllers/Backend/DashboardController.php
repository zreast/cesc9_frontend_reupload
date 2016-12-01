<?php

namespace App\Http\Controllers\Backend;

use App\Applicant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	public function index()
	{
		$applicants 		= Applicant::get();
		$applicantsCount 	= $applicants->count();

		$applicantsStatus0 	= $applicants->where('status', 0)->count();
		$applicantsStatus1 	= $applicants->where('status', 1)->count();
		$applicantsStatus2 	= $applicants->where('status', 2)->count();
		$applicantsStatus3 	= $applicants->where('status', 3)->count();

		$applicantsRobot	= $applicants->where('team', "Robot")->count();
		$applicantsNetwork	= $applicants->where('team', "Network")->count();

		$fromDate 			= Carbon::now()->subDay()->startOfWeek()->timestamp; // or ->format(..)
		$tillDate 			= Carbon::now()->subDay()->timestamp;
		$applicatnsOfWeek 	= Applicant::whereBetween('created_at', [$fromDate, $tillDate])->count();


		$completeApplicants = Applicant::whereIn('status', [0, 1])->count();
		/*
		สถานะค่าย 

		0 = ผ่านค่าย
		1 = ไม่ผ่านค่าย
		2 = รอตรวจข้อสอบ
		3 = รอใบสมัคร
		*/
		$data = [
			'page_title'    	=> 'หน้าแรก',
			'page_subtitle' 	=> 'ภาพรวมทั้งหมด',
			'applicatnsOfWeek'	=> $applicatnsOfWeek,
			'completeApplicants'=> $completeApplicants,
			'applicantsCount'	=> $applicantsCount,
			'applicantsStatus0'	=> $applicantsStatus0,
			'applicantsStatus1'	=> $applicantsStatus1,
			'applicantsStatus2'	=> $applicantsStatus2,
			'applicantsStatus3'	=> $applicantsStatus3,
			'applicantsRobot'	=> $applicantsRobot,
			'applicantsNetwork'	=> $applicantsNetwork
		];

		return view('backend.dashboard', $data);

	}

}
