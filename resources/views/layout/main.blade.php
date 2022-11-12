

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>

    <!-- Setting Different css links -->
    <!-- <link rel="stylesheet" type="text/css" href=""> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>



	<div class="container">
                <!-- HEADER SECTION-->
        <header class="content-header">
            <div class="img-box">
                <!-- <img id="logo" src=""></img> -->
                <span class="material-icons logo-icon">apartment</span>
            </div>

            <section class="header-title">
                WORK REQUEST SYSTEM
            </section>
            <section class="header-user">
               User
            </section>
            
            <i class="material-icons">logout</i>
           
            <!-- <a href="/user/logout">
                 <div class="header-profile">Logout</div>
            </a> -->
            @auth
             <a href="/user/logout" class="header-profile">Logout</a>
        	@endauth 
           
        </header>

        

		@yield('content')
	</div>

    <script type="text/javascript" src="{{ asset('assets/js/adminDashboard.js') }}" defer></script>
</body>	
</html>