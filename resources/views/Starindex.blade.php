<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">

  <title>CE Smart Camp 9</title>
  <!-- Behavioral Meta Data -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=latin,thai' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animations.css') }}" />
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
<!--   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fullPage.css') }}" /> -->
  
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nav.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/gallery.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/star.css') }}">
</head>
<body style="background-color: #0E0E10;">
  <nav id="cssmenu" class="navbar-fixed-top">
    <ul>
       <li class='active' id="home"><a href='#ct-home'><span>Home</span></a></li>
       <li id="network robot"><a href='#ct-nwrb'><span>Network & Robot</span></a></li>
       <li id="date"><a href='#ct-date'><span>กำหนดการ</span></a></li>
       <li id="contact"><a href='#ct-map'><span>แผนที่ & ติดต่อ</span></a></li>
       <li id="qa"><a href='#ct-qna'><span>คำถาม</span></a></li>
       <li id="gallery"><a href='#ct-gallery'><span>บรรยากาศ</span></a></li>
       <li id="sponsors"><a href='#ct-sponsors'><span>ผู้สนับสนุน</span></a></li>
       <li class='last'><a href="{{ route('student.auth') }}"><span>เข้าสู่ระบบ</span></a></li>
    </ul>
  </nav>
    <div class="star-wrapper">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
    </div>
    <div class="container full" id="ct-home">
      <div class="row"><br><br>
        <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
          <img class="img-responsive" src="{{ asset('assets/images/cesc_logo.png') }}" style="margin-top:5%;">
        </div>
        <div class="row">
          <div class="col-sm-2 col-md-2 col-xs-4 col-sm-offset-3 col-md-offset-3 col-xs-offset-2">
            <a href="#ct-nwrb" style="text-decoration:none;">
              <div class="boxed">สมัครค่าย</div>
            </a>
          </div>
          <div class="col-sm-2 col-md-2 col-xs-4 col-sm-offset-2 col-md-offset-2">
            <a href="{{ route('student.auth') }}" style="text-decoration:none;">
              <div class="boxed">เข้าสู่ระบบ</div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <h1>CE Smart Camp คืออะไร?</h1><br>
        <p style="text-indent: 50px;">
          ค่าย CE Smart Camp #9 จัดขึ้นในวันที่ 26-31 พฤษภาคม 2559 (พักค้างแรม) โดยรับน้องๆ ม.ปลายจำนวน 80 คนจากทั่วประเทศ ค่ายของเราจะมีเนื้อหาการเรียนแบ่งเป็นสาขา Robot จำนวน 40 คน และสาขา Network จำนวน 40 คน ซึ่งน้องๆ สามารถเลือกอบรมสาขาใดก็ได้ การอบรมเน้นทั้งทฤษฎี และปฏิบัติกับอุปกรณ์จริง
        </p>
      </div>
      <div class="row"> <!-- NW RB -->
        <h1 id="ct-nwrb">สาขาต่างๆ ในค่าย</h1>
                <div style="margin-bottom: 15px;">
                  <div class="col-sm-5 col-md-5 col-sm-offset-1 col-md-offset-1 col-xs-12">
                    <div class="nwrb-box">
                      <h1 style="text-align: center;" id="ct-network">Network</h1><br>
                      <p style="text-align: center;">
                        เข้าร่วมวิถีแห่งเจได เพื่อเรียนรู้ถึงระบบเครือข่ายที่เปรียบเสมือนกับพลังไหลเวียนอยู่รอบตัวเรา รวมไปถึงทฤษฎีพื้นฐาน และการทำงานของอุปกรณ์ในระบบเครือข่าย เหล่าเจไดฝึกหัดจะได้ทดลองกับชุดเครื่องมือที่ทันสมัยจาก Cisco โดยมีเหล่าเจไดรุ่นพี่ที่พร้อมจะชี้แนะและสอนแบบจัดเต็มทุกกระบวนท่า
                      </p>
                      <center><a href="{{ route('student.auth') }}"  style="text-decoration:none;"><div class="choose-side choose-network">เข้าร่วม Network</div></a></center>
                    </div>
                  </div>
                  <div class="col-sm-5 col-md-5 col-xs-12">
                    <div class="nwrb-box">
                      <h1 style="text-align: center;" id="ct-robot">Robot</h1><br>
                      <p style="text-align: center;">
                        เข้าร่วมวิถีแห่งด้านมืด มุ่งสู่หนทางแห่งความแข็งแกร่ง ฝึกฝนวิทยายุทธการออกแบบและเขียนโปรแกรมเพื่อควบคุมหุ่นยนต์ สัมผัสกลไกการทำงาน แนวคิดการแก้ไขปัญหาอย่างมีระบบ ด้วยหุ่นยนต์สุดล้ำอย่าง Lego Mindstorms พร้อมเปลี่ยนจากคนไม่มีพื้นฐานมาก่อนให้เป็นซิธผู้แก่กล้า now Join the Darkside !
                      </p>
                      <center><a href="{{ route('student.auth') }}"  style="text-decoration:none;"><div class="choose-side choose-robot">เข้าร่วม Robot</div></a></center>
                    </div>
                  </div>
                  <!-- <div class="col-sm-1 col-md-1"></div> -->
                </div>
      </div>
      <div class="row">
        <h1 id='ct-date'>กำหนดการ</h1><!-- Date -->
        เ<!-- ปิดรับสมัคร -> ปิดรับสมัคร -> ประกาศผล -> ยืนยันสิทธิ์ -> วันค่าย -->
      </div>
      <div class="row" >
<!--         Map and Contact -->
        <h1 id="ct-map">แผนที่ & ติดต่อ</h1><br>
        <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.9143353129946!2d100.77577330627584!3d13.728820484654909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x1deb4e950f2fbd07!2sComputer+Engineering+Dept.%2C+King+Mongkut&#39;s+Institute+of+Technology+Ladkrabang!5e0!3m2!1sen!2sth!4v1453837042891"  width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></center><br>
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-md-2 col-sm-offset-2 col-md-offset-2">
              <p>พี่กาย</p>
            </div>
            <div class="col-sm-8 col-md-8">
               <p>Tel: 089-473-9238, <a style="color: white;"href="https://www.facebook.com/guy.pongsanont" target="_blank">Facebook: Suttichai Pongsanont</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2 col-md-2  col-sm-offset-2 col-md-offset-2">
              <p>พี่มิลค์</p>
            </div>
            <div class="col-sm-8 col-md-8">
               <p>Tel: 088-235-3900, <a style="color: white;"href="https://www.facebook.com/Mildie.milk" target="_blank">Facebook: Milk Ditsathien</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2 col-md-2  col-sm-offset-2 col-md-offset-2">
              <p>ที่อยู่</p>
            </div>
            <div class="col-sm-8 col-md-8">
               <p>อาคารปฏิบัติการรวม คณะวิศวกรรมศาสตร์ 2 (ECC)<br>
               ภาควิชาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์<br>
               สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br>
               เลขที่ 1 ซอยฉลองกรุง 1 เขตลาดกระบัง กรุงเทพฯ 10520</p>
            </div>
          </div>
        </div>
<!--         End Map and Contact -->
      </div>
      <div class="row">
<!--         Q & A -->
        <h1 id="ct-qna" style="text-align: left;">คำถาม & ข้อสงสัย</h1><br>
        <p style="text-align: left;">
          Q: วัน เวลา สถานที่จัดค่าย ? <br>
          A: ระยะเวลาในการเข้าค่ายตั้งแต่วันที่ 27 พฤษภาคม - 1 มิถุนายน 2558
          เป็นค่ายพักค้างแรม<br>(ไม่อนุญาติให้เดินทางไป-กลับ)&nbsp;สถานที่ดำเนินกิจกรรมทั้งหมดจัดภายในคณะวิศวกรรมศาสตร์<br> สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง <br>
          <br>
          Q: ไม่มีบัตรประจำตัวประชาชน ต้องทำอย่างไร ? <br>
          A: ใช้บัตรนักเรียนก็ได้จ้า <br>
          <br>
          Q: หากเกรดเฉลี่ยเทอมล่าสุดยังไม่ออก ใช้เกรดเฉลี่ยเทอมไหน ? <br>
          A: เกรดเฉลี่ยของเทอมล่าสุดที่เกรดออกเลยค่ะ ^^ <br>
          <br>
          Q: หากกรอกผิด และกดยืนยันประวัติส่วนตัวไปแล้ว จะสามารถแก้ไขได้หรือเปล่า ? <br>
          A: ได้ค่ะ น้องๆ สามารถเข้าสู่ระบบบนเว็บไซต์ได้เลยจ้า <br>
        </p>
<!--         End Q & A -->
      </div>
      <div class="row">
<!--         Gallery -->
        <h1 id="ct-gallery">บรรยากาศภายในค่าย</h1><br>
          <div class="gallery-container">
            <div id="gallery-carousel">
              <figure><img src="{{ asset('assets/images/1.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
              <figure><img src="{{ asset('assets/images/2.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
              <figure><img src="{{ asset('assets/images/3.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
              <figure><img src="{{ asset('assets/images/4.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
              <figure><img src="{{ asset('assets/images/5.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
              <figure><img src="{{ asset('assets/images/6.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
              <figure><img src="{{ asset('assets/images/7.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
              <figure><img src="{{ asset('assets/images/8.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
              <figure><img src="{{ asset('assets/images/9.jpg') }}" alt="" style="width: 186px; height: 116px;"></figure>
            </div>
          </div>
      </div>
<!--         End Gallery -->
<!--         Sponsors -->
      <div class="row">
        <h1 id="ct-sponsors" style="padding-top: 15px;">ผู้สนับสนุน</h1><br>
<!--         End Sponsors -->
        <img class="img-responsive" src="{{ asset('assets/images/sponsor.png') }}" style="margin-bottom: 15px;">
      </div>
    </div>

  <script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
  <script src="{{ asset('assets/js/nav.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script>
      // var scene = document.getElementById('scene');
      // var parallax = new Parallax(scene);
      // $(document).ready(function(){
      //   $(window).scrollTop(67);
      // })
      // $(window).scroll(function(){
      //   if($(window).scrollTop() <= 67){
      //     $(window).scrollTop(67);
      //   }
      // });
      $(function() {
        $('ul>li>a[href*=#]:not([href=#])').click(function() {
          $("ul>li.active").removeClass("active");
          $(this).parent().addClass("active");
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }

          }
        });
      });
    </script>
</body>
</html>