<?php $user = Session::get('user');?>
@extends('layouts.template')
<head>
<style>
  th {
    font-size: 12pX;
  }
  td {
    font-size: 12pX;
  }
</style>
</head>
@section('content')
<div class="container-fluid">
  <BR /><BR /><BR />
  <center><h3>รายการงานที่ได้รับแจ้ง</h3></center>
  <div class="row" align="right">
    <div class="form-group">
      {!! Form::open(array('url' => '/', 'method' => 'post','class' => 'form-inline')) !!}
      <span class="glyphicon glyphicon-calendar"></span>
      {!! Form::text('beginDate','',array('class' => 'date form-control')) !!}
      <script type="text/javascript">
          $('.date').datepicker({
             format: 'yyyy-mm-dd'
           });
      </script>
      <strong>TO</strong>
      {!! Form::text('endDate','',array('class' => 'date form-control')) !!}
      <script type="text/javascript">
          $('.date').datepicker({
             format: 'yyyy-mm-dd'
           });
      </script>
      {!! Form::submit('ค้นหา', array('class'=>'btn btn-success')) !!}
      {!! Form::close() !!}
    </div>
  </div>
  <div class="row">
    <a href="/?status=4&beginDate={{Request::get('beginDate')}}&endDate={{Request::get('endDate')}}">รอการตอบรับ : {{ $status_4 }}</a>
    <a href="/?status=1&beginDate={{Request::get('beginDate')}}&endDate={{Request::get('endDate')}}">อยู่ระหว่างดำเนินการ : {{ $status_1 }}</a>
    <a href="/?status=2&beginDate={{Request::get('beginDate')}}&endDate={{Request::get('endDate')}}">ดำเนินการเรียบร้อย : {{ $status_2 }}</a>
    <a href="/?status=3&beginDate={{Request::get('beginDate')}}&endDate={{Request::get('endDate')}}">ไม่สามารถแก้ไขได้ : {{ $status_3 }}</a>
  </div>
  <center>
  <div class="table-responsive">
    <table class="table table-bordered">
        <tr>
          <th><div align="center">วันที่ขอใช้บริการ</div></th>
          <th><div align="center">ชื่อ<br />ผู้แจ้ง</div></th>
          <th><div align="center">กลุ่มงาน</div></th>
          <th><div align="center">ประเภทของปัญหา</div></th>
          <th><div align="center">รายละเอียดของปัญหา</div></th>
          <th><div align="center">สถานะการซ่อม</div></th>
          <th><div align="center">วิธีแก้ไขปัญหา</div></th>
          <th><div align="center">ผู้ดำเนินการซ่อม</div></th>
          <th><div align="center">หมายเหตุ</div></th>
          @if(!empty($user[0] && $user[0]->permission == 0))
            <th><div align="center"><span class="glyphicon glyphicon-cog"></span></div></th>
          @endif
        </tr>
        @foreach($repairs as $repair)
        <tr>
          <td>{{ $repair->date }} {{ $repair->time }}</td>
          <td>{{ $repair->surname }} {{ $repair->lastname }}</td>
          <td>{{ $repair->department->departments_name }}</td>
          <td>{{ $repair->type->types_name }}</td>
          <td>{{ $repair->problem_detail }}</td>
          <td>{{ $repair->status->statuses_name }}</td>
          <td>{{ $repair->problem_fix }}</td>
          <td>{{ $repair->user_fix }}</td>
          <td>{{ $repair->comment }}</td>
          @if(!empty($user[0] && $user[0]->permission == 0))
            <td>{!! Html::link('form/'.$repair->id, '###') !!}</td>
          @endif
        </tr>
        @endforeach
    </table>
      {{ $repairs->appends('beginDate', Request::get('beginDate'))->appends('endDate', Request::get('endDate'))->appends('status', Request::get('status'))->links() }}
  </div>
  </center>
</div>
@stop
