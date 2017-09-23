@extends('layouts.master')

@section('content')
  <div class="columns">
    <div class="hero-body signup">
    <h1 class="has-text-centered is-size-3 bottom-pad">Your Profile</h1>
    <div class="column is-half">
      <h2 class="is-size-5 bottom-pad">My Orders</h2>
      @foreach($orders as $order)
        <nav class="panel">
          @foreach($order->cart->items as $item)
            <a class="panel-block">
              <span class="tag is-primary">£{{ $item['price'] }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
              <em>{{ $item['item']['title'] }}</em> &nbsp;&nbsp;|&nbsp;&nbsp; {{ $item['qty'] }} Units
            </a>
          @endforeach
            <p class="panel-heading">Total: <strong>£{{ $order->cart->totalPrice }}</strong></p>
        </nav>
      @endforeach
    </div>
    <div class="column is-half details">
      <h2 class="is-size-5 bottom-pad">My Details</h2>
      <nav class="panel">
        <p class="panel-heading">
          repositories
        </p>
        <a class="panel-block is-active">
        {{ Auth::user()->email }}
        </a>
      </nav>
    </div>
    </div
@endsection
