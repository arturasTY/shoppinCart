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
          <div id="charge-error" class="message is-danger {{ !Session::has('error') ? 'is-hidden' :''  }}" >
            {{ Session::get('error') }}
          </div>
          <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" id="name" name="name" required>
              </div>
            </div>
                <div class="field">
              <label class="label">Address</label>
              <div class="control">
                <input class="input" type="text" id="address" name="address" required>
              </div>
            </div>
            <div class="field">
              <label class="label">Card Holder Name</label>
              <div class="control">
                <input class="input" type="text" id="holderName" required>
              </div>
            </div>
            <div class="field">
              <label class="label">Credit Card Number</label>
              <div class="control">
                <input class="input" type="text" id="cardNumber" required>
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
                <button type="submit" class="button is-success">Buy now</button>
              </div>
              <div class="control">
                <button class="button is-link">Cancel</button>
              </div>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="https://js.stripe.com/v2/"></script>
  <script src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection