<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Professor;

class UserAuthController extends Controller
{
    function r()
    {
        return view('registration');

    }
    function l()
    {
        return view('login');

    }
    function save(Request $request)
    {
        //validate request
        $request->validate([
            'email'=>'required|email|unique:professors',
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        //insert data into database
        $admin=new Professor;
        $admin->email=$request->email;
        $admin->username=$request->username;
        $admin->password=Hash::make($request->password);
        $save=$admin->save();

        if($save){
            return back()->with('success','New user has been successfuly added into database');
        }else{
            return back()->with('fail','Something went wrong,try again later');
        }

    }
    function check(Request $request){
        //Validate requests
        $request->validate([
             'username'=>'required',
             'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Professor::where('username','=', $request->username)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your username');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Professor::where('id','=', session('LoggedUser'))->first()];
        return view('dashboard', $data);
    }
} 
