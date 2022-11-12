@extends('layout.main')

@section('title', 'Admin - Dashboard')

@section('content') 
    <!-- | WORK REQUESTS SECTION | -->
    <section class="content-left">
        <div class="header">
            Work Requests
        </div>

        <div class="body">

            <section class="body-content">
                <label class="department">CCSIT</label>
                <label class="work-request"><a href="#">Computer Maintenance</a></label>
                <label class="date">November 1, 2022</label>
            </section>
  
        </div>

        <div class="footer">
            <button href="#" class="registerRequestor-btn">Add Requestor</button>
        </div>

        <!-- Register Requestor Field -->
        <span class="modal-bg">
            <span class="modal">
                <label>Add Department</label>
                <form method="POST" action='/requestors/dashboard' class="modal-add-requestor">
                    @csrf
                    <span class="material-icons person-icon">apartment</span>

                    <input class="username" type="text" name="name" placeholder="Enter Department name" reqiured></input>
                    <input class="username" type="text" name="email" placeholder="Enter Email" reqiured></input>
                    <input class="password" type="password" name="password" placeholder="Enter Password"></input>
                    <input id="submit-btn" type="submit" name="submit" value="Add"></input>
                    
                </form>
                <img id="close-btn" src=""></img>
            </span>
        </span>
        <!-- END Register Requestor Field -->

    </section>
    <!-- | END WORK REQUEST SECTION | -->

        <!-- | MAIN SECTION CONTENT | -->
    <main class="content-main">
        <header class="main-header">Approved Work Requests</header>

        <section class="main-body">
  
            <div class="main-content">

                <div class="main-content-header">Department Name</div>

                <div class="main-content-body">
                    <span>Work Request Name</span>
                    <ul class="main-content-progress">
                        <li>
                            <div class="progress one">1</div>
                            <p>Approved</p>
                        </li>
                        <li>
                            <div class="progress two">2</div>
                            <p>On going</p>
                        </li>
                        <li>
                            <div class="progress three">3</div>
                            <p>Finished</p>
                        </li>
                    </ul>
                </div>

                <div class="main-content-footer">
                    <section class="main-date">Date</section>
                    <section class="main-priority-level">Piority Level :</section>
                </div>

            </div>
 

        </section>

        <footer class="main-footer"></footer>

    </main>

        <!-- | WORK STAFF SECTION | -->
    <section class="content-right">
        RIGHT
    </section>

        <!-- | FOOTER SECTION | -->
    <footer class="content-footer">
       
    </footer>
@endsection






















<!-- <div class="container">
    <form action="" method="GET">
        <h1>Register as:</h1>
        <div class="input-box">
            <button class="open-button" onclick="openForm1()">Requestor</button>
        </div>

        <div class="input-box">
            <button class="open-button" onclick="openForm2()">Workstaff</button>
        </div>
    </form>
</div>


{{-- pop up form --}}
{{-- requestor --}}
<div class="form-popup" id="myForm1">   
    <form action='/requestors/dashboard' method="POST" class="form-container">
        @csrf
        <label for="text"><b>Deparment Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Create Account</button>
        <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
    </form>
</div>

{{-- staff --}}
<div class="form-popup" id="myForm2">
    <form action='/staffs/dashboard' method="POST" class="form-container">
        @csrf
        <label for="text"><b>Staff Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn">Create Account</button>
        <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
    </form>
</div>


        {{-- logout funtcion --}}
        <br>
        @auth
            <a href="/user/logout">
                 <div class="create-account">Logout</div>
            </a>
        @endauth    -->