<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        $days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        for ($i = 1; $i <= 50; $i++) {
            $doctor = new Doctor;
            $doctor->name = 'Dr. '.chr(rand(65, 90)).chr(rand(97, 122)).' '.chr(rand(65, 90)).chr(rand(97, 122));
            $doctor->specialization = 'Specialization '.rand(1, 5);
            $doctor->timing = rand(8, 12) . ':00 AM - ' . rand(1, 5) . ':00 PM';
            $doctor->available_days = rand(1, 7);
            $doctor->days_available = $this->getConsecutiveDays($days, $doctor->available_days);
            $doctor->days_available = implode(',', $doctor->days_available); // Convert to string
            $doctor->image = 'https://example.com/doctor_'.$i.'.jpg';
            $doctor->save();
        }
    }

    private function getConsecutiveDays($days, $count)
    {
        $start = rand(0, count($days) - $count);
        $selectedDays = array_slice($days, $start, $count);
        return $selectedDays;
    }
}
