@extends('layouts.patient')

@section('content')
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/assets/images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="/assets/images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="/assets/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="mb-lg-3 mb-3">About Us</h2>

                    <p>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b>Our mission declares our purpose of
                                existence as a company and our objectives.</b></font>
                    </div>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b><br></b></font>
                    </div>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b>To give every customer much more than what
                                he/she asks for in terms of quality, selection, value for money and customer
                                service, by understanding local tastes and preferences and innovating constantly to
                                eventually provide an unmatched experience in jewellery shopping.</b></font>
                    </div>.</p>

                </div>

                <div class="col-lg-4 col-md-5 col-12 mx-auto">
                    <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                        <p class="featured-text"><span class="featured-number">12</span> Years<br> of Experiences
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-6 ps-0">
                    <img src="/assets/images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage"
                        alt="get a vaccine" title="get a vaccine for yourself">
                </div>

                <div class="col-lg-6 col-6 pe-0">
                    <img src="/assets/images/gallery/female-doctor-with-presenting-hand-gesture.jpg"
                        class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">

                        <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>

                        <form role="form" method="post" action="{{ route('appointment.booking') }}">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="Name" id="Name" class="form-control"
                                        placeholder="Full name" required='true'>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="Email" id="Email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email address" required='true'>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="telephone" name="MobileNumber" id="MobileNumber" class="form-control"
                                        placeholder="Enter Phone Number" maxlength="10">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="date" name="AppointmentDate" id="AppointmentDate" value=""
                                        class="form-control">

                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="time" name="AppointmentTime" id="AppointmentTime" value=""
                                        class="form-control">

                                </div>

                                <div class="col-lg-6 col-12">
                                    <select name="Specialization" id="Specialization" class="form-control" required>
                                        <option value="">Select specialization</option>
                                        <!--- Fetching States--->
                                        @foreach ($Specializations as $specialization)
                                            <option value="{{ $specialization->id }}">{{ $specialization->Specialization }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <select name="Doctor" id="Doctor" class="form-control">
                                        <option value=''>Select Doctor</option>
                                    </select>
                                </div>



                                <div class="col-12">
                                    <textarea class="form-control" rows="5" id="Message" name="Message" placeholder="Additional Message"></textarea>
                                </div>

                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control" name="submit" id="submit-button">Book
                                        Now</button>
                                </div>
                            </div>
                        </form>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $("#Specialization").on('change', function() {
                                    let id_specialization = $('#Specialization').val();

                                    $.ajax({
                                        type: "POST",
                                        url: "{{ route('appointment.getDoctor') }}",
                                        data: {
                                            "id_special": id_specialization,
                                            '_token': '{{ csrf_token() }}'
                                        },
                                        cache: false,

                                        success: function(msg) {
                                            $('#Doctor').html(msg);
                                        },

                                        error: function(data) {
                                            console.log('error', data);
                                        },
                                    })
                                });
                            });
                        </script>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
