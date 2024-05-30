@extends('layouts.doctor', ['title' => 'Doctor Profile'])

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <header class="widget-header">
                    <h3 class="widget-title">Doctor Profile</h3>
                </header><!-- .widget-header -->
                <hr class="widget-separator">
                <div class="widget-body">

                    <form class="form-horizontal" method="post" action="{{ route('profil.update', $user->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Employee ID:</label>
                            <div class="col-sm-9">
                                <input id="name" type="text" class="form-control" placeholder="Full Name"
                                    name="name" required="true" value="{{ $user->name }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email2" class="col-sm-3 control-label">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $user->email }}" required='true'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="MobileNumber" class="col-sm-3 control-label">Contact Number:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="MobileNumber" name="MobileNumber"
                                    value="{{ $user->MobileNumber }}" required='true' maxlength='10'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="specialization" class="col-sm-3 control-label">Specialization:</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="specialization">
                                    <option value="{{ $user->Specialization }}">{{ $spc->Specialization }}</option>
                                    @foreach ($specializations as $item)
                                        <option value="{{ $item->id }}">{{ $item->Specialization }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email2" class="col-sm-3 control-label">Registration Date:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email2" name=""
                                    value="{{ $user->created_at }}" readonly="true">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-success" name="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div><!-- .widget-body -->
            </div><!-- .widget -->
        </div><!-- END column -->

    </div><!-- .row -->
@endsection
