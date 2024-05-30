<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $total_apt = Appointment::where('Status', NULL)->where('Doctor', Auth::user()->id)->count();
        $total_aprv = Appointment::where('Status', 'Approved')->where('Doctor', Auth::user()->id)->count();
        $total_cncl = Appointment::where('Status', 'Cancelled')->where('Doctor', Auth::user()->id)->count();
        $total_appoint = Appointment::where('Doctor', Auth::user()->id)->count();
        return view('doctor.dashboard', compact('total_apt', 'total_aprv', 'total_cncl', 'total_appoint'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
