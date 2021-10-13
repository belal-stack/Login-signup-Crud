<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateFormRequest;
use App\Http\Requests\UserUpdatePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function viewProfile(){

        $user= User::find(auth()->id());
        return view('user.viewProfile')->with('user',$user);
    }

    public function profile(){

        $user= User::find(auth()->id());
      //  dd($user);

        return view('user.profile')->with('user',$user);
    }

    public function updateProfile(UserUpdateFormRequest $request){

        $user= User::find(auth()->id());
        if ($user){
        $user->update([
            'name'=> $request->name,
        ]);
        }
        return back()->with('message','profile updated successfully');
    }

    public function changePassword(){
        return view('user.changePassword');
    }

    public function updatePassword(UserUpdatePasswordRequest $request){

        $user= User::find(auth()->id());
        if ($user){
            $user->update([
                'password' => Hash::make($request['password']),
            ]);
        }
        return back()->with('message','password updated successfully');
    }
}
