<?php

namespace App\Http\Controllers\Backend;

use App;
use PDF;
use Input;
use Imageupload;
use Carbon\Carbon;
use App\Applicant;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'page_title'    =>  'จัดการใบสมัคร',
            'page_subtitle' =>  'ใบสมัครทั้งหมด',
            'applicants'    =>  Applicant::get()
        ];

        return view('backend.applicant.list.all', $data);
    }

    public function getApplicantsetStatus($id, $status)
    {
        Applicant::where('id', $id)->update(['status' => $status]);
        return back();
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
        $applicant = Applicant::findOrFail($id);
        $data = [
            'page_title'    => 'รายละเอียดใบสมัคร',
            'page_subtitle' => 'ID #'.str_pad($applicant->id, 4, 0, STR_PAD_LEFT),
            'applicant'     => $applicant
        ];
        return view('backend.applicant.show', $data);
    }

    public function getApplicantPDF($id)
    {
        $applicant = Applicant::findOrFail($id);
        $data = [
            'page_title'    => 'รายละเอียดใบสมัคร',
            'page_subtitle' => 'ID #'.str_pad($applicant->id, 4, 0, STR_PAD_LEFT),
            'applicant'     => $applicant
        ];
        //return View('backend.applicant.viewPDF', $data);

        $html = View('backend.applicant.viewPDF', $data)->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($html)->setPaper('a4');
        return $pdf->stream();
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

    public function getApplicantEdit($id)
    {
        $applicant = Applicant::findOrFail($id);
        $data = [
            'page_title'    => 'แก้ไขใบสมัคร',
            'page_subtitle' => 'ID #'.str_pad($applicant->id, 4, 0, STR_PAD_LEFT),
            'applicant'     => $applicant
        ];
        return view('backend.applicant.edit', $data);
    }

    public function postApplicantEdit(Request $request, $id)
    {
        $rules = array(
            'image'     =>  'mimes:jpeg,png,bmp,gif,svg',
            'email'     =>  'email',
            'id_card'   =>  'numeric',
            'document'  =>  'mimes:docx,doc,pdf|max:15000'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return $this->getApplicantEdit($id)->withErrors($validator);
        }

        if ($request->gender == "ชาย") {
            $gender = 0;
        } else {
            $gender = 1;
        }

        if ($request->hasFile('image')) {
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = $id.'-'.md5($id . microtime()).'.'.$extension;
            $request->file('image')->move('uploads/images', $fileName);
            Applicant::where('id', $id)
                        ->update([
                            'pic'               =>  $fileName
                        ]);
        }

        if ($request->hasFile('document')) {
            $extension = Input::file('document')->getClientOriginalExtension();
            $fileName = $id.'-'.md5($id . microtime()).'.'.$extension;
            $request->file('document')->move('uploads/documents', $fileName);
            Applicant::where('id', $id)
                        ->update([
                            'document'               =>  $fileName
                        ]);
        }

        Applicant::where('id', $id)
                    ->update([
                        'team'                  =>  $request->team,
                        'prefix'                =>  $request->prefix,
                        'firstname'             =>  $request->firstname,
                        'lastname'              =>  $request->lastname,
                        'nickname'              =>  $request->nickname,
                        'gender'                =>  $gender,
                        'email'                 =>  $request->email,
                        'id_card'               =>  $request->id_card,
                        'birthday'              =>  $request->birthday,
                        'religion'              =>  $request->religion,
                        'blood'                 =>  $request->blood,
                        'address'               =>  $request->address,
                        'province'              =>  $request->province,
                        'post_code'             =>  $request->post_code,
                        'tel_home'              =>  $request->tel_home,
                        'tel'                   =>  $request->tel,
                        'tel_carries'           =>  $request->tel_carries,
                        'school'                =>  $request->school,
                        'GPA'                   =>  $request->GPA,
                        'class'                 =>  $request->class,
                        'department'            =>  $request->department,
                        'ref_camp'              =>  $request->ref_camp,
                        'allergic'              =>  $request->allergic,
                        'not_eat'               =>  $request->not_eat,
                        'allergic_drug'         =>  $request->allergic_drug,
                        'allergic_food'         =>  $request->allergic_food,
                        'congenital_disease'    =>  $request->congenital_disease,
                        'talent'                =>  $request->talent,
                        'parent'                =>  $request->parent,
                        'parent_relationship'   =>  $request->parent_relationship,
                        'parent_tel'            =>  $request->parent_tel,
                        'past_camp_1'           =>  $request->past_camp_1,
                        'past_camp_place_1'     =>  $request->past_camp_place_1,
                        'past_camp_2'           =>  $request->past_camp_2,
                        'past_camp_place_2'     =>  $request->past_camp_place_2,
                        'past_camp_3'           =>  $request->past_camp_3,
                        'past_camp_place_3'     =>  $request->past_camp_place_3
                    ]);

        return redirect()->away(route('backend.applicant.show', $id));
    }
}
