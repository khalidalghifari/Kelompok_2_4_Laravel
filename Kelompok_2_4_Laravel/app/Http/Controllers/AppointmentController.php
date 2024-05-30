<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Random\RandomError;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Specializations = Specialization::all();
        return view('landingpage', compact('Specializations'));
    }

    public function get_doctor(Request $request)
    {
        $id_special = $request->id_special;
        $doctors = User::where('Specialization', $id_special)->get();

        $opt = "<option value=''>Select Doctor</option>";
        foreach ($doctors as $doctor) {
            $opt .= "<option value='$doctor->id'>$doctor->name</option>";
        }

        echo $opt;
    }

    public function check()
    {
        $searchdata = "";
        return view('check-appointment', compact('searchdata'));
    }

    public function searchAppointment(Request $request)
    {
        $searchdata = $request->searchdata;

        $appointments = Appointment::where('AppointmentNumber', 'like', "$searchdata%")
            ->orWhere('Name', 'like', "$searchdata%")
            ->orWhere('MobileNumber', 'like', "$searchdata%")
            ->get();

        return view('check-appointment', compact('appointments', 'searchdata'));
    }

    public function newAppointment()
    {
        $appointments = Appointment::where('Status', NULL)->where('Doctor', Auth::user()->id)->get();
        return view('doctor.appointment.newAppointment.index', compact('appointments'));
    }

    public function cancelAppointment()
    {
        $appointments = Appointment::where('Status', 'Cancelled')->where('Doctor', Auth::user()->id)->get();
        return view('doctor.appointment.cancelAppointment.index', compact('appointments'));
    }

    public function aprvAppointment()
    {
        $appointments = Appointment::where('Status', 'Approved')->where('Doctor', Auth::user()->id)->get();
        return view('doctor.appointment.apprvAppointment.index', compact('appointments'));
    }

    public function allAppointment()
    {
        $appointments = Appointment::where('Doctor', Auth::user()->id)->get();
        return view('doctor.appointment.allAppointment.index', compact('appointments'));
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
        Appointment::create([
            'AppointmentNumber' => random_int(10000, 99999),
            'Name' => $request->Name,
            'Email' => $request->Email,
            'MobileNumber' => $request->MobileNumber,
            'AppointmentDate' => $request->AppointmentDate,
            'AppointmentTime' => $request->AppointmentTime,
            'Specialization' => $request->Specialization,
            'Doctor' => $request->Doctor,
            'Message' => $request->Message,
        ]);

        Alert::success('Berhasil', 'Your Appointment Request Has Been Send. We Will Contact You Soon');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $aptnum)
    {
        $appointment = Appointment::where('id', $id)->where('AppointmentNumber', $aptnum)->first();
        return view('doctor.appointment.appointmentdetail', compact('appointment'));
    }

    public function searchPage()
    {
        $searchdata = "";
        return view('doctor.search.index', compact('searchdata'));
    }

    public function searchResult(Request $request)
    {
        $searchdata = $request->searchdata;

        $appointments = Appointment::where('AppointmentNumber', 'like', "$searchdata%")
            ->orWhere('Name', 'like', "$searchdata%")
            ->orWhere('MobileNumber', 'like', "$searchdata%")
            ->get();

        return view('doctor.search.index', compact('appointments', 'searchdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        $appointment->Remark = $request->Remark;
        $appointment->Status = $request->Status;
        $appointment->update();

        Alert::success('Berhasil', 'Remark and status has been updated');
        return to_route('allAppointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
