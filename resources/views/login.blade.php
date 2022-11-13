@extends('layout.main')

@section('title', 'Log In')

@section('content')

    <div class="content-main">

        <section class="title">
            <p>Log In As</p>
        </section>

        <div class="login-button">
            <section>
                <button class="requestor-btn" id="requestor-btn">Requestor</button>
            </section>

            <section>
                <button class="admin-btn">Administrator</button>
            </section>

            <section>
                <button class="staff-btn">Work Staff</button>
            </section>
        </div>

        <!-- Modal Pop ups -->
        <!-- ===== Requestor ===== -->
        <div class="modal-container-requestor" id="requestorForm">   
            <form action='/user/login/requestor' method="POST" class="form-container">
                @csrf
                <label for="email"><b>Login As Requestor</b></label>
                <input type="text" placeholder="Enter username" name="email" required>

                <!-- <label for="password"><b>Password</b></label> -->
                <input type="password" placeholder="Enter Password" name="password" required>

                <input type="submit" value="Sign In" class="btn"></input>   
                <a class="material-icons close-btn-requestor">close</a> 
            </form>
        </div>

        <!-- ===== Admin ===== -->
        <div class="modal-container-admin" id="adminForm">   
            <form action='/user/login/admin' method="POST" class="form-container">
                @csrf
                <label for="email"><b>Login As Administrator</b></label>
                <input type="text" placeholder="Enter username" name="email" required>

                <!-- <label for="password"><b>Password</b></label> -->
                <input type="password" placeholder="Enter Password" name="password" required>

                <input type="submit" value="Sign In" class="btn"></input>   
                <a class="material-icons close-btn-admin">close</a> 
            </form>
        </div>

        <!-- Work Staff -->
        <div class="modal-container-staff" id="staffForm">   
            <form action='/user/login/staff' method="POST" class="form-container">
                @csrf
                <label for="email"><b>Login As Work Staff</b></label>
                <input type="text" placeholder="Enter username" name="email" required>

                <!-- <label for="password"><b>Password</b></label> -->
                <input type="password" placeholder="Enter Password" name="password" required>

                <input type="submit" value="Sign In" class="btn"></input>   
                <a class="material-icons close-btn-staff">close</a> 
            </form>
        </div>


    </div>
    

@endsection



<!-- 
<div class="container">
    <form action="" method="GET">
        <h1>Log in as:</h1>
        <div class="input-box">
            <button class="open-button" onclick="openRequestorForm()">Requestor</button>
        </div>

        <div class="input-box">
            <button class="open-button" onclick="openCaoForm()">CAO</button>
        </div>

        <div class="input-box">
            <button class="open-button" onclick="openStaffForm()">Workstaff</button>
        </div>
    </form>
    
    {{-- account creation --}}
    <br>
    <a href="/user/signup">
        <div class="create-account">Don't have an Account?</div>
    </a>

</div>

{{-- pop up form --}}
{{-- requestor --}}
<div class="form-popup" id="requestorForm">   
    <form action='/user/login/requestor' method="POST" class="form-container">
        @csrf
        <label for="email"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Sign In</button>
        <button type="button" class="btn cancel" onclick="closeRequestorForm()">Close</button>
    </form>
</div>

{{-- CAO --}}
<div class="form-popup" id="caoForm">   
    <form action='/user/login/admin' method="POST" class="form-container">
        @csrf
        <label for="email"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Sign In</button>
        <button type="button" class="btn cancel" onclick="closeCaoForm()">Close</button>
    </form>
</div>

{{-- Workstaff--}}
<div class="form-popup" id="staffForm">   
    <form action='/user/login/staff' method="POST" class="form-container">
        @csrf
        <label for="email"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Sign In</button>
        <button type="button" class="btn cancel" onclick="closeStaffForm()">Close</button>
    </form>
</div>

    <h2>This is a Test</h2> -->