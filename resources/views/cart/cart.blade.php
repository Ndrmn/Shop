@extends('../main.app')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Shop Cart</h3>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start shop cart-->
            <section class="py-4">
                <div class="container">
                    <div class="shop-cart">
                        <div class="row">
                            <div class="col-12 col-xl-8">
                                <div class="shop-cart-list mb-3 p-3">
                                    <div class="row align-items-center g-3">
                                        <div class="col-12 col-lg-6">
                                            <div class="d-lg-flex align-items-center gap-2">
                                                <div class="cart-img text-center text-lg-start">
                                                    <img src="assets/images/products/01.png" width="130" alt="">
                                                </div>
                                                <div class="cart-detail text-center text-lg-start">
                                                    <h6 class="mb-2">White Regular Fit Polo T-Shirt</h6>
                                                    <p class="mb-0">Size: <span>Regular</span>
                                                    </p>
                                                    <p class="mb-2">Color: <span>White & Blue</span>
                                                    </p>
                                                    <h5 class="mb-0">$19.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="cart-action text-center">
                                                <input type="number" class="form-control rounded-0" value="2" min="1">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="text-center">
                                                <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="javascript:;" class="btn btn-dark rounded-0 btn-ecomm"><i class='bx bx-x-circle'></i> Remove</a>
                                                    <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-heart me-0'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4 border-top"></div>
                                    <div class="row align-items-center g-3">
                                        <div class="col-12 col-lg-6">
                                            <div class="d-lg-flex align-items-center gap-2">
                                                <div class="cart-img text-center text-lg-start">
                                                    <img src="assets/images/products/17.png" width="130" alt="">
                                                </div>
                                                <div class="cart-detail text-center text-lg-start">
                                                    <h6 class="mb-2">Fancy Red Sneakers</h6>
                                                    <p class="mb-0">Size: <span>Small</span>
                                                    </p>
                                                    <p class="mb-2">Color: <span>White & Red</span>
                                                    </p>
                                                    <h5 class="mb-0">$16.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="cart-action text-center">
                                                <input type="number" class="form-control rounded-0" value="2" min="1">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="text-center">
                                                <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="javascript:;" class="btn btn-dark rounded-0 btn-ecomm"><i class='bx bx-x-circle'></i> Remove</a>
                                                    <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-heart me-0'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4 border-top"></div>
                                    <div class="row align-items-center g-3">
                                        <div class="col-12 col-lg-6">
                                            <div class="d-lg-flex align-items-center gap-2">
                                                <div class="cart-img text-center text-lg-start">
                                                    <img src="assets/images/products/04.png" width="130" alt="">
                                                </div>
                                                <div class="cart-detail text-center text-lg-start">
                                                    <h6 class="mb-2">Yellow Shine Blazer</h6>
                                                    <p class="mb-0">Size: <span>Medium</span>
                                                    </p>
                                                    <p class="mb-2">Color: <span>Yellow & Blue</span>
                                                    </p>
                                                    <h5 class="mb-0">$22.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="cart-action text-center">
                                                <input type="number" class="form-control rounded-0" value="2" min="1">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="text-center">
                                                <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="javascript:;" class="btn btn-dark rounded-0 btn-ecomm"><i class='bx bx-x-circle'></i> Remove</a>
                                                    <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-heart me-0'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4 border-top"></div>
                                    <div class="row align-items-center g-3">
                                        <div class="col-12 col-lg-6">
                                            <div class="d-lg-flex align-items-center gap-2">
                                                <div class="cart-img text-center text-lg-start">
                                                    <img src="assets/images/products/09.png" width="130" alt="">
                                                </div>
                                                <div class="cart-detail text-center text-lg-start">
                                                    <h6 class="mb-2">Men Black Hat Cap</h6>
                                                    <p class="mb-0">Size: <span>Medium</span>
                                                    </p>
                                                    <p class="mb-2">Color: <span>Black</span>
                                                    </p>
                                                    <h5 class="mb-0">$14.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="cart-action text-center">
                                                <input type="number" class="form-control rounded-0" value="1" min="1">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="text-center">
                                                <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="javascript:;" class="btn btn-dark rounded-0 btn-ecomm"><i class='bx bx-x-circle'></i> Remove</a>
                                                    <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-heart me-0'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4 border-top"></div>
                                    <div class="d-lg-flex align-items-center gap-2 cart_buttons">
                                        <a href="javascript:;" class="btn btn-dark btn-ecomm"><i class='bx bx-shopping-bag'></i> Continue Shoping</a>
                                        <a href="javascript:;" class="btn btn-light btn-ecomm "><i class='bx bx-x-circle'></i> Clear Cart</a>
                                        <a href="javascript:;" class="btn btn-white btn-ecomm"><i class='bx bx-refresh'></i> Update Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="checkout-form p-3 bg-light">
                                    <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                        <div class="card-body">
                                            <h5 class="mb-0">Order Total: <span class="float-end">212.00</span></h5>
                                            <div class="my-4"></div>
                                            <div class="d-grid"> <a href="javascript:;" class="btn btn-dark btn-ecomm">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </section>
            <!--end shop cart-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
