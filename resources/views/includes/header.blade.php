<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item logo" href="/">
      <h1>STUDIO<span>9</span></h1>
    </a>
    <div class="navbar-burger burger" data-target="navMenubd-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenubd-example" class="navbar-menu">
    <div class="navbar-end">
      <a href="{{ route('product.shoppingCart') }}" class="navbar-item item">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Shopping cart
        <span class="tag">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link item" href="#">
          <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;User Account
        </a>
      <div class="navbar-dropdown ">
        @if (Auth::check())
          <a class="navbar-item" href="{{ route('user.profile') }}">User Profile</a>
          <a class="navbar-item" href="{{ route('user.logout') }}">Log Out</a>
        @else
          <a class="navbar-item" href="{{ route('user.signup') }}">Sign Up</a>
          <a class="navbar-item" href="{{ route('user.signin') }}">Sign In</a>
        @endif
      </div>
      </div>
    </div>
  </div>
</nav>
