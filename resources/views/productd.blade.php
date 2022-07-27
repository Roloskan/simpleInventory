@extends('template')
@section('toptittle', 'Product Detail')
@section('hero')
<div class="wow fadeInUp" data-wow-delay="0.1s">
  <p class="section-title text-secondary justify-content-center text-white"><span></span>Product Detail<span></span></p>
  <h1 class="text-center mb-5 text-white ">Here you can see the details of your product</h1>
</div>
@endsection
@section('content')
@if ($products_data->count() > 0)
  
<section style="background-color: rgb(255, 255, 255);">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card text-black">
          <i class="fas fa-desktop fa-lg pt-3 pb-1 px-3"></i>
          <img src="{{$products_data->image}}" class="card-img-top" alt="{{$products_data->name}}" />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title">{{$products_data->name}}</h5>
              <p class="text-muted mb-4">{{$products_data->description}}</p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Price</span><span>$ {{$products_data->price}}</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Current Stock</span><span>{{$products_data->quantity}}</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Current status</span>
                @if ($products_data->status == 1)
                <span>Available</span>
                @else
                <span>Not Available</span>
                @endif
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total invetory value</span><span>$ {{$products_data->quantity * $products_data->price }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@else
<div class="container-xxl py-5 ">
  <div class="container py-5 px-lg-5 ">
      <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item d-flex flex-column text-center rounded">
                  <h5 class="mb-3">No products found</h5>
              </div>
          </div>
      </div>
  </div>
</div>
@endif
@endsection