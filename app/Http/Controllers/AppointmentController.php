<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;



class AppointmentController extends Controller
{
    // Store the appointment
    public function store(Request $request)
{
    $data = $request->validate([
        'doctor_id' => 'required|exists:doctors,id',
        'selectedDay' => 'required',
        'selectedTime' => 'required',
    ]);

    $appointment = new Appointment();
    $appointment->patient_id = auth()->guard('patient')->user()->id; // Assuming the patient ID is the user's ID
    $appointment->doctor_id = $data['doctor_id'];
    $appointment->selectedDay = $data['selectedDay'];
    $appointment->selectedTime = $data['selectedTime'];

    // Save the appointment
    $appointment->save();
}


    // Fetch appointments for the logged-in patient
    public function getAppointments()
    {
        $patientId = Auth::guard('patient')->user()->id;
        $appointments = Appointment::where('patient_id', $patientId)->get();
    
        return view('appointment', compact('appointments'));
    }
}


