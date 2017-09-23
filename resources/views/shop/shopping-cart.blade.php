@extends('layouts.master')

@section('title')
  Laravel Shopping Cart
@endsection

@section('content')
  @if(Session::has('cart'))
    <div class="columns">
      <div class="hero-body">
        <div class="column is-1-12 cart">
            <h1 class="has-text-centered is-size-3 bottom-pad">Your Basket</h1>
              <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Quantity</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                    <tr>
                      <td><div class="control">
                        <input class="input qty" type="text" value="{{ $product['qty'] }}">
                      </div>
                      </td>
                      <td>{{ $product['item'] ['title'] }}</td>
                      <td>{{ $product['price'] }}</td>
                      <td>
                        <span class="tag is-danger is-small">Delete</span>
                      </td>
                      <td>
                        <span class="tag is-warning is-small">Update</span>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="checkout-btn mar-top">
                <a href="{{ route('checkout') }}" class="button is-success">Checkout</a>
              </div>
            @else
              <div class="columns">
                <div class="hero-body">
                  <div class="column is-1-12">
                    <h2 class="has-text-centered is-size-3 bottom-pad">No Items in the Basket !</h2>
                  </div>
                </div>
              </div>
            @endif
        </div>
      </div>
    </div>
@endsection
