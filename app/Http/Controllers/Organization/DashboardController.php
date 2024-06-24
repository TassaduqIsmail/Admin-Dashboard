<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Jobs\ImportCsv;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Bus;

class DashboardController extends Controller
{
    public function index()
    {
        return view('users.organization.dashboard');
    }
}
