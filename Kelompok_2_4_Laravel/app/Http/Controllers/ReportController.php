<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function appointment_bwdates(Request $request)
    {
        $fromdate = $request->fromdate;
        $todate = $request->todate;

        $appointments = Appointment::whereBetween('ApplyDate', [Carbon::parse($fromdate), Carbon::parse($todate)])
            ->where('Doctor', Auth::user()->id)
            ->get();

        return view('doctor.report.bw-dates', compact('fromdate', 'todate', 'appointments'));
    }

    public function index()
    {
        return view('doctor.report.index');
    }
}
