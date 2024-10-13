@extends('layouts.app')

@section('content')

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                            class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Produk Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-0">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-4 mb-2">Our Products</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 wow fadeInUp mb-3 px-3" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0"
                    style="background-image: url('img/produk.jpg'); background-size: cover; background-position: center;">
                    <div class="feature-icon p-4 mb-4">
                        <img src="img/palm.svg" class="svg-icon" alt="Icon" width="48" height="48" />
                    </div>

                    <h4 class="mb-4 text-white display-6">Palm Oil</h4>
                    <p class="mb-4 text-white">Our business consists of integrated planting and harvesting of fresh
                        fruit bunches from our oil palm plantations, processing them into crude palm oil, palm
                        kernel and palm kernel oil, and selling the resulting oil. PalmCo has a Total Planted Area
                        of ​​586,843 hectares in 2024, spread across the islands of Sumatra, Java, Kalimantan and
                        Sulawesi. PalmCo will continue to carry out the conversion and utilization of non-productive
                        land. The oil palm Planted Area is projected to reach 708,000 hectares in 2030.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp mb-3 px-3" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0"
                    style="background-image: url('img/produk2.jpg'); background-size: cover; background-position: center;">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-tree fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-white display-6">Rubber</h4>
                    <p class="mb-4 text-white">Rubber is one of the commodities managed by PalmCo, rubber
                        plantations managed are spread throughout Indonesia through regions in each region and
                        subsidiaries of PalmCo. Has a Total Planted Area of ​​46,534 hectares.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp mb-3 px-3" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0"
                    style="background-image: url('img/produk3.jpg'); background-size: cover; background-position: center;">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-leaf fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-white display-6">Tea</h4>
                    <p class="mb-4 text-white">PalmCo manages tea commodities covering 1% of its entire plantation
                        business. The tea business is coordinated by Region II and IV. Both are spread across North
                        Sumatra and Jambi which produce some of the best tea products, such as Butong Tea, Tobasari
                        Tea and Kayu Aro Tea. It has a Total Planted Area of ​​6,254 hectares.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp mb-3 px-3" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0"
                    style="background-image: url('img/produk4.jpg'); background-size: cover; background-position: center;">
                    <div class="feature-icon p-4 mb-4">
                        <img src="img/coffe.svg" class="svg-icon" alt="Icon" width="48" height="48" />
                    </div>
                    <h4 class="mb-4 text-white display-6">Coffe</h4>
                    <p class="mb-4 text-white">Coffee is one of the commodities managed by PalmCo, coffee
                        plantations managed are spread throughout Indonesia through regions in each region and
                        PalmCo subsidiaries. Has a Total Planted Area of ​​4,254 hectares.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="text-center mt-4 mb-5">
                <a href="/" class="display-6"><i class="fas fa-home"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Produk End -->

@endsection