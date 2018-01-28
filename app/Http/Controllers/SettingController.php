<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function getSettingGeneral(){
        return view('admin.setting.general');
    }
}
