@extends('layouts.admin-template')


@section('content')

        <!-- Validation Errors -->
        <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}"   placeholder="Enter your Name" required autofocus>
            </div>

            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}"   placeholder="Enter your Email" required>
            </div>

            <div class="form-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Enter your Password" required autocomplete="new-password">
            </div>

            <div class="form-group">
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required autocomplete="new-password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-info btn-block">Register</button>
            </div>
            
            <div class="mg-t-20 tx-center">Already registered? 
                <a href="{{ route('login') }}" class="tx-info">Login Here</a>
            </div>

        </form>

@endsection