<?php


namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
public function login(Request $request)
{
    $patient_id = $request->input('patient_id');
    $patient = Patient::where('patient_id', $patient_id)->first();

    if ($patient) {
        Auth::login($patient);
        return redirect()->to('/profile');
    } else {
        Session::flash('error', 'Invalid patient ID.'); // Store error message in the session
        return redirect()->back();
    }
}

}

