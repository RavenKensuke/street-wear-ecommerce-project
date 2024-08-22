@extends('layout._app')

@section('content')


@if (!empty($getGender))
<div class="py-10 bg-img-cover bg-overlay-dark position-relative overflow-hidden bg-pos-center-center rounded-0"
style="background-image: url(../assets/images/banners/banner-category-top.jpg);">
@else
<div class="py-10 bg-img-cover bg-overlay-dark position-relative overflow-hidden bg-pos-center-center rounded-0"
style="background-image: url(./assets/images/banners/banner-category-top.jpg);">
@endif


<div class="container-fluid position-relative z-index-20" data-aos="fade-right" data-aos-delay="300">
    <h1 class="fw-bold display-6 mb-4 text-white">Latest Arrivals</h1>
    <div class="col-12 col-md-6">
        <p class="text-white mb-0 fs-5">
            When it's time to head out and get your Kicks on, have a look at our latest arrivals. Whether you're into 
            {{ $getCategory->name }}, we really have something for everyone!
        </p>
    </div>
</div>
</div>
<!-- Category Top Banner -->

<div class="container-fluid" data-aos="fade-in">
<!-- Category Toolbar-->
    <div class="d-flex justify-content-between items-center pt-5 pb-4 flex-column flex-lg-row">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/product')}}">Shop</a></li>
                  @if (!empty($getGender))
                  <li class="breadcrumb-item"><a href="{{ url($getCategory->name)}}">{{ $getCategory->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $getGender->gender }}</li>
                  @else 
                  <li class="breadcrumb-item active" aria-current="page">{{ $getCategory->name }}</li>
                  @endif
                </ol>
            </nav>        <h1 class="fw-bold fs-3 mb-2">{{ $getCategory->name }} </h1>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-4 mt-lg-0 flex-column flex-md-row">
    
    
            <!-- Sort Options-->
                <select class="form-select form-select-sm border-0 bg-light p-3 pe-5 lh-1 fs-7">
                    <option selected>Sort By</option>
                    <option value="3">Lastest</option>
                    <option value="1">High To Low</option>
                    <option value="2">Low To High</option>
                </select>
            <!-- / Sort Options-->
        </div>
    </div>            <!-- /Category Toolbar-->

<!-- Products-->
<div class="row g-4">
        
            <!-- Card Product-->
            @foreach ($getProduct as $value)

            @php
                $getProductImage = $value->getImageSingle($value->id)
            @endphp
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                    {{-- <div class="card-badges">
                            <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span>
                    </div> --}}
                    <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                    <picture class="position-relative overflow-hidden d-block bg-light">
                        @if(!empty($getProductImage))
                        <img  class="w-100 img-fluid position-relative z-index-10" title="" src="{{ url($getProductImage->getLogo()) }}" alt="{{ $value->title }}">
                        @endif
                    </picture>
                        <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                            <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                        </div>
                </div>
                <div class="card-body px-0">
                    <a style="text-decoration: none; font-size: 19px; font-weight: 600;" href="{{ url($value->slug) }}">{{ $value->title }}</a>

                    <a style="text-decoration: none" href="{{ url($value->brand_slug)}}" class="text-muted d-block">{{ $value->brand_name }}</a>

                    <a style="text-decoration: none" href="{{ url($value->category_slug.'/'.$value->gender)}}" class="text-muted d-block">{{ $value->gender }} {{ $value->category_name }}</a>

                    <p class="mt-2 mb-0 small">${{ number_format($value->price, 2) }}</p>
                </div>
            </div>
        </div>
            @endforeach
</div>



<div class="d-flex flex-column f-w-44 mx-auto my-5 text-center">
    <div class="justify-content-center">
            {{ $getProduct->appends(Illuminate\Support\Facades\Request::except('page'))->links() }}
    </div>
</div>            


@endsection