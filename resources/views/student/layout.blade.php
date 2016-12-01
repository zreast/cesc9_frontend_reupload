<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CESC#9 Student</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('assets/student/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('assets/student/adminlte/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/student/adminlte/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/student/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    @yield('header')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
    <script type="text/javascript">
      if (window.location.hash && window.location.hash == '#_=_') {
          window.location.hash = '';
      }
    </script>

  </head>

  <body class="skin-blue layout-top-nav">

    <div class="wrapper">

      @include('student.nav')

      <div class="content-wrapper">
        @if(isset($page_title))
        <section class="content-header">
          <h1>{{ $page_title or "" }} <small>{{ $page_subtitle or "" }}</small></h1>
          @yield('breadcrumbs')
        </section>
        @endif

        <section class="content">
          @yield('content')

            <div id="agreeTermsModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #357ca5 !important; border-color: #307095; color: #fff !important;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title">ข้อตกลงในการสมัครค่าย</h2>
                  </div>
                  <div class="modal-body">
                    <p class="lead" style="font-size: 15px">
                      <u>ขั้นตอนการสมัครค่าย</u>
                      <ol>
                        <li>เข้าสู่ระบบโดย Facebook, บัญชี Facebook นี้จะใช้ยืนยันตัวตนของน้องตลอดการสมัครค่าย</li>
                        <li>เลือกสาขาที่น้องๆ สนใจด้านล่างกล่องนี้ (เลือกได้เพียงครั้งเดียวนะคะ <em>หากต้องการแก้ไขต้องทำการแจ้งพี่ๆ ผ่าน <a href="https://www.facebook.com/cesmartcamp" target="_blank">Facebook </a>โดยด่วน</em>)</li>
                        <li>กรอกประวัติข้อมูลส่วนตัว<mark>ตามความจริง</mark> และตรวจสอบให้ถูกต้อง</li>
                        <li>Download ใบสมัครทั้ง 4 ไฟล์ในหน้า <a href="{{ route('student.document') }}">"คำถามค่ายและการส่งเอกสาร"</a></li>
                        <li>ตอบคำถาม และส่งเอกสารทางไปรษณีย์ ภายในวันที่ 28 มีนาคม พ.ศ. 2559 <em>(ยึดวันประทับตราไปรษณีย์เป็นหลัก)</em></li>
                        <li>ติดตามผลการคัดเลือกได้ทางหน้าเว็บไซต์ <a href="http://www.cesmartcamp.com" target="_blank">www.CESmartCamp.com</a></li>
                      </ol>
                      <u>หมายเหตุ</u>
                      <ol>
                        <li>ผลการคัดเลือกจากพี่ๆ ถือเป็นที่สิ้นสุด</li>
                        <li>ขอสงวนสิทธิ์ในการยกเลิก หรือเปลี่ยนแปลงผลการคัดเลือก หากตรวจพบข้อมูลของน้องไม่ตรงความจริง</li>
                        <li>พี่ๆ จะถือว่าน้องทุกคนได้อ่าน และเข้าใจข้อตกลงในการสมัครค่ายนี้เป็นอย่างดีแล้ว จึงได้ทำการเลือกสาขา</li>
                      </ol>
                  </div>
                  <div class="modal-footer" style="background-color: #e6e6e6 !important;">
                    <a href="{{ route('student.selectcamp.robot') }}">
                      <button type="submit" class="btn btn-danger pull-left">เลือกสาขา Robot</button>
                    </a>
                    <a href="{{ route('student.selectcamp.network') }}">
                      <button type="submit" class="btn btn-primary pull-right">เลือกสาขา Network</button>
                    </a>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            
            <div id="readTermsModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #357ca5 !important; border-color: #307095; color: #fff !important;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title">ข้อตกลงในการสมัครค่าย</h2>
                  </div>
                  <div class="modal-body">
                    <p class="lead" style="font-size: 15px">
                      <u>ขั้นตอนการสมัครค่าย</u>
                      <ol>
                        <li>เข้าสู่ระบบโดย Facebook, บัญชี Facebook นี้จะใช้ยืนยันตัวตนของน้องตลอดการสมัครค่าย</li>
                        <li>เลือกสาขาที่น้องๆ สนใจด้านล่างกล่องนี้ (เลือกได้เพียงครั้งเดียวนะคะ <em>หากต้องการแก้ไขต้องทำการแจ้งพี่ๆ ผ่าน <a href="https://www.facebook.com/cesmartcamp" target="_blank">Facebook </a>โดยด่วน</em>)</li>
                        <li>กรอกประวัติข้อมูลส่วนตัว<mark>ตามความจริง</mark> และตรวจสอบให้ถูกต้อง</li>
                        <li>Download ใบสมัครทั้ง 4 ไฟล์ในหน้า <a href="{{ route('student.document') }}">"คำถามค่ายและการส่งเอกสาร"</a></li>
                        <li>ตอบคำถาม และส่งเอกสารทางไปรษณีย์ ภายในวันที่ 28 มีนาคม พ.ศ. 2559 <em>(ยึดวันประทับตราไปรษณีย์เป็นหลัก)</em></li>
                        <li>ติดตามผลการคัดเลือกได้ทางหน้าเว็บไซต์ <a href="http://www.cesmartcamp.com" target="_blank">www.CESmartCamp.com</a></li>
                      </ol>
                      <u>หมายเหตุ</u>
                      <ol>
                        <li>ผลการคัดเลือกจากพี่ๆ ถือเป็นที่สิ้นสุด</li>
                        <li>ขอสงวนสิทธิ์ในการยกเลิก หรือเปลี่ยนแปลงผลการคัดเลือก หากตรวจพบข้อมูลของน้องไม่ตรงความจริง</li>
                        <li>พี่ๆ จะถือว่าน้องทุกคนได้อ่าน และเข้าใจข้อตกลงในการสมัครค่ายนี้เป็นอย่างดีแล้ว จึงได้ทำการเลือกสาขา</li>
                      </ol>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </section>
      </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs"><span class="text-muted">Product of <a href="https://mrnonz.com" target="_blank" style="border-bottom:dotted 1px #d0d6e2;">MrNonz</a> @KMITL</span></div>
        <strong><a href="https://mrnonz.com" target="_blank">CESC#9</a></strong> Student System
      </footer>

    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/student/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('assets/student/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/student/adminlte/js/app.min.js') }}" type="text/javascript"></script>
    @yield('footer')
  </body>
</html>
