<?php

namespace App\Http\Controllers\AdminPanel;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{

    public function getViewRegister(){

        return view('admin.AdminPanel.adminPanelRegister');
    }


    public function sendDataRegister(Request $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        Admin::create($data);

        return Redirect::route('showView-login-In-AdminPanel');
    }

}

