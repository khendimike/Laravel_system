<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

   public function index() {
        $user = Auth::user();
        return view('login', compact(user));
   }
//    public function login(Request $request) {
       $request->validate([
           'email'=>'required|email',
           'password'=>'required'
       ]);

       $user = Users::where('email','=',$request->email)->first();

       if($user){
           if(Hash::check($request->password, $user->password)){
               $request->session()->put('loginId',$user->id);
               return redirect('home');
           }else {
               return back()->with('fail', "pasword does not match");
           }
       }else{
           return back()->with('fail', 'email not registered');
       }
//    }

    // function dashboard(){

    // }

}
