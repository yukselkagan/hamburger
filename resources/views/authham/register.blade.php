@extends('layouts.empty-layout')

@section('content')
<main class="form-signin">
  <form action="registerprocess" method="POST" >
@csrf   
    <h1 id="registerlogin-header" class="h3 mb-3 fw-normal text-center headerham">Register Information</h1>
    
    <div class="form-floating">
      <input type="text" class="form-control" name="first_name" name="first_name"  placeholder="" value="{{ old('first_name') }}" >
      <label for="first_name">First name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="last_name" name="last_name" placeholder="" value="{{ old('last_name') }}" >
      <label for="last_name">Last name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ old('email') }}" >
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" name="password" placeholder=""  >
      <label for="password">Password</label>
    </div>




      <br>
    <button class="w-100 btn btn-light btn-lg btn-primary" style="background-color:black; color:white;" type="submit">Register</button>

  </form>
  <br>

  <a href="/" class="text-decoration-none" ><div style="color:orange; " >Main Page</div></a>
  <a href="login" style="text-decoration:none;" ><div style="color:orange;" >I have account</div></a>
  <br>

  <div style="color:red;" >
  @if($errors->any())
    @foreach($errors->all() as $error )
      <p>{{$error}}</p>
    @endforeach
  @endif
  </div><br>


  <br>
</main>
@endsection
