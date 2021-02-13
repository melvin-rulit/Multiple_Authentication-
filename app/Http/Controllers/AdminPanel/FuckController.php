<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FuckController extends Controller
{
    public function index(){
        return view('fuck');
    }
    public function gold(){
        return redirect('admin');
    }

    public function __construct()
    {
        $this->middleware('admin')->except('logout');

    }
}
