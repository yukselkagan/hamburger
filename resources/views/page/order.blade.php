@extends('layouts.common-layout')


@section('content')
<main>


  <div class="container" style="color:orange; font-size:30px; min-height:900px;" >
  Order Burger<br><br>

  <form action="orderHamburger" method="POST" >
  @csrf
  <input type="radio" id="classic" name="hamburger_id" value="1" checked >
    <label for="classic"><img src="image/hamburger/classic.png" width="50px;" >  Classic Burger</label><br>
  <input type="radio" id="chicken" name="hamburger_id" value="2">
    <label for="chicken"><img src="image/hamburger/chicken.png" width="50px;" >  Chicken Burger</label><br>
  <input type="radio" id="cheese" name="hamburger_id" value="3">
    <label for="cheese"><img src="image/hamburger/cheese.png" width="50px;" >  Cheeseburger</label><br>
  <input type="radio" id="steak" name="hamburger_id" value="4"> 
    <label for="steak"><img src="image/hamburger/steak.png" width="50px;" >  Steak Burger</label><br>

  <br>
  <textarea name="address" rows="5" cols="50" style="background-color:orange; resize:none;" spellcheck="false" ></textarea>


  <br><br>
  <button class="btn btn-light btn-lg" type="submit" style="background-color:black; color:white;" >Order</button>
  </form>

  <br>
  <div style="color:red;" >
  @if($errors->any())
    @foreach($errors->all() as $error )
      <p>{{$error}}</p>
    @endforeach
  @endif
  </div><br>


 











  </div>













</main>
@endsection

