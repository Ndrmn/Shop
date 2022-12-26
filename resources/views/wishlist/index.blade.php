@extends('../main.app')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Wish list</h3>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start wishlist-->
            <section class="py-4">
                <div class="container">
                    <div class="product-grid">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                            <div class="col">
                                <div class="card rounded-0 product-card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"><img class="close_btn" src="{{asset('assets/images/close.svg')}}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="product-details.html">
                                        <img src="assets/images/products/01.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="product-info">
                                            <a href="javascript:;">
                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                            </a>
                                            <a href="javascript:;">
                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <div class="mb-1 product-price">
                                                    <span class="fs-5">$49.00</span>
                                                </div>
                                            </div>
                                            <div class="product-action mt-2">
                                                <div class="d-grid gap-2">
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card rounded-0 product-card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"><img class="close_btn" src="{{asset('assets/images/close.svg')}}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="product-details.html">
                                        <img src="assets/images/products/02.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="product-info">
                                            <a href="javascript:;">
                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                            </a>
                                            <a href="javascript:;">
                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <div class="mb-1 product-price">
                                                    <span class="fs-5">$49.00</span>
                                                </div>
                                            </div>
                                            <div class="product-action mt-2">
                                                <div class="d-grid gap-2">
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card rounded-0 product-card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"><img class="close_btn" src="{{asset('assets/images/close.svg')}}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="product-details.html">
                                        <img src="assets/images/products/03.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="product-info">
                                            <a href="javascript:;">
                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                            </a>
                                            <a href="javascript:;">
                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <div class="mb-1 product-price">
                                                    <span class="fs-5">$49.00</span>
                                                </div>
                                            </div>
                                            <div class="product-action mt-2">
                                                <div class="d-grid gap-2">
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card rounded-0 product-card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"><img class="close_btn" src="{{asset('assets/images/close.svg')}}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="product-details.html">
                                        <img src="assets/images/products/04.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="product-info">
                                            <a href="javascript:;">
                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                            </a>
                                            <a href="javascript:;">
                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <div class="mb-1 product-price">
                                                    <span class="fs-5">$49.00</span>
                                                </div>
                                            </div>
                                            <div class="product-action mt-2">
                                                <div class="d-grid gap-2">
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card rounded-0 product-card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"><img class="close_btn" src="{{asset('assets/images/close.svg')}}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="product-details.html">
                                        <img src="assets/images/products/05.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="product-info">
                                            <a href="javascript:;">
                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                            </a>
                                            <a href="javascript:;">
                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <div class="mb-1 product-price">
                                                    <span class="fs-5">$49.00</span>
                                                </div>
                                            </div>
                                            <div class="product-action mt-2">
                                                <div class="d-grid gap-2">
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card rounded-0 product-card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"><img class="close_btn" src="{{asset('assets/images/close.svg')}}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="product-details.html">
                                        <img src="assets/images/products/06.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="product-info">
                                            <a href="javascript:;">
                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                            </a>
                                            <a href="javascript:;">
                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <div class="mb-1 product-price">
                                                    <span class="fs-5">$49.00</span>
                                                </div>
                                            </div>
                                            <div class="product-action mt-2">
                                                <div class="d-grid gap-2">
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card rounded-0 product-card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"><img class="close_btn" src="{{asset('assets/images/close.svg')}}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="product-details.html">
                                        <img src="assets/images/products/07.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="product-info">
                                            <a href="javascript:;">
                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                            </a>
                                            <a href="javascript:;">
                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <div class="mb-1 product-price">
                                                    <span class="fs-5">$49.00</span>
                                                </div>
                                            </div>
                                            <div class="product-action mt-2">
                                                <div class="d-grid gap-2">
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card rounded-0 product-card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"><img class="close_btn" src="{{asset('assets/images/close.svg')}}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="product-details.html">
                                        <img src="assets/images/products/08.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="product-info">
                                            <a href="javascript:;">
                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                            </a>
                                            <a href="javascript:;">
                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <div class="mb-1 product-price">
                                                    <span class="fs-5">$49.00</span>
                                                </div>
                                            </div>
                                            <div class="product-action mt-2">
                                                <div class="d-grid gap-2">
                                                    <a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Details</a>
                                                </div>
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



        </div>
    </div>
    <!--end page wrapper -->
@endsection
