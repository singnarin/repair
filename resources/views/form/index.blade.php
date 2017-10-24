<?php $user = Session::get('user');?>
@extends('layouts.template')
@section('content')
<center><h4>แบบฟอร์มแจ้งซ่อม</h4></center>
{!! Form::model($repair, array('class'=>'form-horizontal')) !!}
<table class="table table=bordered table-general">
  <tr>
    <td>วันที่ : {{ date("d-m-Y") }}</td>
    <td></td>
  </tr>
  <tr>
    <td>
      {!! Form::label('surname', 'ชื่อ', array('class'=>'control-label')) !!}
      {!! Form::text('surname',$repair->surname,array('class' => 'form-control')) !!}
    </td>
    <td>
      {!! Form::label('lastname', 'นามสกุล', array('class'=>'control-label')) !!}
      {!! Form::text('lastname',$repair->lastname,array('class' => 'form-control')) !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('department', 'กลุ่มงาน', array('class'=>'control-label')) !!}
      {!! Form::select('departments_id',$department, null, array('class' => 'form-control')) !!}
    </td>
    <td>
      {!! Form::label('type', 'ประเภทของปัญหา', array('class'=>'control-label')) !!}
      {!! Form::select('type_id',$type, null, array('class' => 'form-control')) !!}
    </td>
  </tr>
  <tr>
    <td colspan="2">
      {!! Form::label('problem_detail', 'รายละเอียดของปัญหา', array('class'=>'control-label')) !!}
      {!! Form::textarea('problem_detail',$repair->problem_detail, array('class' => 'form-control')) !!}
      {!! Form::hidden('status', $repair->status, array('class' => 'form-control')) !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('status', 'สถานะการซ่อม', array('class'=>'control-label')) !!}
      {!! Form::select('status_id',$status, null, array('class' => 'form-control')) !!}
    </td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">
      {!! Form::label('problem_fix', 'วิธีการแก้ไขปัญหา', array('class'=>'control-label')) !!}
      {!! Form::textarea('problem_fix',$repair->problem_fix, array('class' => 'form-control')) !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('user_fix', 'ผู้ดำเนินการซ่อม', array('class'=>'control-label')) !!}
      {!! Form::text('user_fix',$repair->user_fix, array('class' => 'form-control')) !!}
    </td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">
      {!! Form::label('comment', 'หมายเหตุ', array('class'=>'control-label')) !!}
      {!! Form::text('comment',$repair->comment, array('class' => 'form-control')) !!}
    </td>
  </tr>
</table>

<div class="form-action" align="center">
  {!! Form::submit('บันทึกข้อมูล', array('class'=>'btn btn-success')) !!}
  {!! Html::link('general', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close( ) !!}
@stop
