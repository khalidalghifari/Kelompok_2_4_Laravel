@extends('layouts.doctor', ['title' => 'B/W Dates Appointment Detail'])

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <header class="widget-header">
                    <h3 class="widget-title">Between Dates Report of Appointments</h3>
                </header><!-- .widget-header -->
                <hr class="widget-separator">
                <div class="widget-body">

                    <form class="form-horizontal" method="post" name="bwdatesreport"
                        action="{{ route('appointment.bwdates') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">From Date:</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="fromdate" name="fromdate" value=""
                                    required='true'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email2" class="col-sm-3 control-label">To Date:</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="todate" name="todate" value=""
                                    required='true'>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-success" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div><!-- .widget-body -->
            </div><!-- .widget -->
        </div><!-- END column -->

    </div><!-- .row -->
@endsection
