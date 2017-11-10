<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repairs;
use App\Departments;
use App\Types;
use App\Statuses;
use Session;

class RepairController extends Controller
{
  public function form(Request $request, $id = null){
    if(empty($id)){
      $repair = new Repairs;
    }else{
      $repair = Repairs::find($id);
    }

    if($request->all()){
      $repair->date = date("Y-m-d");
      $repair->time = date("H:i:s");
      $repair->department_id = $request->get('departments_id');
      $repair->surname = $request->get('surname');
      $repair->lastname = $request->get('lastname');
      $repair->type_id = $request->get('type_id');
      $repair->problem_detail = $request->get('problem_detail');
      $repair->problem_fix = $request->get('problem_fix');
      $repair->user_fix = $request->get('user_fix');
      $repair->comment = $request->get('comment');
      if(empty($request->get('status_id'))){
        $repair->status_id = "4";
      }else{
        $repair->status_id = $request->get('status_id');
      }

      if($repair->save()){
        return Redirect('/');
      }
    }
      $department = Departments::pluck('departments_name','id');
      $type = Types::pluck('types_name','id');
      $status = Statuses::pluck('statuses_name','id');
      return  View('form.index')
        ->with('repair', $repair)
        ->with('type', $type)
        ->with('status', $status)
        ->with('department', $department);

  }
}
