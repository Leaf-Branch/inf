@extends('layout.auth')

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="row no-gutters justify-content-center bg-body-dark">
            <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
                <!-- Sign In Block -->
                <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image">
                    <div class="row no-gutters">
                        <div class="col-md-12 order-md-1 bg-white">
                            <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                <!-- Header -->
                                <div class="mb-2 text-center">
                                    <a class="link-fx font-w700 font-size-h1" href="{{url('/login')}}">
                                        <span class="text-dark">I Need Friend.</span><span class="text-primary">online</span>
                                    </a>
                                    <p class="text-uppercase font-w700 font-size-sm text-muted">Masuk</p>
                                </div>
                                <!-- END   -->

                                <div class="form-group">
                                    <a href="{{url('/auth/redirect')}}" class="btn btn-block btn-hero-primary">
                                        <i class="fab fa-google mr-1"></i> Sign In
                                    </a>
                                </div>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Sign In Block -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
