<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class SiteController extends Controller
{
  public function index(){
    return  View('site.index');
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
        $user = Users::where('id', '=', $username)
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
