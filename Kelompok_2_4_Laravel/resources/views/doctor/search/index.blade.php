@extends('layouts.doctor', ['title' => 'Search Appointment Detail'])


@section('content')
    <div class="row">
        <!-- DOM dataTable -->
        <div class="col-md-12">
            <div class="widget">
                <header class="widget-header">
                    <form id="basic-form" method="get" action="{{ route('appointment.searchResult') }}">
                        <div class="form-group">
                            <label>Search by Appointment No./Name/Mobile No.</label>
                            <input id="searchdata" type="text" name="searchdata" required="true" class="form-control"
                                placeholder="Appointment No./Name/Mobile No.">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary" name="search" id="submit">Search</button>
                    </form>
                </header><!-- .widget-header -->

                @if ($searchdata != '')
                    <h4 align="center">Result against "{{ $searchdata }}" keyword </h4>

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
                                {{-- <tr>
                            <td>{{ $searchdata }}</td>
                        </tr> --}}
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @if ($appointments != null || $appointments != 0)
                                        @foreach ($appointments as $appointment)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $appointment->AppointmentDate }}</td>
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
                            </table>
                        </div>

                    </div>
                @endif
                <!-- .widget-body -->
            </div><!-- .widget -->
        </div><!-- END column -->


    </div><!-- .row -->
@endsection
