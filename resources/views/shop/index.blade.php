@extends('layouts.master')

@section('title')
  Laravel Shopping Cart
@endsection

@section('content')
  <section class="products-home">
    <div class="hero-body">
      <h1 class="has-text-centered is-size-4">Our Products</h1>
      @foreach ($products->chunk(3) as $productChunk)
        <div class="row">
          @foreach ($productChunk as $product)
            <div class="product--green">
              <div class="product_inner">
                <img src="{{ $product->imagePath }}" alt="">
                <p>{{ $product->title }}</p>
                <p>{{ $product->size }}</p>
                <strong>£{{ $product->price }}</strong>
                <a href="{{ route( 'product.addtocart', ['id' => $product->id] ) }}">Add to basket</a>
              </div>
              <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    </div>
  </section>
@endsection
