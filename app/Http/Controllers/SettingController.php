<?php

namespace App\Http\Controllers;

use App\Enum\PageModeEnum;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('users.organization.setting');
    }
}
