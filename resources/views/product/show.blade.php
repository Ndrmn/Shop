@extends('../main.app')

@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">{{$product->brand . ' ' . $product->model}}</h3>
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
                                            @foreach($images as $image)
                                                <div class="item">
                                                    <img src="{{asset('/storage/' . $image->url)}}" class="img-fluid" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                            @foreach($images as $image)
                                            <button class="owl-thumb-item">
                                                <img src="{{asset('/storage/' . $image->url)}}" class="" alt="">
                                            </button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="product-info-section p-3">
                                        <h3 class="mt-3 mt-lg-0 mb-0">{{$product->brand . ' ' . $product->model}}</h3>
                                        <div class="d-flex align-items-center mt-3 gap-2">
                                            <h4 class="mb-0">${{$product->price}}</h4>
                                        </div>
                                        <div class="mt-3">
                                            <h6>Description :</h6>
                                            <p class="mb-0">{{$product->description}}</p>
                                        </div>
                                        <dl class="row mt-3">	<dt class="col-sm-3">Product id</dt>
                                            <dd class="col-sm-9">{{$product->id}}</dd>
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
