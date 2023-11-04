<!-- appointment.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Appointments</title>
</head>
<body>
@include('navbar')
@foreach($appointments as $appointment)
    <div class="appointment-card">
        <h2>Doctor Name: {{ $appointment->doctor_name }}</h2>
        <p>Specialization: {{ $appointment->specialization }}</p>
        <p>Day: {{ $appointment->selected_day }}</p>
        <p>Time: {{ $appointment->selected_time }}</p>
        <!-- Other appointment details -->
    </div>
@endforeach

</body>
</html>
