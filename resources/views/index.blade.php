<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title>CE Smart Camp #9</title>
      <meta name="description" content="CE Smart Camp #9 | ค่ายพักค้างแรมสำหรับน้องๆ มัธยมที่หลงใหลในโลกของ Robot และ Network มาร่วมเป็นส่วนหนึ่งในการเดินทางสู่โลกที่แตกต่างไปกับเรา">
      <meta name="author" content="Zreast, MrNonz, Watanyou, Isara">

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}"/>

      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/bootstrap.min.css') }}">

      <!-- Slider -->
      <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" media="screen">
      <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" media="screen">

      <!-- Stylesheet -->
      <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/style.min.css') }}">
      <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/star.css') }}">
      <link rel="stylesheet" type="text/css"  href="{{ asset('assets/fonts/font.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
      <link rel='stylesheet prefetch' href="{{ asset('assets/css/font-awesome.min.css') }}">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
      <script src="{{ asset('assets/js/respond.min.js') }}"></script>
      <![endif]-->

      <!-- Modernizr -->
      <script src="{{ asset('assets/js/modernizr.js') }}"></script> 
</head>

<body>
   <div id="space">
    <div class="stars"></div>
    <div class="stars"></div>
  </div>

  <!-- Modal -->
  <div id="loginModal" class="modal fade modal-info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">วันเปิดรับสมัครค่าย</h2>
        </div>
        <div class="modal-body">
          <p><font size="5.2rem">เปิดรับสมัครในวันที่ 7 มีนาคม 2559 นะคะ ติดตามความเคลื่อนไหวได้ที่<br>
          <ul>
          <li><i class="fa fa-facebook-square"></i>
          <a href="https://www.facebook.com/cesmartcamp" target="_blank">Facebook Page</a></li>
          <li><i class="fa fa-twitter-square"></i>
          <a href="https://twitter.com/CESCKMITL" target="_blank">Twitter</a></li>
          <li><i class="fa fa-youtube-square"></i>
          <a href="https://www.youtube.com/channel/UCPsrGwMwXUFrZ20V_bkrv2Q" target="_blank">Youtube</a></li>
          <li><i class="fa fa-google-plus-square"></i>
          <a href="https://plus.google.com/b/103230249134805340301/103230249134805340301" target="_blank">Google+ Page</a></li>
          </ul>
          </font></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-right" data-dismiss="modal"><font size="4.5rem">ปิด</font></button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Navigation -->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container"> 
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#home" class="page-scroll">CE Smart Camp #9</a></li>
          <li><a href="#network-section" class="page-scroll">Network</a></li>
          <li><a href="#robot-section" class="page-scroll">Robot</a></li>
          <li><a href="#timeline-section" class="page-scroll">กำหนดการ</a></li>
          <li><a href="#contact-section" class="page-scroll">แผนที่&ติดต่อ</a></li>
          <li><a href="#ask-section" class="page-scroll">คำถาม</a></li>
          <li><a href="#gallery-section" class="page-scroll">บรรยากาศ</a></li>
          <li><a href="#sponsor-section" class="page-scroll">ผู้สนับสนุน</a></li>
          <li><a href="#" data-toggle="modal" data-target="#loginModal" class="page-scroll"><font color="#ffeb33">Log In</font></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hive"><br><br><br><br><br></div>
  <!-- Header -->
  <header class="text-center" name="home">
    <div class="intro-text">
      <div id="container" align="center">
        <div id="left"><a href="#network-section " class="page-scroll"><img data-src="{{ asset('assets/images/nwleft.png') }}" width="200px" height="250px" class="img-responsive" style="float: left; padding-top: 100px; margin-left: 100px;"></a></div>
        <div id="right"><a href="#robot-section" class="page-scroll"><img data-src="{{ asset('assets/images/rbright.png') }}" width="200px" height="250px" class="img-responsive" style="float: right; padding-top: 100px; margin-right: 90px;"></a></div>
        <div id="center">
          <img data-src="{{ asset('assets/images/logo.png') }}" width="400px" height="400px" class="img-responsive" style="float: center;">
        </div>
      </div>

      <a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">ส<font size="5rem">&nbsp</font>มั<font size="5rem">&nbsp</font>ค<font size="5rem">&nbsp</font>ร<font size="5rem">&nbsp</font>ค่<font size="5rem">&nbsp</font>า<font size="5rem">&nbsp</font>ย</a>
      <p>หรือ&nbsp<a href="#" data-toggle="modal" data-target="#loginModal" >เข้าสู่ระบบ&nbsp<i class="fa fa-sign-in"></i></a></p>
      <div id="buttonoverlay"><a href="#services-section" class="page-scroll"><font size="10rem" color="white"><i class="fa fa-angle-double-down"></i></font></a></div>
    </div>
  </header>


  <div id="services-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
        <h2><strong>CE Smart Camp คืออะไร ?</strong></h2>
        <hr>
        <div class="clearfix"></div>
        <p><font size="5.2rem">
        CE Smart Camp คือ ยานรบฝึกหัด สังกัดกองทัพอวกาศโลก ที่มีหน้าที่ในการฝึกขุนพลให้ชำนาญทางการรบอวกาศ แล้วนำขุนพลเหล่านั้นเข้ารับราชการทหาร เพื่อทำหน้าที่ในการต่อต้านผู้บุกรุกจักรวาล โดยมีหมายเรียกพลให้มาทำการรวมพลเพื่อเข้ารับการฝึก ในวันที่ 26 – 31 พฤษภาคม 2559 (พักค้างแรม) โดยขุนพลที่จะเรียกต่อไปนี้ จำต้องศึกษาอยู่ในระดับชั้นมัธยมศึกษาตอนปลาย ในยานรบนี้จะมีแผนกการรบ 2 แผนกให้เลือก<br>
        1.) สาขา ทำการรบด้วยเครื่องจักรกล (ROBOT) จำนวน 40 คน<br>
      2.) สาขา ทำการรบด้วยระบบเครือข่าย (NETWORK) จำนวน 40 คน<br>
        </font></p>
      </div>
    </div>
  </div>

  <div id="network-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
      <div style="margin-bottom: 15px;">
          <div class="col-sm-6 col-md-6 col-xs-12">
                        <p align="left"><img data-src="{{ asset('assets/images/nw.png') }}" width="370px" height="370px" class="img-responsive"></p>
          </div>
          <div class="nw-j-desk col-sm-6 col-md-6 col-xs-12">
              <h1 style="text-align: center;" id="ct-robot">Network</h1><br>
                        <p style="text-align: center;">
                        <font size="5.2rem">ร่วมเป็นส่วนหนึ่งแห่งก้าวที่ยิ่งใหญ่ เรียนรู้ระบบเครือข่าย<br>ที่เปรียบเสมือนกับพลังงานไหลเวียนอยู่รอบตัวเรา<br>
        รวมไปถึงทฤษฎีพื้นฐาน และการทำงานของอุปกรณ์<br>ฝึกหัดและทดลองกับชุดเครื่องมือที่ทันสมัยจาก Cisco</font>
        <br><br>
        <a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-nw btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms" style="
  width: 200px; padding: 0;"><font size="7rem">Join Now</font></a></p>
          </div>
          <div class="nw-j-res col-sm-6 col-md-6 col-xs-12">
              <h1 style="text-align: center;" id="ct-robot">Network</h1><br>
                        <p style="text-align: center;">
                        <font size="5.2rem">ร่วมเป็นส่วนหนึ่งแห่งก้าวที่ยิ่งใหญ่<br>เรียนรู้ระบบเครือข่ายที่เปรียบเสมือนกับ<br>พลังงานไหลเวียนอยู่รอบตัวเรา<br>
        รวมไปถึงทฤษฎีพื้นฐาน และการทำงานของอุปกรณ์ ฝึกหัดและทดลองกับชุดเครื่องมือที่ทันสมัยจาก Cisco</font>
        <br><br>
        <a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-nw btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms" style="
  width: 200px; padding: 0;"><font size="7rem">Join Now</font></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="robot-section" class="text-center">
    <div class="container">
    
      <div class="section-title wow fadeInDown">
        <div class="rb-res">
  <p align="center"><img data-src="{{ asset('assets/images/rb.png') }}" width="370px" height="370px" class="img-responsive"></p>
        </div>
      <div style="margin-bottom: 15px;">
          <div class="col-sm-6 col-md-6 col-xs-12">
              <h1 style="text-align: center;" id="ct-robot">Robot</h1><br>
                        <p style="text-align: center;">
                          <font size="5.2rem">เข้าร่วมฝั่งจักรกล เพื่อรักษาสมดุลแห่งธรรมชาติ<br>ด้วยการออกแบบและเขียนโปรแกรมภาษา C<br>ลงบนหุ่นยนต์ Lego Mindstorms<br>โดยมีพี่ๆ ที่พร้อมจะถ่ายทอดทุกวิทยายุทธแบบจัดเต็ม</font><br><br>
        <a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-rb btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms" style="
  width: 200px; padding: 0;"><font size="7rem">Join Now</font></a></p>
          </div>
                        <div class="rb-desk col-sm-6 col-md-6 col-xs-12">
                        <p align="right"><img data-src="{{ asset('assets/images/rb.png') }}" width="370px" height="370px" class="img-responsive"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="timeline-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
        <h2><strong>กำหนดการ</strong></h2>
        <hr>
        
        <section class="cd-horizontal-timeline" style="margin: 0px;">
          <div class="timeline">
            <div class="events-wrapper">
              <div class="events">
                <ol>
                  <li><a href="#0" data-date="07/03/2016" class="selected">7 มีนาคม</a></li>
                  <li><a href="#0" data-date="28/03/2016">28 มีนาคม</a></li>
                  <li><a href="#0" data-date="06/04/2016">6 เมษายน</a></li>
                  <li><a href="#0" data-date="24/04/2016">24 เมษายน</a></li>
                  <li><a href="#0" data-date="26/05/2016">26 พฤษภาคม</a></li>
                </ol>

                <span class="filling-line" aria-hidden="true"></span>
              </div> <!-- .events -->
            </div> <!-- .events-wrapper -->
              <ul class="cd-timeline-navigation">
                <li><a href="#0"class="prev inactive">Prev</a></li>
                <li><a href="#0"class="next">Next</a></li>
              </ul> <!-- .cd-timeline-navigation -->
          </div> <!-- .timeline -->
          <div class="events-content">
            <ol>
              <li class="selected" data-date="07/03/2016">
                <h2>เปิดรับสมัครผ่านเว็บไซต์</h2>
                <em>7 มีนาคม ถึง 28 มีนาคม 2559</em>
                <p> 
                  น้องๆ สามารถเลือกสาขาที่ต้องการเข้าร่วมและเข้าสู่ระบบผ่าน Facebook <br>เพื่อกรอกข้อมูลการสมัครค่ายได้ <br>
                </p>
              </li>

              <li data-date="28/03/2016">
                <h2>ปิดรับสมัครทางเว็บไซต์</h2>
                <em>28 มีนาคม 2559</em>
                <p> 
                  ระบบจะปิดรับสมัครทางเว็บไซต์เวลา 22.00 น.<br>
                  โดยน้องๆ ยังคงสามารถส่งเอกสารทางไปรษณีย์ได้ถึงวันที่ 30 มีนาคม 2559<br>
                  พี่ๆ จะยึดวันส่งเอกสารตามตราประทับไปรษณีย์
                </p>
              </li>

              <li data-date="06/04/2016">
                <h2>ตรวจใบสมัคร</h2>
                <em>6 เมษายน ถึง 24 เมษายน 2559</em>
                <p> 
                  พี่ๆ จะเริ่มทำการตรวจสอบและคัดเลือกใบสมัครทั้งฝ่าย Robot และ Network <br>
                </p>
              </li>

              <li data-date="24/04/2016">
                <h2>ประกาศผลและยืนยันสิทธิ์</h2>
                <em>24 เมษายน ถึง 29 เมษายน 2559</em>
                <p> 
                  น้องๆ สามารถเข้าสู่ระบบผ่านหน้าเว็บไซต์ เพื่อตรวจสอบผลการสมัครได้ทันที <br>หากน้องผ่านการคัดเลือกจะมีพี่ๆ แจ้งน้องผ่านทางโทรศัพท์ถึงเรื่องการยืนยันเข้าค่าย <br>
                </p>
              </li>

              <li data-date="29/04/2016">
                <h2>วันสุดท้ายการยืนยันสิทธิ์</h2>
                <em>29 เมษายน 2559</em>
                <p> 
                  โอนเงินค่าสมัครค่ายเพื่อยืนยันสิทธิ์ <br>รายละเอียดการโอนเงินจะแจ้งให้ทราบตอนประกาศผล<br>
                </p>
              </li>

              <li data-date="26/05/2016">
                <h2>วันค่าย</h2>
                <em>26 ถึง 31 พฤษภาคม 2559</em>
                <p> 
                  CE Smart Camp 9 ค่ายเดียวที่จะเปิดประสบการณ์แห่งความรู้ พัฒนาความสามารถ<br>และกิจกรรมสนุกๆ ที่รอคอยอยู่มากมาย แล้วพบกัน <br>
                </p>
              </li>
            </ol>
          </div> <!-- .events-content -->
        </section>
        </div>
      </div>
    </div>
  </div>
  <div id="contact-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
        <h2><strong>แผนที่ & ติดต่อ</strong></h2>
        <hr>
        <div class="clearfix">  
        <div class="mapoverlay" onClick="style.pointerEvents='none'"></div>
        <center><div style="padding:10px;background:#eeeeee;webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;width:80%;margin:0 auto;overflow:hidden;"><iframe data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.9143353129946!2d100.77577330627584!3d13.728820484654909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x1deb4e950f2fbd07!2sComputer+Engineering+Dept.%2C+King+Mongkut&#39;s+Institute+of+Technology+Ladkrabang!5e0!3m2!1sen!2sth!4v1453837042891"  width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></center></div></div>    
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-sm-3 col-md-3 col-sm-offset-1 col-md-offset-1 col-xs-12">
                <p><font size="5.2rem">พี่กาย</font></p>
              </div>
              <div class="col-sm-7 col-md-7 col-xs-12">
                <p align="left">
                <i class="fa fa-phone-square"></i>
                <font size="5.2rem">
 089-473-9238<br><a href="https://www.facebook.com/guy.pongsanont" target="_blank"><i class="fa fa-facebook-official"></i>
 Suttichai Pongsanont</a></font>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-md-3 col-sm-offset-1 col-md-offset-1 col-xs-12">
                <p><font size="5.2rem">พี่มิลค์</font></p>
              </div>
              <div class="col-sm-7 col-md-7 col-xs-12">
                 <p align="left"><i class="fa fa-phone-square"></i><font size="5.2rem"> 088-235-3900<br><a href="https://www.facebook.com/Mildie.milk" target="_blank"><i class="fa fa-facebook-official"></i>
 Milk Ditsathien</a></font></p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-md-3 col-sm-offset-1 col-md-offset-1 col-xs-12">
                <p><font size="5.2rem">ที่อยู่</font></p>
              </div>
              <div class="col-sm-7 col-md-7 col-xs-12">
                 <p align="left"><font size="5.2rem">อาคารปฏิบัติการรวม คณะวิศวกรรมศาสตร์ 2 (ECC)<br>
                 ภาควิชาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์<br>
                 สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br>
                 เลขที่ 1 ซอยฉลองกรุง 1 เขตลาดกระบัง กรุงเทพฯ 10520</font></p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-md-3 col-sm-offset-1 col-md-offset-1 col-xs-12">
                <p><font size="5.2rem">การเดินทาง</font></p>
              </div>
              <div class="col-sm-7 col-md-7 col-xs-12">
                <p align="left"><font size="5.2rem">
                <i class="fa fa-subway"></i>
 Airport Link : สถานีลาดกระบัง นั่งแท็กซี่ต่อมาประมาณ 60-70 บาท<br>
                <i class="fa fa-train"></i>
 รถไฟ : ลงสถานีพระจอมเกล้า (ไม่ใช่สถานีลาดกระบัง) ตึกจะอยู่ฝั่งตรงข้ามสถานีพอดี<br>
                <i class="fa fa-truck"></i>
