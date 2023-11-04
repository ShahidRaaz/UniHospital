<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function showPatients()
    {
        $doctors = Patient::all();
        return view('patients', compact('patients'));
    }
}
