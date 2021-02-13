<?php

namespace App\Http\Controllers\AdminPanel;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegisterFormRequest;

class RegisterController extends Controller
{

    public function getViewRegister(){

         return view('AdminPanel.adminpanel', [
                'title' => 'Регистрация',
                'message' => 'Введите имя и пароль для регистрации в админ панели.',
                'loginRoute' => 'register-in-adminpanel',
                'enter' => 'Готово',
                'href' => 'Назад',
                'forgotPasswordRoute' => 'admin.password.request',]);

        }



    public function Datasend(RegisterFormRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        Admin::create($data);

        return redirect('form')->withInput();

//        return Redirect::route('showView-Login-in-AdminPanel')->withInput();
    }

}

