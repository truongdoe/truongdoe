<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
  {
    return view('admin.dashboard');
  }
  public function login()
  {
    return view('admin.Login_admin');
  }
  public function pots_login(Request $req)
  {
    if (Auth::attempt($req->only('email', 'password'))) {
     return redirect()->route('admin');
    } else {
      echo "đăng nhập thất bại";
    }
  }
  public function logout_admin(){
    Auth::logout();
    return redirect()->route('admin');
  }
}
