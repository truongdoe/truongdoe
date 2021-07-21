<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home(User $user){
       
       
        return view('fe.pages.home',compact('user'));
    }

    public function regester()
    {
        return view('fe.Regester');
    }
    public function post_regester(Request $req)
    {
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        return redirect()->route('login');
    }

    public function login()
    {
        return view('fe.login');
    }
    public function post_login(Request $req)
    {
        // dd($req->all());
      if(Auth::attempt($req->only('email','password'))){
            echo "đăng nhập thành công";
            return redirect('/');
      }else{
            echo "đăng nhập thất bại";
      }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
      }
}
