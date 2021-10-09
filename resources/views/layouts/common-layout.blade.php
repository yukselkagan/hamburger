<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel burger">
    <meta name="author" content="K">
    <title>Laravel Burger</title>


    <link rel="icon" href="image/laravel.png">

    

    <!-- Bootstrap core CSS -->
    <link href="css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/standart.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      

    </style>

    

    
  </head>
  <body>
    
<header class="site-header sticky-top py-1">
  <nav class="container-fluid d-flex flex-column flex-md-row "  >
    <a class="py-2" href="/" aria-label="Product">
      <img class="d-block mx-auto" src="image/laravel.png" width="24" height="24" >
    </a>
    <a class="py-2 ms-4 d-none d-md-inline-block" href="#">Product</a>
    <a class="py-2 ms-4 d-none d-md-inline-block" href="about">About</a>
    <a class="py-2 ms-4 d-none d-md-inline-block" href="#">Restaurant</a>
    <a class="py-2 ms-4 d-none d-md-inline-block" href="view-order">View Orders (for admin)</a>

    <span class="ms-auto py-2 ms-4 d-none d-md-inline-block float-end" >     
     @if(auth()->check() )
     <span class="d-md-inline-block ms-4" style="color:#8e8e8e; text-transform:capitalize;"  > 
     Welcome {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
    </span>
     <a class="d-md-inline-block ms-4" href="logoutprocess" > Logout </a>
     @else
     <a class="d-md-inline-block ms-4" href="login" > Login </a>
     <a class="d-md-inline-block ms-4" href="register" > Register </a>

     @endif

    </span>
  </nav>
</header>




@yield('content')





<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
    <img  src="image/laravel.png" width="24" height="24" >
      <small class="d-block mb-3 text-muted">&copy; 2000–2021</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Cool stuff</a></li>
        <li><a class="link-secondary" href="#">Random feature</a></li>
        <li><a class="link-secondary" href="#">Team feature</a></li>
        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
        <li><a class="link-secondary" href="#">Another one</a></li>
        <li><a class="link-secondary" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Resource name</a></li>
        <li><a class="link-secondary" href="#">Resource</a></li>
        <li><a class="link-secondary" href="#">Another resource</a></li>
        <li><a class="link-secondary" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Business</a></li>
        <li><a class="link-secondary" href="#">Education</a></li>
        <li><a class="link-secondary" href="#">Government</a></li>
        <li><a class="link-secondary" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Team</a></li>
        <li><a class="link-secondary" href="#">Locations</a></li>
        <li><a class="link-secondary" href="#">Privacy</a></li>
        <li><a class="link-secondary" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>


    <script src="css/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
