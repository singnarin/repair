<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
  {!! Html::script('js/jquery.min.js') !!}
  {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
  {!! Html::style('css/site.css') !!}
</head>
  <body>
    <div class="wrap">
      <nav id="w1" class="navbar-inverse navbar-fixed-top navbar bg-primary" role="navigation">
        <div class="container">
          <div class="navbar-header">
              <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-hdd"></i> ระบบแจ้งซ่อมอุปกรณ์ ICT ออนไลน์ </a>
            </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav navbar-right nav">
                  <li class="active"><a href="./form"><i class="	glyphicon glyphicon-book"></i> กรอกแบบฟอร์มการแจ้งซ่อม</a></li>
                  <li class="active"><a href="#"><i class="glyphicon glyphicon-lock"></i> สำหรับผู้ดูแลระบบ</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container">
            <div class="row" style="margin-top:30px">
              @yield('content')
            </div>
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
