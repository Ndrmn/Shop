@extends('../main.app')

@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Allen Solly Men's Polo T-Shirt</h3>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start product detail-->
            <section class="py-4">
                <div class="container">
                    <div class="product-detail-card">
                        <div class="product-detail-body">
                            <div class="row g-0">
                                <div class="col-12 col-lg-5">
                                    <div class="image-zoom-section">
                                        <div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                                            <div class="item">
                                                <img src="{{asset('assets/images/product-gallery/01.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="{{asset('assets/images/product-gallery/02.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="{{asset('assets/images/product-gallery/03.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="{{asset('assets/images/product-gallery/04.png')}}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                            <button class="owl-thumb-item">
                                                <img src="{{asset('assets/images/product-gallery/01.png')}}" class="" alt="">
                                            </button>
                                            <button class="owl-thumb-item">
                                                <img src="{{asset('assets/images/product-gallery/02.png')}}" class="" alt="">
                                            </button>
                                            <button class="owl-thumb-item">
                                                <img src="{{asset('assets/images/product-gallery/03.png')}}" class="" alt="">
                                            </button>
                                            <button class="owl-thumb-item">
                                                <img src="{{asset('assets/images/product-gallery/04.png')}}" class="" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="product-info-section p-3">
                                        <h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
                                        <div class="d-flex align-items-center mt-3 gap-2">
                                            <h4 class="mb-0">$49.00</h4>
                                        </div>
                                        <div class="mt-3">
                                            <h6>Description :</h6>
                                            <p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                                        </div>
                                        <dl class="row mt-3">	<dt class="col-sm-3">Product id</dt>
                                            <dd class="col-sm-9">#BHU5879</dd>
                                        </dl>
                                        <div class="row row-cols-auto align-items-center mt-3">
                                            <div class="col">
                                                <label class="form-label">Quantity</label>
                                                <select class="form-select form-select-sm">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end row-->
                                        <div class="d-flex gap-2 mt-3">
                                            <a href="javascript:;" class="btn btn-white btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </section>
            <!--end product detail-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
