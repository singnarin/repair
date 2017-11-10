@extends('layouts.template')
@section('content')
<center>
  <h3>เข้าสู่ระบบ</h3>
  {!! Form::open(array('url' => 'login', 'class' => 'form-horizontal')) !!}

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              {{ $error }}<br />
            @endforeach
          </div>
        @endif

        <div class="form-group">
          {!! Form::label('username', 'ชื่อผู้ใช้', array('class' => 'control-label','style'=>'text-align: left')) !!}
          {!! Form::text('username','',array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          {!! Form::label('password', 'รหัสผ่าน', array('class' => 'control-label')) !!}
          {!! Form::password('password',array('class' => 'form-control')) !!}
        </div>
        <div class="control-actions">
          {!! Form::submit('ตกลง', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
        </div>
      </div>
    </div>
  </div>
</center>
@stop
