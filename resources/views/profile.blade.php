<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    @include('navbar')
    <h1>Patient Details</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email_id }}</p>
    <p><strong>Patient ID:</strong> {{ $user->patient_id }}</p>
    <p><strong>Mobile Number:</strong> {{ $user->mobile_no }}</p>
    <img src="{{ $user->profile_image }}" alt="Profile image">
</body>

</html>
