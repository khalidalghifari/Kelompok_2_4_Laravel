<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProflController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kode = Auth::user()->Specialization;
        $spc = Specialization::where('id', $kode)->first();
        $specializations = Specialization::all();
        return view('doctor.profile.index', compact('user', 'specializations', 'spc'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = isset($request->name) ? $request->name : $user->name;
        $user->email = isset($request->email) ? $request->email : $user->email;
        $user->MobileNumber = isset($request->mobileNumber) ? $request->MobileNumber : $user->mobileNumber;
        $user->Specialization = isset($request->specialization) ? $request->specialization : $user->Specialization;
        $user->update();

        Alert::success('Berhasil', 'Profile Updated');
        return back();
    }

    public function show()
    {
        return view('doctor.change-password');
    }
}
