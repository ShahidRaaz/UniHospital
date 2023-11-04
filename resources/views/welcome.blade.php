<!DOCTYPE html>
<html>
<head>
    <title>Doctor Appointment Portal</title>
    <style>
        .banner {
            position: relative;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Adjust the alpha value for darkness */
            z-index: 1;
        }

        .banner-content {
            max-width: 600px;
            position: relative;
            z-index: 2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            text-align: center;
        }

        .container h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 18px;
            line-height: 1.6;
        }

        .card-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .card {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border-radius: 100px;
            padding: 20px;
            margin: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
            overflow: hidden;
            color: #fff;
        }

        .card:hover {
            transform: scale(1.1);
        }
        .overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
    }

    .form-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fefefe;
        padding: 20px;
        border-radius: 5px;
    }

    .open-button {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    </style>
</head>
<body>
@include('Login')

<div class="banner" style="background-image: url('https://plus.unsplash.com/premium_photo-1658506671316-0b293df7c72b?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">

    <div class="banner-content">
        <h1>Welcome to the Doctor Appointment Portal</h1>
        <p>Find the right doctor for you.</p>
    </div>
</div>

<div class="container">
    <h2>Why Choose Us?</h2>
    <p>We are committed to providing the best healthcare services to our patients. With a team of experienced doctors and state-of-the-art facilities, we ensure that you receive the utmost care and attention for your health needs.</p>
    <p>Our mission is to make healthcare accessible and convenient for everyone, ensuring a seamless experience from booking appointments to receiving the best possible treatment.</p>
</div>

<div class="card-container">
    <div class="card">
        <h3>Number of Doctors</h3>
        <p>250</p>
    </div>
    <div class="card">
        <h3>Number of Specializations</h3>
        <p>30</p>
    </div>
    <div class="card">
        <h3>Number of Appointments Booked</h3>
        <p>5000</p>
    </div>
</div>

</body>
</html>
