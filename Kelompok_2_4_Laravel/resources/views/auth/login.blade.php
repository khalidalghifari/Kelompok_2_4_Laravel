@extends('layouts.Login.login')


@section('content')
    <div class="simple-page-form animated flipInY" id="login-form">
        <h4 class="form-title m-b-xl text-center">Sign In With Your DAMS Account</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Registered Email ID" required="true"
                    name="email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
            </div>


            <input type="submit" class="btn btn-primary" name="login" value="Sign IN">
        </form>
        <hr />
        <a href="{{ route('register') }}">Signup/Registration</a>
    </div><!-- #login-form -->
@endsection

@section('footer')
    <p>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">FORGOT YOUR PASSWORD ?</a>
        @endif
    </p>
@endsection
