
<style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        margin-bottom:10px;
    }

    .logo {
        margin-left: 20px;
        font-size: 24px;
        font-weight: bold;
    }

    .login-signup-btn {
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        color: #fff;
        text-decoration: none;
    }
    #overlay {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: fit-content;
  height: fit-content;
  background-color: white;
  z-index: 10;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius:20px;
}

#overlay form {
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding:20px
}

input {
  width: 80%;
  padding: 10px;
  border: 1px solid linear-gradient(to right, orange, #8e2de2);
  border-radius: 5px;
  font-size: 16px;
  margin-bottom:0px;
}

label {
  font-size: 16px;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
}

button {
  background: linear-gradient(to right, #ff7e5f, #feb47b);
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  margin: 0 auto;
}
</style>

<div class="navbar">
    <div class="logo">Doctor Appointment Portal</div>
    <a href="#" class="login-signup-btn" onclick="openLoginForm()">Login</a>
</div>

<div id="overlay" style="display: none;">
    <!-- Overlay form for login -->
    <form action="/login" method="post">
        @csrf
        <label for="patient_id">Patient ID:</label>
        <input type="text" id="patient_id" name="patient_id"><br><br>
        <button type="submit">Login</button>
    </form>
</form>
</div>

<script>
    function openLoginForm() {
        document.getElementById('overlay').style.display = 'flex';
    }
    @if(Session::has('error'))
        alert('{{ Session::get('error') }}');
@endif
</script>
