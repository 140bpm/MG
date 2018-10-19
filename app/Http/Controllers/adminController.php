<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\index;

class adminController extends Controller
{
    public function dashboard(){
    	return view('admin.dashboard.index');
    }

    public function settings(){
        return view('admin.settings.index');
    }
}
