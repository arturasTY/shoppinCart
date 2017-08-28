@extends('layouts.master')

@section('title')
  Checkout
@endsection

@section('content')
  <div class="columns">
    <div class="hero-body">
      <div class="column is-1-10 cart">
        <div class="checkout-form">
        <h1 class="is-size-3">Checkout</h1>
          <h4 class="is-size-5 bottom-pad">Your Total: <strong>£{{ $total }}</strong></h4>
          <form action="{{ route('checkout') }}" method="post">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" id="name" required>
              </div>
            </div>
            <div class="field">
              <label class="label">Address</label>
              <div class="control">
                <input class="input" type="text" id="address" required>
              </div>
            </div>
            <div class="field">
              <label class="label">Address</label>
              <div class="control">
                <input class="input" type="text" id="" required>
              </div>
            </div>
            <div class="field">
              <label class="label">Card Holder Name</label>
              <div class="control">
                <input class="input" type="text" id="holderName" required>
              </div>
            </div>
            <div class="field columns">
              <div class="control column no-m">
                <label class="label">Expiry Month</label>
                <input class="input" type="text" id="expiryMonth" required>
              </div>
              <div class="control column no-m">
                <label class="label">Expiry Year</label>
                <input class="input" type="text" id="expiryYear" required>
              </div>
            </div>
            <div class="field">
              <label class="label">CVC</label>
              <div class="control">
                <input class="input" type="text" id="cvc" required>
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <a href="" class="button is-success">Buy now</a>
              </div>
              <div class="control">
                <button class="button is-link">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
