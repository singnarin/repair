<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Users;
use App\Repairs;
use Session;

class SiteController extends Controller
{
  public function index(Request $request){
    if(!empty($request->get('endDate')) && !empty($request->get('beginDate'))){
      $status_1 = Repairs::where('status_id', '=', 1)
        ->wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
        ->orderBy('date', 'desc')
        ->count();
      $status_2 = Repairs::where('status_id', '=', 2)
        ->wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
        ->orderBy('date', 'desc')
        ->count();
      $status_3 = Repairs::where('status_id', '=', 3)
        ->wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
        ->orderBy('date', 'desc')
        ->count();
      $status_4 = Repairs::where('status_id', '=', 4)
        ->wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
        ->orderBy('date', 'desc')
        ->count();
        if($request->get('status') == 4){
          $repairs = Repairs::wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
            ->where('status_id', 4)
            ->orderBy('date', 'desc')
            ->paginate(8);
          }else if($request->get('status') == 3){
              $repairs = Repairs::wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
                ->where('status_id', 3)
                ->orderBy('date', 'desc')
                ->paginate(8);
          }else if($request->get('status') == 2){
              $repairs = Repairs::wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
                ->where('status_id', 2)
                ->orderBy('date', 'desc')
                ->paginate(8);
          }else if($request->get('status') == 1){
              $repairs = Repairs::wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
                ->where('status_id', 1)
                ->orderBy('date', 'desc')
                ->paginate(8);
          }else{
            $repairs = Repairs::wherebetween('date', [$request->get('beginDate'), $request->get('endDate')])
              ->orderBy('date', 'desc')
              ->paginate(8);
          }
      return  View('site.index')
        ->with('repairs', $repairs)
        ->with('status_1', $status_1)
        ->with('status_2', $status_2)
        ->with('status_3', $status_3)
        ->with('status_4', $status_4);
    }else{
      $status_1 = Repairs::where('status_id', '=', 1)->count();
      $status_2 = Repairs::where('status_id', '=', 2)->count();
      $status_3 = Repairs::where('status_id', '=', 3)->count();
      $status_4 = Repairs::where('status_id', '=', 4)->count();
      if($request->get('status') == 4){
        $repairs = Repairs::where('status_id', 4)
          ->orderBy('date', 'desc')
          ->paginate(8);
        }else if($request->get('status') == 3){
          $repairs = Repairs::where('status_id', 3)
            ->orderBy('date', 'desc')
            ->paginate(8);
        }else if($request->get('status') == 2){
          $repairs = Repairs::where('status_id', 2)
            ->orderBy('date', 'desc')
            ->paginate(8);
        }else if($request->get('status') == 1){
          $repairs = Repairs::where('status_id', 1)
            ->orderBy('date', 'desc')
            ->paginate(8);
        }else{
        $repairs = Repairs::orderBy('date', 'desc')->paginate(8);
      }
      return  View('site.index')
        ->with('repairs', $repairs)
        ->with('status_1', $status_1)
        ->with('status_2', $status_2)
        ->with('status_3', $status_3)
        ->with('status_4', $status_4);
    }
  }

  public   function loginForm(){
      return View('site.loginForm');
  }

  public function login(Request $request){
      $msg = array(
        'required' => ':attribute ต้องกรอก'
      );
      $rules = array(
        'username' => 'required',
        'password' => 'required'
      );
      $validator = Validator($request->all(), $rules, $msg);
      if ($validator->fails()){
        return View('site.loginForm')
          ->withErrors($validator);
      }else{
        $username = $request->get('username');
        $password = $request->get('password');
        $user = Users::where('username', '=', $username)
          ->where('password', '=', $password)
          ->get();
          if(!empty($user[0])){
            Session::put('user', $user);
            return Redirect('/');
          }else{
              $Error = array('ชื่อหรือรหัสผ่านไม่ถูกต้อง');
              return View('site.loginForm')
              ->withErrors($Error);
          }
      }
    }
    public function logout(){
      Session::forget('user');
      return Redirect('loginForm');
    }
}
