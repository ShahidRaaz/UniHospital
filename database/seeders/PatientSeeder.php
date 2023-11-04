<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 9; $i++) {
                $patient = new Patient;
                $patient->name = 'name'.$i.'';
                $patient->email_id = 'email@example'.$i.'.com';
                $patient->patient_id = '12345'.$i.'';
                $patient->mobile_no = '987654321'.$i.'';
                $patient->profile_image = 'https://example.com/profile'.$i.'.png';
                $patient->save();
        }
    }
}

