<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
-->
    <title>Acme</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
    @if(Request::is('/'))
    @include('inc.showcase')
    @endif 
    <div class="row">
    <div class="col-md-8 col-lg-8">
    
    @include('inc.messages')

    @yield('content')
    </div>
    <div class="col-md-4 col-lg-4">
    @include('inc.sidebar')
    </div>
    </div>
   </div>
  <footer id="footer" class="text-center">
  <p>Copyright 2020  &copy; Inka</p>
  </footer>

</body>

</html>