รถตู้ : สายเดอะมอลล์บางกะปิ - พระจอมเกล้าลาดกระบัง<br>
                สายหมอชิต - อนุเสาวรีย์ชัยฯ - พระจอมเกล้าลาดกระบัง<br>
                สายซีคอนแสควร์ - พระจอมเกล้าลาดกระบัง<br>
                <i class="fa fa-car"></i>
รถยนต์ส่วนตัว : จากเส้นทางถนนศรีนครินทร์ที่แยกอ่อนนุช เข้าถนนอ่อนนุช (สุขุมวิท77) ระยะทางประมาณ 16 กม. แยกเข้าถนนฉลองกรุง<br>
หรือใช้เส้นทางด่วนพิเศษ กรุงเทพฯ–ชลบุรี (มอเตอร์เวย์) ออกจากมอเตอร์เวย์เข้าทางถนนร่มเกล้า ออกถนนอ่อนนุช แยกเข้าถนนฉลองกรุง ถ้ามาจากชลบุรี ออกมอเตอร์เวย์ที่ทางเข้าสนามบินสุวรรณภูมิ ทางเบี่ยงถนนคู่ขนานมอเตอร์เวย์ เข้าถนนฉลองกรุง<br>
                <i class="fa fa-bus"></i>
 รถเมล์โดยสารประจำทาง : สาย 1013 ต้นทางจากซอยสุขุมวิท 77 (อ่อนนุช) ปลายทางตลาดหัวตะเข้ ลงป้ายรถเมล์ตรงแยกสุขสมาน จะมีวินมอเตอร์ไซค์จอดอยู่<br>
                สาย 1013 (คันเล็ก) ต้นทางจากศูนย์การค้าพาราไดซ์ พาร์ค ปลายทางนิคมอุตสาหกรรมลาดกระบัง รถจะผ่านหน้าคณะวิศวกรรมศาสตร์พอดี<br>
                สาย 517 ต้นทางสวนจตุจักร ปลายทางสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง <br>
                <i class="fa fa-heart"></i>
 หรือรอพี่ๆ ไปรับตามจุดต่างๆ ในวันค่าย รายละเอียดจะแจ้งให้ทราบอีกครั้ง
 </font></p>
              </div>
            </div>
      </div>
    </div>
  </div>



  <div id="ask-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
        <h2><strong>คำถามที่พบบ่อย</strong></h2>
        <hr>
        <div class="col-sm-8 col-md-8 col-sm-offset-1 col-md-offset-1 col-xs-12">
            <p style="text-align: left;">
            <font size="5.2rem">
            Q: วัน เวลา สถานที่จัดค่าย ? <br>
            A: ระยะเวลาในการเข้าค่ายตั้งแต่วันที่ 26-31 พฤษภาคม 2559
            เป็นค่ายพักค้างแรม<br>(ไม่อนุญาตให้เดินทางไป-กลับ) สถานที่ดำเนินกิจกรรมทั้งหมดจัดภายในคณะวิศวกรรมศาสตร์ <br>สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง <br>
            <br>
            Q: หากเกรดเฉลี่ยเทอมล่าสุดยังไม่ออก ใช้เกรดเฉลี่ยเทอมไหน ? <br>
            A: สามารถใช้เกรดเฉลี่ยของเทอมล่าสุดที่เกรดออกแล้วแทนได้ <br>
            <br>
            Q: ค่าใช้จ่ายในการเข้าค่ายประมาณเท่าไหร่ ? <br>
            A: ค่ายนี้พี่ๆ ทำเพื่อน้องๆ เพราะฉะนั้น "ฟรี" !!! ทุกอย่างตลอดค่ายเลย <br>
            <br>
            Q: หากกรอกข้อมูลผิด และกดยืนยันประวัติส่วนตัวไปแล้ว จะสามารถแก้ไขได้หรือเปล่า ? <br>
            A: แก้ไขได้ <a href="#" data-toggle="modal" data-target="#loginModal" target="_blank">โดยเข้าสู่ระบบบนเว็บไซต์</a> <br>
            <br>
            Q: ถ้าหากเลือกสาขาที่จะสมัครผิดพลาด สามารถแก้ไขได้หรือเปล่า ? <br>
            A: น้องๆ ไม่สามารถแก้ไขด้วยตัวเองได้ ต้องติดต่อผ่านพี่ๆ เท่านั้น <a href="#contact-section" class="page-scroll">ข้อมูลติดต่อ</a>
            </font>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Gallery Section -->
  <div id="gallery-section" class="text-center">
    <div class="container"> <!-- Container -->
      <div class="section-title wow fadeInDown">
        <h2><strong>บรรยากาศภายในค่าย</strong></h2>
        <hr>
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type" style="padding-left: 0px;">
              <li style="margin-left: 0px;"><a href="#" data-filter="*" class="active">ทั้งหมด</a></li>
              <li><a href="#" data-filter=".web">Robot</a></li>
              <li><a href="#" data-filter=".app">Network</a></li>
              <li><a href="#" data-filter=".branding">กิจกรรม</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <div class="row">
        <div class="portfolio-items">
          <div class="col-sm-6 col-md-3 col-lg-3 web">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="200ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Robot</h4>
                  Lego Mindstroms
                  <div class="clearfix"></div>
                  <i class="fa fa-android"></i>
                </div>
                <img data-src="{{ asset('assets/images/01.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title">
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 branding">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="400ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>กิจกรรม</h4>
                  พิธีเปิดค่าย
                  <div class="clearfix"></div>
                  <i class="fa fa-star"></i> </div>
                <img data-src="{{ asset('assets/images/02.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 web">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="600ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Robot</h4>
                  ภาคปฏิบัติ
                  <div class="clearfix"></div>
                  <i class="fa fa-android"></i> </div>
                <img data-src="{{ asset('assets/images/03.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 web">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="800ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Robot</h4>
                  ภาคปฏิบัติ
                  <div class="clearfix"></div>
                  <i class="fa fa-android"></i> </div>
                <img data-src="{{ asset('assets/images/04.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 app">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1000ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Network</h4>
                  ภาคทฤษฎี
                  <div class="clearfix"></div>
                  <i class="fa fa-wifi"></i> </div>
                <img data-src="{{ asset('assets/images/05.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 branding">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1200ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>กิจกรรม</h4>
                  พิธีเปิดค่าย
                  <div class="clearfix"></div>
                  <i class="fa fa-star"></i> </div>
                <img data-src="{{ asset('assets/images/06.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 branding">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1400ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>กิจกรรม</h4>
                  สันทนาการ
                  <div class="clearfix"></div>
                  <i class="fa fa-star"></i> </div>
                <img data-src="{{ asset('assets/images/07.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 app">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1600ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Network</h4>
                  ภาคปฏิบัติ
                  <div class="clearfix"></div>
                  <i class="fa fa-wifi"></i> </div>
                <img data-src="{{ asset('assets/images/08.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 branding">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1800ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>กิจกรรม</h4>
                  สันทนาการ
                  <div class="clearfix"></div>
                  <i class="fa fa-star"></i> </div>
                <img data-src="{{ asset('assets/images/09.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 web">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="2000ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Robot</h4>
                  ภาคทฤษฎี
                  <div class="clearfix"></div>
                  <i class="fa fa-android"></i> </div>
                <img data-src="{{ asset('assets/images/10.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 app">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="2200ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Network</h4>
                  ภาคปฏิบัติ
                  <div class="clearfix"></div>
                  <i class="fa fa-wifi"></i> </div>
                <img data-src="{{ asset('assets/images/11.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 branding">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="2400ms">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>กิจกรรม</h4>
                  กิจกรรมนอกสถานที่
                  <div class="clearfix"></div>
                  <i class="fa fa-star"></i> </div>
                <img data-src="{{ asset('assets/images/12.jpg') }}"  width="400px" height="400px" class="img-responsive" alt="Project Title"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div id="sponsor-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
        <h2><strong>ผู้สนับสนุน</strong></h2>
        <hr>
        <div class="clearfix"></div>      
        <img data-src="{{ asset('assets/images/sponsor.png') }}" width="1600px" height="400px" class="img-responsive">
      </div>
    </div>
  </div>

  <div id="footer">
    <div class="container">
      <p align="center">
      <br>ติดตามข่าวสารเพิ่มเติม<br>
                        <a href="https://www.facebook.com/cesmartcamp" target="_blank" class="fa fa-facebook-square tooltipped" title="Facebook"></a>&nbsp&nbsp
                        <a href="https://twitter.com/CESCKMITL" target="_blank" class="fa fa-twitter-square tooltipped" title="Twitter"></a>
                        <!-- &nbsp&nbsp
                        <a href="https://www.instagram.com/cesmartcamp9" target="_blank" class="fa fa-instagram tooltipped" title="Instagram"></a>-->&nbsp
                        <a href="https://www.youtube.com/channel/UCPsrGwMwXUFrZ20V_bkrv2Q" target="_blank" class="fa fa-youtube-square tooltipped" title="Youtube"></a>&nbsp&nbsp
                        <a href="https://plus.google.com/b/103230249134805340301/103230249134805340301" target="_blank" class="fa fa-google-plus-square tooltipped" title="Google+"></a> <br><br>
        <font size="3px"><i class="fa fa-copyright"></i></font>
        CE Smart Camp 2016 | All Rights Reserved. | Computer Engineering, King Mongkut's Institute of Technology Ladkrabang.<br>
        Designed and developed By Zreast, MrNonz, Watanyou, Isara #CE53
      </p>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script type="text/javascript" src="{{ asset('assets/js/jquery-2.2.0.min.js') }}"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.mobile.custom.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.lazyloadxt.extra.min.js') }}"></script>
  </body>
</html>