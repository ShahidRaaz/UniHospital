<!DOCTYPE html>
<html>
<head>
    <title>User Portal</title>
    <style>
        /* Add necessary CSS styles here */
        .navbar {
            background-color: rgba(244, 244, 244, 0);;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            margin-bottom: 20px;
        }

        .logo {
            text-decoration: none;
            font-size: 20px;
        }

        .nava {
            color: black;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            padding: 14px 16px;
            border-bottom: 2px solid transparent;
        }

        .nava:hover {
            border-bottom: 2px solid orange;
        }

        .nava.active {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: #fff;
            border-radius:10px;
        }

        .logout-btn {
            color: black;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            padding: 14px 16px;
            background: linear-gradient(to right, #ff4b2b, #ff416c);
            color: #fff;
            border-radius:10px;
        }

        .logout-btn:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">Doctor Appointment Portal</div>
        <div>
            <a href="/profile" class="nava {{ request()->is('profile') ? 'active' : '' }}">Profile</a>
            <a href="/doctors" class="nava {{ request()->is('doctors') ? 'active' : '' }}">Doctors</a>
            <a href="/appointments" class="nava {{ request()->is('appointments') ? 'active' : '' }}">Appointments</a>
        </div>
        <a href="/" class="logout-btn">Logout</a>
    </div>
</body>
</html>
