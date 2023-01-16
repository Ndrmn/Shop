@extends('../main.app')

@section('content')
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
                                    <img src="assets/images/main-page/m.jpg" class="img-fluid mt-1 mb-1" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Men's<br>watches</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="/products?categories%5B%5D=1" class="btn btn-dark btn-ecomm">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-0 border shadow-none">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="assets/images/main-page/w.jpg" class="img-fluid mt-1 mb-1" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Women's<br>watches</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="/products?categories%5B%5D=2" class="btn btn-dark btn-ecomm">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-0 border shadow-none">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="assets/images/main-page/k.png" class="img-fluid mt-1 mb-1" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Kid's<br>watches</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="/products?categories%5B%5D=3" class="btn btn-dark btn-ecomm">SHOP NOW</a>
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
                    <a href="/products" class="btn btn-dark btn-ecomm ms-auto rounded-0">More Products<i class='bx bx-chevron-right'></i></a>
                </div>
                <hr/>
                <div class="product-grid">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                        @foreach($products as $product)
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end gap-3">
                                        @auth()
                                        <form action="{{route('user.wishlist.store', $product->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="border-0 bg-transparent">
                                                <div class="product-wishlist">

                                                        @if (Auth::user()->favorites->contains($product->id))
                                                            <i class="bx bxs-heart"></i>
                                                        @else
                                                            <i class="bx bx-heart"></i>
                                                        @endif

                                                </div>
                                            </button>
                                        </form>
                                        @else
                                            <i class="bx bx-heart"></i>
                                        @endauth
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
                                                @auth()
                                                    <form action="{{route('cart.add', $product->id)}}" method="post">
                                                        @csrf
                                                        <input type="text" name="quantity" value="1" class="d-none">
                                                        <button type="submit" class="border-0 bg-transparent" style="padding: 0px;width: 100%">
                                                            <div class="btn btn-dark btn-ecomm"  style="width: 100%">
                                                                <i class="bx bxs-cart-add"></i>
                                                                Add to Cart
                                                            </div>
                                                        </button>
                                                    </form>
                                                @else
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a>
                                                @endauth
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
