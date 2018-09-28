<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use UxWeb\SweetAlert\SweetAlert;




class UserController extends Controller
{
    
    public function showUserLogin(){
        return view('auth.login');
    }

    public function showUserRegister(){
        return view('auth.register');
    }

    public function handleUserRegister(Request $request){
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $userName = $request->user_name;
        $email = $request->email;
        $password = $request->password;

        $user =  User::create([
            'first_name' => $firstName,
            'last_name' =>$lastName,
            'user_name'=>$userName,
            'password'=> bcrypt($password),
            'email' =>$email,
        ]);
        Auth::login($user);
        return redirect(route('showUserDashboard'));
    }

    public function handleUserLogin(Request $request){
        

        $email = $request->email;
        $password = $request->password;

        $credentials = [
            'email' => $email,
            'password' => $password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            Auth::login($user);
        }
        SweetAlert::error('Oops', 'Vérifiez votre email et mot de passe !')->persistent('Fermer');
        return back();
    }

    public function showUserDashboard(){
        return view ('userDashboard.dashboard');
    }





}
