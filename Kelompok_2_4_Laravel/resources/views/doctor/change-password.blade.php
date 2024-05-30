@extends('layouts.doctor', ['title' => 'Change Password'])

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <header class="widget-header">
                    <h3 class="widget-title">Change Password</h3>
                </header><!-- .widget-header -->
                <hr class="widget-separator">
                <div class="widget-body">

                    <form class="form-horizontal" method="post" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="update_password_current_password" class="col-sm-3 control-label">Current
                                Password:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="current_password"
                                    id="update_password_current_password"required='true'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="update_password_password" class="col-sm-3 control-label">New Password:</label>
                            <div class="col-sm-9">
                                <input type="password" id="update_password_password" class="form-control" name="password"
                                    class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="update_password_password_confirmation" class="col-sm-3 control-label">Confirm
                                Password:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="update_password_password_confirmation" required='true'>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-success" name="submit">Change</button>
                            </div>
                        </div>
                    </form>
                </div><!-- .widget-body -->
            </div><!-- .widget -->
        </div><!-- END column -->

    </div><!-- .row -->
@endsection
