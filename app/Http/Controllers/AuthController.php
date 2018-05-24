<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;
use Mail;

class AuthController extends Controller
{
    public function __construct(){
      $this->middleware('auth');

    }
    public function updateinfo($email){
      $user = User::where('email', $email)->first();
      return view('auth.editProfile')->with('user', $user);
    }

    public function saveinfo(Request $request){

      $email = Auth::user()->email;
      $user = User::where('email', $email)->first();

      $user->fname = $request->input('fname');
      $user->lname = $request->input('lname');
      // $user->password = bcrypt($request->input('fname'));




      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . "." . $image->getClientOriginalExtension();
        $location = public_path('image/' . $filename);
        image::make($image)->resize(800, 400)->save($location);

        $user->image = $filename;
      }


      $user->save();
      return redirect('/home');
    }

    public function logout(){
      Auth::logout();
      return redirect('/');
    }
}
