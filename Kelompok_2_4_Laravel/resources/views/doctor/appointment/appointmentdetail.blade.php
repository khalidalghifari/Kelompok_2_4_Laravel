@extends('layouts.doctor', ['title' => ' Details Appointment'])

@section('content')
    <div class="row">
        <!-- DOM dataTable -->
        <div class="col-md-12">
            <div class="widget">
                <header class="widget-header">
                    <h4 class="widget-title" style="color: blue">Appointment Details</h4>
                </header><!-- .widget-header -->
                <hr class="widget-separator">
                <div class="widget-body">
                    <div class="table-responsive">

                        <table border="1" class="table table-bordered mg-b-0">
                            <tr>
                                <th>Appointment Number</th>
                                <td>{{ $appointment->AppointmentNumber }}</td>
                                <th>Patient Name</th>
                                <td>{{ $appointment->Name }}</td>
                            </tr>

                            <tr>
                                <th>Mobile Number</th>
                                <td>{{ $appointment->MobileNumber }}</td>
                                <th>Email</th>
                                <td>{{ $appointment->Email }}</td>
                            </tr>
                            <tr>
                                <th>Appointment Date</th>
                                <td>{{ $appointment->AppointmentDate }}</td>
                                <th>Appointment Time</th>
                                <td>{{ $appointment->AppointmentTime }}</td>
                            </tr>

                            <tr>
                                <th>Apply Date</th>
                                <td>{{ $appointment->ApplyDate }}</td>
                                <th>Appointment Final Status</th>

                                <td colspan="4">
                                    @if ($appointment->Status == '')
                                        Not yet updated
                                    @endif

                                    @if ($appointment->Status == 'Approved')
                                        Your appointment has been approved
                                    @endif

                                    @if ($appointment->Status == 'Cancelled')
                                        Your appointment has been cancelled
                                    @endif

                                </td>
                            </tr>
                            <tr>

                                <th>Remark</th>
                                @if ($appointment->Remark == '')
                                    <td colspan="3">Not Updated Yet</td>
                                @else
                                    <td colspan="3">{{ $appointment->Remark }}</td>
                                @endif

                        </table>
                        <br>

                        @if ($appointment->Status == '')
                            <p align="center" style="padding-top: 20px">
                                <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal"
                                    data-target="#myModal">Take Action</button>
                            </p>
                        @endif
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered table-hover data-tables">

                                            <form method="post" name="submit"
                                                action="{{ route('appointment.update', $appointment->id) }}">
                                                @csrf
                                                @method('put')
                                                <tr>
                                                    <th>Remark :</th>
                                                    <td>
                                                        <textarea name="Remark" placeholder="Remark" rows="12" cols="14" class="form-control wd-450" required="true"></textarea>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Status :</th>
                                                    <td>

                                                        <select name="Status" class="form-control wd-450" required="true">
                                                            <option value="Approved" selected="true">Approved</option>
                                                            <option value="Cancelled">Cancelled</option>

                                                        </select>
                                                    </td>
                                                </tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>

                                        </form>


                                    </div>


                                </div>
                            </div>

                        </div>

                    </div><!-- .widget-body -->


                </div><!-- .widget -->
            </div><!-- END column -->


        </div><!-- .row -->
    @endsection
