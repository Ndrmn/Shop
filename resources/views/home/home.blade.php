@extends('../main.app')

@section('content')
<!--start slider section-->
<section class="slider-section">
    <div class="first-slider">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active bg-dark-gery">
                    <div class="row d-flex align-items-center">
                        <div class="col d-none d-lg-flex justify-content-center">
                            <div class="">
                                <h3 class="h3 fw-light">Has just arrived!</h3>
                                <h1 class="h1">Huge Summer Collection</h1>
                                <p class="pb-3">Swimwear, Tops, Shorts, Sunglasses &amp; much more...</p>
                                <div class=""> <a class="btn btn-dark btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="assets/images/slider/04.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-dark-gery">
                    <div class="row d-flex align-items-center">
                        <div class="col d-none d-lg-flex justify-content-center">
                            <div class="">
                                <h3 class="h3 fw-light">Hurry up! Limited time offer.</h3>
                                <h1 class="h1">Women Sportswear Sale</h1>
                                <p class="pb-3">Sneakers, Keds, Sweatshirts, Hoodies &amp; much more...</p>
                                <div class=""> <a class="btn btn-dark btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="assets/images/slider/05.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-dark-gery">
                    <div class="row d-flex align-items-center">
                        <div class="col d-none d-lg-flex justify-content-center">
                            <div class="">
                                <h3 class="h3 fw-light">Complete your look with</h3>
                                <h1 class="h1">New Men's Accessories</h1>
                                <p class="pb-3">Hats &amp; Caps, Sunglasses, Bags &amp; much more...</p>
                                <div class=""> <a class="btn btn-dark btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="assets/images/slider/03.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</section>
<!--end slider section-->
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start information-->
        <section class="py-3 border-top border-bottom">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-group align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center p-3 bg-white">
                            <div class="fs-1"><i class='bx bx-taxi'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">FREE SHIPPING &amp; RETURN</h6>
                                <p class="mb-0">Free shipping on all orders over $49</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center p-3 bg-white">
                            <div class="fs-1"><i class='bx bx-dollar-circle'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">MONEY BACK GUARANTEE</h6>
                                <p class="mb-0">100% money back guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center p-3 bg-white">
                            <div class="fs-1"><i class='bx bx-support'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">ONLINE SUPPORT 24/7</h6>
                                <p class="mb-0">Awesome Support for 24/7 Days</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end information-->
        <!--start promotion-->
        <section class="py-4">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card rounded-0 border shadow-none">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="assets/images/promo/01.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Mens' watches</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="javascript:;" class="btn btn-dark btn-ecomm">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-0 border shadow-none">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="assets/images/promo/02.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Womens' watches</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="javascript:;" class="btn btn-dark btn-ecomm">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-0 border shadow-none">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="assets/images/promo/03.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Kids' watches</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="javascript:;" class="btn btn-dark btn-ecomm">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end promotion-->
        <!--start Featured product-->
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0">FEATURED PRODUCTS</h5>
                    <a href="javascript:;" class="btn btn-dark btn-ecomm ms-auto rounded-0">More Products<i class='bx bx-chevron-right'></i></a>
                </div>
                <hr/>
                <div class="product-grid">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                        @foreach($products as $product)
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end gap-3">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="{{asset('/products/' . $product->id )}}">
                                    @foreach($product->images as $image)
                                        @if ($loop->first)
                                            <img src="{{asset('/storage/' . $image->url)}}" class="img-fluid" alt="...">
                                        @endif
                                    @endforeach
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">
                                                @foreach($brands as $brand)
                                                    @if($brand->id == $product->brand_id)
                                                        {{$brand->title}}
                                                    @endif
                                                @endforeach
                                                {{"" . $product->model}}</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price">
                                                <span class="fs-5">${{$product->price}}</span>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-dark btn-ecomm"><i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                <a href="/products/{{$product->id}}" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        <!--end Featured product-->
        <!--start support info-->
        <section class="py-4 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group">
                    <div class="col">
                        <div class="text-center">
                            <div class="font-50">	<i class='bx bx-cart'></i>
                            </div>
                            <h2 class="fs-5 text-uppercase mb-0">Free delivery</h2>
                            <p class="text-capitalize">Free delivery over $199</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <div class="font-50">	<i class='bx bx-credit-card'></i>
                            </div>
                            <h2 class="fs-5 text-uppercase mb-0">Secure payment</h2>
                            <p class="text-capitalize">We possess SSL / Secure сertificate</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <div class="font-50">	<i class='bx bx-dollar-circle'></i>
                            </div>
                            <h2 class="fs-5 text-uppercase mb-0">Free returns</h2>
                            <p class="text-capitalize">We return money within 30 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <div class="font-50">	<i class='bx bx-support'></i>
                            </div>
                            <h2 class="fs-5 text-uppercase mb-0">Customer Support</h2>
                            <p class="text-capitalize">Friendly 24/7 customer support</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end support info-->
    </div>
</div>
<!--end page wrapper -->

<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
</div>
<!--end wrapper-->
@endsection
