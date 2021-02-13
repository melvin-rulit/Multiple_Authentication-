<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{

use AuthenticatesUsers;


    protected function guard()
    {
        return Auth::guard('admin');
    }


    public function Form(){

        return view('AdminPanel.adminpanel', [
            'title' => 'Админ панель',
            'loginRoute' => 'logininadminpanel',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
 }

    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }

    public function Datasend(Request $request)
    {

        if(Auth::guard('admin')->attempt($request->only('username','password'),$request->filled('remember'))){

            return redirect()
                ->intended(route('fuck'))
                ->with('status','Приветствую тебя ');
        }

        return $this->loginFailed();


    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('showView-Login-in-AdminPanel')
            ->with('status','Admin has been logged out!');
    }




}

