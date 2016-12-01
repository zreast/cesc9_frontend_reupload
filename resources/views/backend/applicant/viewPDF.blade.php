<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>ใบสมัครค่าย CE Smart Camp #9</title>
</head>
<body>
	<div style="float:left">
		<span lang="TH" style='font-size:10.0pt;'>ใบสมัครเลขที่</span>
		<span style='font-size:10.0pt;'>:</span>
		<span style='font-size:10.0pt;'>#{{ str_pad($applicant->id, 4, 0, STR_PAD_LEFT) }}</span><br>
    <span lang="TH" style='font-size:10.0pt;'>ฝ่าย</span>
    <span style='font-size:10.0pt;'>:</span>
    <span style='font-size:10.0pt;'><b>{{ $applicant->team }}</b></span>
	</div>
	<div style="float:right; position: absolute; z-index: 10; right:0; top:0;">
		<img width="75px" height="113px" src="assets/images/blank_student.jpg">
	</div>

	<div style="position:absolute; z-index: 10; top:0;" align="center">
		<img width="100" height="100" src="assets/images/CELogo.png"></span>
		<br>
		<b><span style='font-size:20.0pt;'>CE Smart Camp 9</span></b>
		<br>
		<span style='font-size:12.0pt;'>--------------------------------------------------------------------</span>
	<br>
<!-- @if (strpos($applicant->pic,'http') !== false)
<img width=100 height=100 src="uploads/images/{{ $applicant->pic }}" alt=UserAvatar>
@else <img width=100 height=100 src="uploads/images/{{$applicant->pic}}" alt=UserAvatar>
@endif<span lang="TH" style='font-size:10.0pt;'> -->
<span lang="TH" style='font-size:10.0pt; z-index: 11; left:0;' align="left"><b>ประวัติส่วนตัว</b></span>
<br>

 <table align=center style="width:100%">
 <tr>
    <td><span style='font-size:10.0pt;'>ID : {{ str_pad($applicant->id, 4, 0, STR_PAD_LEFT) }}</span></td>
    <td><span style='font-size:10.0pt;'>ชื่อ-สกุล : {{ $applicant->prefix }}{{ $applicant->firstname }}  {{ $applicant->lastname }}</span></td>
	<td><span style='font-size:10.0pt;'>ชื่อเล่น : {{ $applicant->nickname }}</span></td>
    <td><span style='font-size:10.0pt;'>เพศ : @if ($applicant->gender == 0)
										ชาย
									@else
										หญิง
									@endif</span></td>
  </tr>
  <tr>
    <td colspan="2"><span style='font-size:10.0pt;'>อีเมล : {{ $applicant->email }}</span></td>
    <td colspan="2"><span style='font-size:10.0pt;'>รหัสประจำตัวประชาชน : {{ $applicant->getFormattedIdCard() }}</span></td>
  </tr>
  <tr>
    <td><span style='font-size:10.0pt;'>วันเกิด : {{ $applicant->getBirthday() }}</span></td>
    <td><span style='font-size:10.0pt;'>อายุ : {{ $applicant->getAge() }}</span></td>
    <td><span style='font-size:10.0pt;'>ศาสนา : {{ $applicant->religion }}</span></td>
	<td><span style='font-size:10.0pt;'>หมู่เลือด : {{ $applicant->blood }}</span></td>
  </tr>
  <tr>
    <td><span style='font-size:10.0pt;'>ที่อยู่ : {{ $applicant->address }}</span></td>
    <td><span style='font-size:10.0pt;'>จังหวัด : {{ $applicant->province }}</span></td>
    <td><span style='font-size:10.0pt;'>รหัสไปรษณีย์ : {{ $applicant->post_code }}</span></td>
  </tr>
  <tr>
    <td><span style='font-size:10.0pt;'>เบอร์บ้าน : {{ $applicant->getFormattedTelHome() }}</span></td>
    <td><span style='font-size:10.0pt;'>เบอร์ติดต่อ : {{ $applicant->getFormattedTel() }}</span></td>
    <td><span style='font-size:10.0pt;'>เครือข่าย : {{ $applicant->tel_carries }}</span></td>
  </tr>
  <tr>
    <td><span style='font-size:10.0pt;'>โรงเรียน : {{ $applicant->school }}</span></td>
    <td><span style='font-size:10.0pt;'>GPA : {{ $applicant->GPA }}</span></td>
    <td><span style='font-size:10.0pt;'>ระดับชั้น ม.{{ $applicant->class }}</span></td>
	<td><span style='font-size:10.0pt;'>สายการเรียน : {{ $applicant->department }}</span></td>
  </tr>
  <tr>
    <td><span style='font-size:10.0pt;'>รู้จักค่ายนี้จาก : {{ $applicant->ref_camp }}</span></td>
    <td><span style='font-size:10.0pt;'>สิ่งที่แพ้ : {{ $applicant->allergic }}</span></td>
	<td><span style='font-size:10.0pt;'>ไม่ทาน : {{ $applicant->not_eat }}</span></td>
	<td><span style='font-size:10.0pt;'>แพ้ยา : {{ $applicant->allergic_drug }}</span></td>
  </tr>
  <tr>
    <td colspan="2"><span style='font-size:10.0pt;'>แพ้อาหาร : {{ $applicant->allergic_food }}</span></td>
    <td colspan="2"><span style='font-size:10.0pt;'>โรคประจำตัว : {{ $applicant->congenital_disease }}</span></td>
  </tr>
  <tr>
  	<td colspan="4"><span style='font-size:10.0pt;'>ความสามารถพิเศษ : {{ $applicant->talent }}</span></td>
  </tr>
  <tr>
    <td><span style='font-size:10.0pt;'>ผู้ปกครอง : {{ $applicant->parent }}</span></td>
	<td></td>
    <td><span style='font-size:10.0pt;'>เกี่ยวข้องเป็น : {{ $applicant->parent_relationship }}</span></td>
	<td><span style='font-size:10.0pt;'>เบอร์ : {{ $applicant->getFormattedParentTel() }}</span></td>
  </tr>
