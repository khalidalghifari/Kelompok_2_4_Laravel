@extends('layouts.doctor', ['title' => 'Dashboard'])

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">

                        <div class="pull-left">
                            <h3 class="widget-title text-warning"><span class="counter"
                                    data-plugin="counterUp">{{ $total_apt }}</span></h3>
                            <small class="text-color">Total New Appointment</small>
                        </div>
                        <span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
                    </div>
                    <footer class="widget-footer bg-warning">
                        <a href="{{ route('newAppointment') }}"><small> View Detail</small></a>
                        <span class="small-chart pull-right" data-plugin="sparkline"
                            data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
                    </footer>
                </div><!-- .widget -->
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-success"><span class="counter"
                                    data-plugin="counterUp">{{ $total_aprv }}</span></h3>
                            <small class="text-color">Total Approved</small>
                        </div>
                        <span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
                    </div>
                    <footer class="widget-footer bg-success">
                        <a href="{{ route('aprvAppointment') }}"><small> View Detail</small></a>
                        <span class="small-chart pull-right" data-plugin="sparkline"
                            data-options="[1,2,3,5,4], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
                    </footer>
                </div><!-- .widget -->
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-danger"><span class="counter"
                                    data-plugin="counterUp">{{ $total_cncl }}</span></h3>
                            <small class="text-color">Cancelled Appointment</small>
                        </div>
                        <span class="pull-right big-icon watermark"><i class="fa fa-unlock-alt"></i></span>
                    </div>
                    <footer class="widget-footer bg-danger">
                        <a href="{{ route('cancelAppointment') }}"><small> View Detail</small></a>
                        <span class="small-chart pull-right" data-plugin="sparkline"
                            data-options="[2,4,3,4,3], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
                    </footer>
                </div><!-- .widget -->
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">

                        <div class="pull-left">
                            <h3 class="widget-title text-primary"><span class="counter"
                                    data-plugin="counterUp">{{ $total_appoint }}</span></h3>
                            <small class="text-color">Total Appointment</small>
                        </div>
                        <span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
                    </div>
                    <footer class="widget-footer bg-primary">
                        <a href="{{ route('allAppointment') }}"><small> View Detail</small></a>
                        <span class="small-chart pull-right" data-plugin="sparkline"
                            data-options="[5,4,3,5,2],{ type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
                    </footer>
                </div><!-- .widget -->
            </div>
        </div><!-- .row -->
    </div>
@endsection
