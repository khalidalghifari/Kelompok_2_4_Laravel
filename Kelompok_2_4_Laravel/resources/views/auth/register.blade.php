@extends('layouts.Login.login')


@section('content')
    <div class="simple-page-form animated flipInY" id="login-form">
        <h4 class="form-title m-b-xl text-center">Sign Up With Your DAMS Account</h4>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input id="name" type="text" class="form-control" placeholder="Full Name" name="name"
                    required="true">
            </div>

            <div class="form-group">
                <input id="email" type="email" class="form-control" placeholder="Email" name="email"
                    required="true">
            </div>
            <div class="form-group">
                <input id="MobileNumber" type="text" class="form-control" placeholder="Mobile" name="MobileNumber"
                    maxlength="10" pattern="[0-9]+" required="true">
            </div>
            <div class="form-group">
                <select class="form-control" name="Specialization">
                    <option value="">Choose Specialization</option>
                    @foreach ($Specializations as $item)
                        <option value="{{ $item->id }}">{{ $item->Specialization }}</option>
                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password"
                    required="true">
            </div>

            <div class="form-group">
                <input id="password_confirmation" type="password" class="form-control" placeholder="Confirm Password"
                    name="password_confirmation" required="true">
            </div>

            <input type="submit" class="btn btn-primary" value="Register" name="submit">
        </form>
        <hr />

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div><!-- #login-form -->
@endsection

@section('footer')
    <p>
        <small>Do you have an account ?</small>
        <a href="{{ route('login') }}">SIGN IN</a>
    </p>
@endsection
