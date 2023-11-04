<!DOCTYPE html>
<html>
<head>
    <title>Doctor Page</title>
    <style>
        /* CSS styles */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .doctor-card {
            width: 200px;
            border: 1px solid orange;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            word-wrap: break-word;
            position: relative;
        }

        #search { 
            display: block;
            margin: 0 auto;
            width: 500px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .doctor-card button {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .doctor-card button:hover {
            opacity: 0.8;
        }
        /* Add this CSS to style the select dropdown */
.doctor-card select {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 5px;
    margin-top:5px;
    appearance: none;
    background: #fff;
}

/* Style the select dropdown arrow */
.doctor-card select::-ms-expand {
    display: none;
}

.doctor-card select option {
    font-weight: normal;
}

/* Hover effect for the select dropdown */
.doctor-card select:hover {
    border-color: #999;
}

/* Focus effect for the select dropdown */
.doctor-card select:focus {
    border-color: #999;
}

/* Active effect for the select dropdown */
.doctor-card select:active {
    border-color: #999;
}
/* Style for the select dropdown options */
.doctor-card select option {
    padding: 12px;
    background: #fff;
    color: #000;
}

/* Hover effect for the select dropdown options */
.doctor-card select option:hover {
    background: #e9e9e9;
}

/* Selected option style for the select dropdown */
.doctor-card select option:checked {
    background: #007BFF;
    color: #fff;
}


    </style>
</head>
<body>
    @include('navbar')
    <input type="text" id="search" onkeyup="searchDoctors()" placeholder="Search doctors by name or specialization...">
    <div class="container" id="doctor-container">
    @foreach($doctors as $doctor)
    <div class="doctor-card">
        <img src="{{$doctor->image}}" alt="no image">
        <h2>{{ $doctor->name }}</h2>
        <p>{{ $doctor->specialization }}</p>
        <!-- Other doctor details -->

        <form class="appointment-form" action="{{ route('appointment.store') }}" method="post" id="appointmentForm">
    @csrf
    <input type="hidden" name="specialization" value="{{ $doctor->specialization }}">
    <label for="appointment-day">Select Day:</label>
    <select name="selectedDay" required>
        @foreach(explode(',', $doctor->days_available) as $day)
            <option value="{{ $day }}">{{ $day }}</option>
        @endforeach
    </select>
    <label for="appointment-time">Select Time:</label>
    <select name="selectedTime" required>
        @php
            $startTime = date_create_from_format('h:i A', explode(' - ', $doctor->timing)[0]);
            $endTime = date_create_from_format('h:i A', explode(' - ', $doctor->timing)[1]);
            $interval = DateInterval::createFromDateString('30 minutes');
            $times = new DatePeriod($startTime, $interval, $endTime);
        @endphp
        @foreach($times as $time)
            <option value="{{ $time->format('h:i A') }}">{{ $time->format('h:i A') }}</option>
        @endforeach
    </select>
    <button type="submit">Book Appointment</button>
</form>
    </div>
@endforeach

    </div>

    <script>
    
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("search");
        const doctorCards = document.querySelectorAll(".doctor-card");

        searchInput.addEventListener("keyup", function (event) {
            const searchTerm = event.target.value.toLowerCase();

            doctorCards.forEach((card) => {
                const name = card.querySelector("h2").innerText.toLowerCase(); // Changed selector to h2
                const specialization = card.querySelector("p").innerText.toLowerCase(); // Changed selector to p

                if (name.includes(searchTerm) || specialization.includes(searchTerm)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
    
</script>
