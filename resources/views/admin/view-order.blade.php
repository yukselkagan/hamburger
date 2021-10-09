@extends('layouts.common-layout')


@section('content')
<main>


  <div class="container" style="color:orange; font-size:30px; min-height:900px;" >
    Orders<br><br><br><br>




    <div class="list-group">
      @foreach($orders as $order)
      <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="image/hamburger/{{$order->hamburger->image}}.png" alt="hamburger-image" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
          <div>
            <h6 class="mb-0 text-capitalize" >{{$order->hamburger->name}} for {{$order->user->first_name}} {{$order->user->last_name}}</h6>
            <p class="mb-0 opacity-75">Address: {{$order->address}} </p>
          </div>
          <small class="opacity-50 text-nowrap">{{$order->created_at->diffForhumans()}}</small>
        </div>
      </a>
      @endforeach
    </div>
    <br><br><br><br>












  </div>













</main>
@endsection

