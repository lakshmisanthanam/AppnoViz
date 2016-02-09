<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AppnoViz - VISA</title>

    <link rel="stylesheet" type="text/css" href="/css/home.css"/>
</head>
<body id="app-layout">

    <div class="spacer">
        @yield('loggedIn')
    </div>
    <header>
         <div class="logo">
            <a href="{{ url('home') }}" title="Home" rel="home" id="logo">
                  <img src="/images/logo.svg" alt="Home">
            </a>
        </div>
    </header>
    <div class="wrapper">
      <div class="container-home">
              @yield('content')
      </div>
    </div>

    <footer>
        <div class="container-footer">
            ©2016 Appnovation Technologies. All Rights Reserved.
        </div>
    </footer>
</body>
</html>
