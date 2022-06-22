@extends('layouts.master')

@section('title')
    Home page
@endsection

@section('description')
description here
@endsection

@section('keywords')
keywords here
@endsection


@section('content')
@include('user.inc.hero')

    <div class="container-fluid row mt-5 m-auto p-0">
        <div class="col-lg-9">
            <main id="main">

                <section id="about" class="about">
                    @include('user.inc.about_us')
                </section>

                <!-- Our Services -->
                <section id="Our_Services">
                    @include('user.inc.services')
                </section>


            </main><!-- End #main -->
        </div>


        <div class="col-lg-3 box_sideBar mt-5 mb-5 d-none d-md-block">



            <div>
                @include('user.inc.booknow')
            </div>

            <div>
                @include('user.inc.map1')

            </div>

            <div id="">
                @include('user.inc.map2')
            </div>



        </div>


        <div class="col-12 p-0">

            @include('user.inc.videos') 

            <section id="doctors" class="doctors section-bg">
                <div>
                    @include('user.inc.doctors')
                </div>
            </section>



            @include('user.inc.reviews')

            @include('user.inc.galary')




            <section id="contact" class="contact">
                <div>
                    @include('user.inc.contactUs')
                </div>
            </section>

            <section id="Location" class="contact">
                <div>
                    @include('user.inc.branches')
                </div>
            </section>

            <section id="appointment" class="appointment section-bg">
                <div>
                    @include('user.inc.formBooking')
                </div>
            </section>




        </div>

    </div>
@endsection
