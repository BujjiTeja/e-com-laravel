@extends('master')
@section('content')
<div class="container login-page">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form autocomplete="false">
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form2Example1" autocomplete="false" class="form-control" />
          <label class="form-label" for="form2Example1">Email address</label>
        </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form2Example2" autocomplete="false" class="form-control" />
          <label class="form-label" for="form2Example2">Password</label>
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check remeber-me">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>
      
          <div class="col remeber-me">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>
      
        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
      
        <!-- Register buttons -->
        <div class="text-center">
          <p>Not a member? <a href="#!">Register</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection