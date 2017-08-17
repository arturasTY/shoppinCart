@extends('layouts.master')

@section('title')
  Laravel Shopping Cart
@endsection

@section('content')
  <h1 class="has-text-centered is-size-4">Our Products</h1>

  <div class="row">
    <div class="product--blue">
      <div class="product_inner">
        <img src="http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png" alt="">
        <p>Nike Air (Women)</p>
        <p>Size 7</p>
        <p>Price £199.99</p>
        <button type="button" name="button">Add to basket</button>
      </div>
      <div class="product_overlay">
        <h2>Added to basket</h2>
        <i class="fa fa-check" aria-hidden="true"></i>
      </div>
    </div>

    <div class="product--red">
      <div class="product_inner">
        <img src="http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png" alt="">
        <p>Nike Air (Women)</p>
        <p>Size 7</p>
        <p>Price £199.99</p>
        <button type="button" name="button">Add to basket</button>
      </div>
      <div class="product_overlay">
        <h2>Added to basket</h2>
        <i class="fa fa-check" aria-hidden="true"></i>
      </div>
    </div>

    <div class="product--green">
      <div class="product_inner">
        <img src="http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png" alt="">
        <p>Nike Air (Women)</p>
        <p>Size 7</p>
        <p>Price £199.99</p>
        <button type="button" name="button">Add to basket</button>
      </div>
      <div class="product_overlay">
        <h2>Added to basket</h2>
        <i class="fa fa-check" aria-hidden="true"></i>
      </div>
    </div>


  </div>

@endsection
