@extends('layout.guest')
    @section('content')

<div class="text">Login Form</div>
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="field">
          <input type="text" id="email" name="email" required />
          <span class="fas fa-user"></span>
          <label>Email</label>
        </div>
        <div class="field">
          <input type="text" id="name" name="name" required />
          <span class="fas fa-user"></span>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" id="password" name="password" required />
          <span class="fas fa-lock"></span>
          <label>Password</label>
        </div>
        <div class="forgot-pass">
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit">Sign Up</button>
        <div class="sign-up">
          Already Have an Account?
          <a href="login">Login Now</a>
        </div>
      </form>

      @endsection
