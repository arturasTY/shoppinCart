@extends('layouts.master')

@section('content')
  <div class="columns">
    <div class="hero-body signup">
    <div class="column is-half is-offset-one-quarter">
      <h1 class="has-text-centered is-size-3 bottom-pad">Sign Up</h1>
      <form action="{{ route('user.signup') }}" method="post">
        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="email" name="email" placeholder="Email">
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="password" name="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="fa fa-lock"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control">
            <button class="button is-primary">
              Sign Up
            </button>
          </p>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
    </div
  </div>
@endsection
