@extends('layouts.app')

@section('content')

<!-- Carousel Start -->
<section id="carousel">
    <div class="header-carousel owl-carousel">
        <!-- Carousel Item 1 -->
        <div class="header-carousel-item position-relative">
            <img src="img/carousel1.png" class="img" style="object-fit: fill;" alt="">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle text-white">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-1">Welcome To</h4>
                                <h1 class="display-1 text-white mb-2">PT Perkebunan Nusantara IV</h1>
                                <p class="mb-5 fs-5"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Item 2 -->
        <div class="header-carousel-item position-relative">
            <img src="img/carousel2.png" class="img" style="object-fit: fill;" alt="">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle text-white">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-start">
                                <h1 class="display-1 text-white mb-2">Our Vision</h1>
                                <h4 class="display-6 fw-light text-white mb-4">To be the world's largest sustainable palm oil producer, which ensures livelihoods for communities and creates value for shareholders.</h4>
                                <p class="mb-5 fs-5"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Item 3 -->
        <div class="header-carousel-item position-relative">
            <img src="img/carousel3.png" class="img" style="object-fit: fill;" alt="">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle text-white">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h1 class="display-1 text-white mb-2">PTPN IV</h1>
                                <p class="display-5 mb-5 fw-light fs-5">PalmCo manages 434,597 Ha of oil palm plantations, along with 46,534 Ha of rubber, 6,255 Ha of tea, and 501 Ha of coffee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Carousel End -->

<!-- Berita Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-4 mb-4">News & Updates</h1>
        </div>

        <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/news3.jpg" class="img-fluid rounded-top w-100" alt="News Image">
                                    <div class="blog-category py-2 px-4">
                                        <span>New Updates</span>
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-map-marker-alt text-primary"></span> PTPN Group
                                        </div>
                                        <div class="small"><span class="fa fa-calendar text-primary"></span> July 28, 2023</div>
                                    </div>
                                    <a href="/news" class="h4 d-inline-block mb-3">BUMN Environmental Movement Invites Residents to Clean the Deli River</a>
                                    <p class="mb-3">SOE Minister Erick Thohir showed his seriousness in addressing environmental issues by collaborating with the entire community and millennial generation through the SOE Environmental Movement. More than 500 participants, including SOE employees and Prima Indonesia University students, directly cleaned the banks of the Deli River in Medan last Friday (28/07).</p>
                                    <a href="/news" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/news2.jpg" class="img-fluid rounded-top w-100" alt="News Image">
                                    <div class="blog-category py-2 px-4">
                                        <span>New Updates</span>
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-map-marker-alt text-primary"></span> Medan
                                        </div>
                                        <div class="small"><span class="fa fa-calendar text-primary"></span> July 28, 2023</div>
                                    </div>
                                    <a href="/news" class="h4 d-inline-block mb-3">PTPN III (Persero) Exports Palm Kernel Expeller to China Worth Rp18.2 Billion</a>
                                    <p class="mb-3">Holding Perkebunan Nusantara PTPN III (Persero) held the release of the first export of palm kernel meal with the destination of Huangpu, China, worth IDR 18.2 billion (1.2 million USD) at the Port of Belawan, Medan, North Sumatra</p>
                                    <a href="/news" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/news.jpeg" class="img-fluid rounded-top w-100" alt="News Image">
                                    <div class="blog-category py-2 px-4">
                                        <span>New Updates</span>
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-map-marker-alt text-primary"></span> Jakarta
                                        </div>
                                        <div class="small"><span class="fa fa-calendar text-primary"></span> August 7, 2023</div>
                                    </div>
                                    <a href="/news" class="h4 d-inline-block mb-3">PTPN Group dan Suntory Garuda Buka Pasar Baru, Ekspor Perdana Teh Oolong Indonesia ke Vietnam</a>
                                    <p class="mb-3">PT Perkebunan Nusantara (PTPN) Group, in collaboration with PT Suntory Garuda Beverage, has successfully embarked on its maiden export of Oolong tea to Vietnam for Suntory Pepsico Vietnam Beverage. </p>
                                    <a href="/news" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item active">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/news3.jpg" class="img-fluid rounded-top w-100" alt="News Image">
                                    <div class="blog-category py-2 px-4">
                                        <span>New Updates</span>
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-map-marker-alt text-primary"></span> PTPN Group
                                        </div>
                                        <div class="small"><span class="fa fa-calendar text-primary"></span> July 28, 2023</div>
                                    </div>
                                    <a href="/news" class="h4 d-inline-block mb-3">BUMN Environmental Movement Invites Residents to Clean the Deli River</a>
                                    <p class="mb-3">SOE Minister Erick Thohir showed his seriousness in addressing environmental issues by collaborating with the entire community and millennial generation through the SOE Environmental Movement. More than 500 participants, including SOE employees and Prima Indonesia University students, directly cleaned the banks of the Deli River in Medan last Friday (28/07).</p>
                                    <a href="/news" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/news2.jpg" class="img-fluid rounded-top w-100" alt="News Image">
                                    <div class="blog-category py-2 px-4">
                                        <span>New Updates</span>
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-map-marker-alt text-primary"></span> Medan
                                        </div>
                                        <div class="small"><span class="fa fa-calendar text-primary"></span> July 28, 2023</div>
                                    </div>
                                    <a href="/news" class="h4 d-inline-block mb-3">PTPN III (Persero) Exports Palm Kernel Expeller to China Worth Rp18.2 Billion</a>
                                    <p class="mb-3">Holding Perkebunan Nusantara PTPN III (Persero) held the release of the first export of palm kernel meal with the destination of Huangpu, China, worth IDR 18.2 billion (1.2 million USD) at the Port of Belawan, Medan, North Sumatra</p>
                                    <a href="/news" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/news.jpeg" class="img-fluid rounded-top w-100" alt="News Image">
                                    <div class="blog-category py-2 px-4">
                                        <span>New Updates</span>
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-map-marker-alt text-primary"></span> Jakarta
                                        </div>
                                        <div class="small"><span class="fa fa-calendar text-primary"></span> August 7, 2023</div>
                                    </div>
                                    <a href="/news" class="h4 d-inline-block mb-3">PTPN Group dan Suntory Garuda Buka Pasar Baru, Ekspor Perdana Teh Oolong Indonesia ke Vietnam</a>
                                    <p class="mb-3">PT Perkebunan Nusantara (PTPN) Group, in collaboration with PT Suntory Garuda Beverage, has successfully embarked on its maiden export of Oolong tea to Vietnam for Suntory Pepsico Vietnam Beverage. </p>
                                    <a href="/news" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls Below Content -->
            <div class="text-center mt-4">
                <button class="carousel-control-prev d-inline-block" type="button" data-bs-target="#blogCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-inline-block" type="button" data-bs-target="#blogCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Berita End -->


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
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="/products">Read More</a>
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
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="/products">Read More</a>
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
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="/products">Read More</a>
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
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="/products">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Produk End -->

@endsection