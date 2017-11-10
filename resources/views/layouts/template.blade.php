<?php $user = Session::get('user');?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

  {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
  {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
  {!! Html::style('css/site.css') !!}
</head>
  <body>
    <div class="wrap">
      <nav id="w1" class="navbar-inverse navbar-fixed-top navbar bg-primary" role="navigation">
        <div class="container">
          <div class="navbar-header">
              <a class="navbar-brand" href="/"><i class="glyphicon glyphicon-hdd"></i> ระบบบริหารงาน ICT </a>
            </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav navbar-right nav">
                  <li class="active"><a href="./form"><i class="	glyphicon glyphicon-book"></i> เพิ่มงาน</a></li>
                  @if(!empty($user) && $user[0]->permition == 0)
                  <li class="active"><a href="./Report"><i class="glyphicon glyphicon-lock"></i> รายงาน</a></li>
                  <li class="active"><a href="./logout"><i class="glyphicon glyphicon-lock"></i> ออกจากระบบ</a></li>
                  @else
                  <li class="active"><a href="./loginForm"><i class="glyphicon glyphicon-lock"></i> เข้าสู่ระบบ</a></li>
                  @endif
                </ul>
              </div>
            </div>
          </nav>
          <div class="container-fluid">
              @yield('content')
          </div>
      </div>
      <footer class="footer">
        <div class="container">
          <span class="text-muted">สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29</span><br />
          <span class="text-muted">Copyright © 2017 Site designed,developed & mentinance by Singnarin</span>
        </div>
      </footer>
</body>
</html>
