@extends('template')
@section('toptittle', 'Product')
@section('hero')
<div class="wow fadeInUp" data-wow-delay="0.1s">
    <p class="section-title text-secondary justify-content-center text-white"><span></span>Product List<span></span></p>
    <h1 class="text-center mb-5 text-white ">Here you can see your products and their price</h1>
</div>
@endsection
@section('content')
@if ($products_data->count() > 0)
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            @foreach($products_data as $product)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <img class="w-full" src="{{ $product->image }}" alt="Mountain">
                    <h5 class="mb-3">{{ $product->name }}</h5>
                    <p class="m-0">Price: $ {{ $product->price }}</p>
                    <p class="m-0">Stock: {{ $product->quantity }}</p>
                    <a href="{{ route('productslug',['slug'=>$product->slug]) }}"  class="btn btn-primary" role="button">View</a>
                </div>
            </div>
            @endforeach
            {{ $products_data->links() }}
        </div>
    </div>
</div>
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