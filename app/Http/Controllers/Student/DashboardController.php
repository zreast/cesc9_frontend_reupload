<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;

use App\Applicant;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $statusCamp = "close"; // Use "close" to disable select any Camp

    public function index()
    {
        $user = Auth::user();
        $applicant = Applicant::where('facebook', $user->facebook)->first();
        $data = [
            'page_title'    => 'ใบสมัครค่าย',
            'page_subtitle' => 'ID #'.str_pad($applicant->id, 4, 0, STR_PAD_LEFT),
            'facebook'    =>    $user->facebook,
            'applicant'   =>    $applicant
        ];
        return view('student.dashboard', $data);
    }

    public function selectCampRobot()
    {
        if($this->statusCamp == "close") return $this->closeCamp();
        $user = Auth::user();

        Applicant::where('facebook', $user->facebook)
                ->where('team', '')
                ->update([
                    'team'  => 'Robot'
                ]);
        return redirect()->route('student.index');
    }

    public function selectCampNetwork()
    {
        if($this->statusCamp == "close") return $this->closeCamp();
        $user = Auth::user();

        Applicant::where('facebook', $user->facebook)
                ->where('team', '')
                ->update([
                    'team'  => 'Network'
                ]);
        return redirect()->route('student.index');
    }

    public function closeCamp()
    {
        $user = Auth::user();
        $applicant = Applicant::where('facebook', $user->facebook)->first();
        $data = [
            'page_title'    => 'ปิดรับสมัครค่ายแล้ว',
            'applicant'   =>    $applicant
        ];
        return view('student.close', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
