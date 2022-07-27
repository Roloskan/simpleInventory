@extends('template')
@section('toptittle', 'Home')
@section('hero')

<div class="col-lg-6 text-center text-lg-start">
    <h1 class="text-white mb-4 animated slideInDown">simpleInventory</h1>
    <p class="text-white pb-3 animated slideInDown">The objective of this application is to
        manage the inventory of your products, generate alerts for low stock and show general
        statistics of your products.</p>
    <a href="https://www.linkedin.com/in/jorgerosales88" target="_blank"
        class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Me</a>
</div>
<div class="col-lg-6 text-center text-lg-start">
    <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
</div>
    
@endsection
@section('content')

<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    <h5 class="mb-3">Digital Marketing</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-search text-primary mb-4"></i>
                    <h5 class="mb-3">SEO & Backlinks</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                    <h5 class="mb-3">Design & Development</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Facts Start -->
<div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{ $totalProducts }}</h1>
                <p class="text-white mb-0">Active products</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fas fa-dollar-sign fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{$totalPrice}}</h1>
                <p class="text-white mb-0">Total inventory value in USD</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-cart-plus fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{$totalStock}}</h1>
                <p class="text-white mb-0">Total inventory quantity</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-child fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{$totalUsers}}</h1>
                <p class="text-white mb-0">Active users</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Services<span></span></p>
            <h1 class="text-center mb-5">What Solutions We Provide</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-search fa-2x"></i>
                    </div>
                    <h5 class="mb-3">SEO Optimization</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-laptop-code fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Web Design</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Social Media Marketing</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-mail-bulk fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Email Marketing</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-thumbs-up fa-2x"></i>
                    </div>
                    <h5 class="mb-3">PPC Advertising</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa-android fa-2x"></i>
                    </div>
                    <h5 class="mb-3">App Development</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                        sed stet lorem.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



@endsection('content')