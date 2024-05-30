@extends('layouts.patient')

@section('content')
    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <div class="booking-form">

                        <h2 class="text-center mb-lg-3 mb-2">Search Appointment History by Appointment Number/Name/Mobile No
                        </h2>

                        <form role="form" method="get" action="{{ route('appointment.search') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input id="searchdata" type="text" name="searchdata" required="true"
                                        class="form-control" placeholder="Appointment No./Name/Mobile No.">
                                </div>

                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control">Check</button>
                                </div>
                            </div>
                        </form>

                    </div>
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
                                            <th>Remark</th>

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

                                                    @if ($appointment->Remark == '')
                                                        <td>Not Updated Yet</td>
                                                    @else
                                                        <td>{{ $appointment->Remark }}</td>
                                                    @endif
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
                </div>
    </section>
@endsection
