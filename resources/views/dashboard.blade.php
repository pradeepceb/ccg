@extends('layout')

@section('content')
<!-- Main -->
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <!-- Card stats -->
        <h2>Welcome to the CCG partner portal.</h2>
        <p>A quick intro to our checkmate solution: A CCG's flagship offering and a complete self-contained
            cyber- defense solution that provide all component needed to combat 18 of the 20 SANS critical
            control.</p>
    </div>

    <div class="row ml-5">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="check-sec">
                        <img src="{{ asset('public/image/security.png') }}" />
                        <h5>CanSecure</h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="check-sec">
                        <img src="{{ asset('public/image/security.png') }}" />
                        <h5>NeTERS</h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="check-sec">
                        <img src="{{ asset('public/image/security.png') }}" />
                        <h5>CanSecure</h5>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <img src="{{ asset('public/image/check.png') }}" />
        </div>
    </div>


    <div class="registered-company">
        <!-- Card stats -->
        <h3>Have you registered your company?</h3>
        <p>Our goal is to provide you with a competitive advantage, simplify processes and helping you increase
            sales and revenue. So weither you are registering as a company or reseller, we got you covered.</p>

    </div>
</main>
@endsection