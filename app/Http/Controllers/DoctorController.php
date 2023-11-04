<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function showDoctors()
    {
        $doctors = Doctor::all();
        return view('doctors', compact('doctors'));
    }
}