</table>
<br/>
<span lang="TH" style='font-size:10.0pt; z-index: 11; left:0;' align="left"><b>ค่ายที่เคยเข้าร่วมมาก่อน</b></span>
<br>
<br>
<table align=center style="width:80%">
 <tr>
    <td colspan="2"><span style='font-size:10.0pt;'>ค่ายที่ 1 : {{ $applicant->past_camp_1 }}</span></td>
    <td colspan="2"><span style='font-size:10.0pt;'>จัดที่ : {{ $applicant->past_camp_place_1 }}</span></td>
  </tr>
  <tr>
    <td colspan="2"><span style='font-size:10.0pt;'>ค่ายที่ 2 : {{ $applicant->past_camp_2 }}</span></td>
    <td colspan="2"><span style='font-size:10.0pt;'>จัดที่ : {{ $applicant->past_camp_place_2 }}</span></td>
  </tr>
  <tr>
    <td colspan="2"><span style='font-size:10.0pt;'>ค่ายที่ 3 : {{ $applicant->past_camp_3 }}</span></td>
    <td colspan="2"><span style='font-size:10.0pt;'>จัดที่ : {{ $applicant->past_camp_place_3 }}</span></td>
  </tr>
 </table>
<!-- <span lang="TH" style='font-size:10.0pt; z-index: 11; left:0;' align="left"><b>เอกสาร</b></span><b><span
style='font-size:10.0pt;'> {{ $applicant->document }}</span></b> -->
<br>
ข้าพเจ้าขอรับรองว่าข้อมูลในใบสมัครและเอกสารประกอบการสมัครเป็นความจริงทุกประการ และข้าพเจ้าได้ขออนุญาตจากผู้ปกครองให้สามารถเข้าร่วมกิจกรรมได้ตลอดระยะเวลาการจัดค่าย<br><br>
ลงชื่อ......................................................ผู้สมัคร<br>
(............................................................)
<br>
</body>
</html>