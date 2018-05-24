<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Invite;
use App\File;
use Image;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
        // $this->check();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Auth::user()->email;


        $user = User::where('email', $email)->first();
        $alluser = User::where('id','!=',$user->id)->take(6)->inRandomOrder()->get();
        $invitecount = Invite::where('user_email', $email)->get()->count();

        $friends = DB::table('invites')
            ->join('files', 'files.user_email', '=', 'invites.invited_by')
            ->select('files.*', 'invites.*')
            ->where('invites.user_email','=',$email)->where('invites.status','=','1')
            ->get();



        return view('home')->with(['user'=> $user, 'allusers' => $alluser, 'invitecount' => $invitecount, 'friends' => $friends]);

    }
    public function seemore()
    {
        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();
        $alluser = User::where('id','!=',$user->id)->inRandomOrder()->get();
        $total = User::where('id','!=',$user->id)->get()->count();
        $invitecount = Invite::where('user_email', $email)->get()->count();

        return view('home')->with(['user'=> $user, 'allusers' => $alluser, 'invitecount' => $invitecount]);

    }

    public function invite($email){
      $uemail = Auth::user()->email;

      $check = Invite::where('user_email', $email)->where('invited_by', $uemail)->first();
      if (!$check) {
        $invite = new Invite;
        $invite->user_email = $email;
        $invite->invited_by  = Auth::user()->email;
        $invite->save();
      }


      $user = User::where('email', $uemail)->first();
      $invitecount = Invite::where('user_email', $uemail)->get()->count();


      $alluser = User::where('id','!=',$user->id)->where('email','!=',$email)->take(6)->inRandomOrder()->get();

      $friends = DB::table('invites')
          ->join('files', 'files.user_email', '=', 'invites.invited_by')
          ->select('files.*', 'invites.*')
          ->where('invites.user_email','=',$email)->where('invites.status','=','1')
          ->get();



      return view('home')->with(['user'=> $user, 'allusers' => $alluser, 'invitecount' => $invitecount, 'friends' => $friends]);



    }
    public function search(Request $request){
      $query = $request->input('search');

      if (!$query) {
        return redirect('/home');
      }

      $searchusers = User::where('fname', 'like', '%' .$query. '%')->orWhere('lname', 'like', '%' .$query. '%')->orWhere('email', 'like', '%' .$query. '%')->get();

      $email = Auth::user()->email;

      $invitecount = Invite::where('user_email', $email)->get()->count();

      $user = User::where('email', $email)->first();
      $alluser = User::where('id','!=',$user->id)->take(6)->inRandomOrder()->get();
      $files = File::where('user_email', $email)->get();


      return view('search.result')->with(['user'=> $user, 'allusers' => $alluser, 'searchusers'=> $searchusers, 'invitecount'=> $invitecount, 'files'=>$files]);



    }
    public function searchprofile($email){
      $user = User::where('email', $email)->first();
      $alluser = User::where('id','!=',$user->id)->take(6)->inRandomOrder()->get();
      $authemail = Auth::user()->email;
      $invitecount = Invite::where('user_email', $authemail)->get()->count();
      $files = File::where('user_email', $email)->get();


      return view('search.profile')->with(['user'=> $user, 'allusers' => $alluser, 'invitecount'=>$invitecount, 'files'=>$files]);
    }

    public function seeInvites(){
      $email = Auth::user()->email;
      $user = User::where('email', $email)->first();
      $invitecount = Invite::where('user_email', $email)->get()->count();


      $invites = Invite::where('user_email', $email)->get();


      if ($invitecount > 0) {

        return view('seeInvites')->with(['user' => $user, 'invites' => $invites, 'invitecount' =>$invitecount]);
      }
      $alluser = User::where('id','!=',$user->id)->take(6)->inRandomOrder()->get();
      return view('home')->with(['user' => $user, 'allusers'=>$alluser, 'invites' => $invites, 'invitecount' =>$invitecount]);



      }

      public function showUpload(){
        return view('uploadFiles');
      }

      public function uploadFiles(Request $request){

       foreach ($request->image as $image) {
         if ($request->hasFile('image')) {

           $filename = time() . "." . $image->getClientOriginalExtension();
           $location = public_path('image/' . $filename);
           image::make($image)->resize(800, 400)->save($location);

           $file = new File;
           $file->user_email = Auth::user()->email;
           $file->image = $filename;
           $file->save();

         }
       }
       return redirect('/myPhotos');

     }

     public function myPhotos(){

       $email = Auth::user()->email;
       $files = File::where('user_email', $email)->get();
       $user = User::where('email', $email)->first();
       $invitecount = Invite::where('user_email', $email)->get()->count();

       return view('myPhotos')->with(['files'=> $files, 'user'=>$user, 'invitecount'=>$invitecount]);
     }

     public function accept($email){
       $authemail = Auth::user()->email;
       $invite = Invite::where('invited_by', $email)->where('user_email', $authemail)->first();
       $invite->status = '1';
       $invite->save();

       return redirect()->back();
     }

     public function decline($email){
       $authemail = Auth::user()->email;
       $invite = Invite::where('invited_by', $email)->where('user_email', $authemail)->first();
       $invite->delete();
       $invite->save();

       return redirect()->back();
     }


}
