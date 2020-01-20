<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Science KU Registra</title>
    <link rel="stylesheet" href="{{url('/css/app.css') }}'">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Proza+Libre" rel="stylesheet">




</head>
<body>



@include('layouts.navbar')
<br>
<br>

<div class="image" style="margin-left: 100px">
    @yield('image')
    <img src="teety.jpg" class="rounded-circle" alt="my profile image" width="236" height="236" >
</div>
<br><br>

<div class="container" >
       @yield('content')
  </div>





      <footer class="w3-center w3-black w3-padding-16">
          @yield('footer')

              <p><b>By</b> <a href="#" title="teety" target="_blank" class="w3-hover-text-green"><b>  @Teety Noisy </b> </a></p>


      </footer>







    
</body>
</html>