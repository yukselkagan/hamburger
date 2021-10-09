@extends('layouts.empty-layout')

@section('content')
<main class="form-signin">
  <form action="loginprocess" method="POST" >
@csrf   
    <h1 id="registerlogin-header" class="h3 mb-3 fw-normal text-center headerham">Login Information</h1>
    

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ old('email') }}" >
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" name="password" placeholder=""  >
      <label for="password">Password</label>
    </div>




      <br>
    <button class="w-100 btn btn-light btn-lg btn-primary" style="background-color:black; color:white;" type="submit">Login</button>

  </form>
  <br>

  <a href="/" class="text-decoration-none" ><div style="color:orange;" >Main Page</div></a>
  <a href="register" style="text-decoration:none;" ><div style="color:orange;" >I have not account</div></a>
  <br>

  <div style="color:red;" >
  @if($errors->any())
    @foreach($errors->all() as $error )
      <p>{{$error}}</p>
    @endforeach
  @endif
  </div><br>
  
</main>
@endsection

    
