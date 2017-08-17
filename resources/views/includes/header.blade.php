<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item logo" href="/">
      <img src="{{ URL::to('src/images/logo.png') }}" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navMenubd-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div id="navMenubd-example" class="navbar-menu">

    <div class="navbar-end">
      <a href="#" class="navbar-item item">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Shopping cart
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link item" href="#">
          <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;User Account
        </a>
        <div class="navbar-dropdown ">
          <a class="navbar-item " href="#">
            Sign Up
          </a>
          <a class="navbar-item " href="#">
            Sign In
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item " href="#">
            Log Out
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
