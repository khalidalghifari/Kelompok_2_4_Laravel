@extends('layouts.doctor', ['title' => ' New Appointment'])

@section('content')
    <div class="row">
        <!-- DOM dataTable -->
        <div class="col-md-12">
            <div class="widget">
                <header class="widget-header">
                    <h4 class="widget-title">New Appointment</h4>
                </header><!-- .widget-header -->
                <hr class="widget-separator">
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Appointment Number</th>
                                    <th>Patient Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @if ($appointments != null || $appointments != 0)
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $appointment->AppointmentNumber }}</td>
                                            <td>{{ $appointment->Name }}</td>
                                            <td>{{ $appointment->MobileNumber }}</td>
                                            <td>{{ $appointment->Email }}</td>

                                            @if ($appointment->Status == '')
                                                <td>Not Updated Yet</td>
                                            @else
                                                <td>{{ $appointment->Status }}</td>
                                            @endif

                                            <td><a href="{{ route('detailAppointment.show', [$appointment->id, $appointment->AppointmentNumber]) }}"
                                                    class="btn btn-primary">View</a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8"> No record found against this search</td>
                                    </tr>
                                @endif

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Appointment Number</th>
                                    <th>Patient Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div><!-- .widget-body -->
            </div><!-- .widget -->
        </div><!-- END column -->


    </div><!-- .row -->
@endsection
