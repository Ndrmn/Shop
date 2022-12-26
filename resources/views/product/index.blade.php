@extends('../main.app')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">All products</h3>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start shop area-->
            <section class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-3">
                            <div class="btn-mobile-filter d-xl-none"><i class='bx bx-slider-alt'></i>
                            </div>
                            <div class="filter-sidebar d-none d-xl-flex">
                                <div class="card rounded-0 w-100">
                                    <div class="card-body">
                                        <div class="align-items-center d-flex d-xl-none">
                                            <h6 class="text-uppercase mb-0">Filter</h6>
                                            <div class="btn-mobile-filter-close btn-close ms-auto cursor-pointer"></div>
                                        </div>
                                        <hr class="d-flex d-xl-none" />
                                        <div class="product-categories">
                                            <h6 class="text-uppercase mb-3">Categories</h6>
                                            <ul class="list-unstyled mb-0 categories-list">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Men">
                                                        <label class="form-check-label" for="Medium">Men</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Women">
                                                        <label class="form-check-label" for="Large">Women</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Kids">
                                                        <label class="form-check-label" for="ExtraLarge">Kids</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="price-range">
                                            <h6 class="text-uppercase mb-3">Price</h6>
                                            <div class="my-4" id="slider"></div>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-dark btn-sm text-uppercase rounded-0 font-13 fw-500">Filter</button>
                                                <div class="ms-auto">
                                                    <p class="mb-0">Price: $200.00 - $900.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="size-range">
                                            <h6 class="text-uppercase mb-3">Type</h6>
                                            <ul class="list-unstyled mb-0 categories-list">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Classic">
                                                        <label class="form-check-label" for="Small">Classic</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Digital">
                                                        <label class="form-check-label" for="Medium">Digital</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Smart">
                                                        <label class="form-check-label" for="Large">Smart</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="product-brands">
                                            <h6 class="text-uppercase mb-3">Brands</h6>
                                            <ul class="list-unstyled mb-0 categories-list">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Brand">
                                                        <label class="form-check-label" for="Adidas">Brand</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Brand">
                                                        <label class="form-check-label" for="Armani">Brand</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Brand">
                                                        <label class="form-check-label" for="CalvinKlein">Brand</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Brand">
                                                        <label class="form-check-label" for="Columbia">Brand</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Brand">
                                                        <label class="form-check-label" for="JhonPlayers">Brand</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Brand">
                                                        <label class="form-check-label" for="Diesel">Brand</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-9">
                            <div class="product-wrapper">
                                <div class="toolbox d-flex align-items-center mb-3 gap-2">
                                    <div class="d-flex flex-wrap flex-grow-1 gap-1">
                                        <div class="d-flex align-items-center flex-nowrap">
                                            <p class="mb-0 font-13 text-nowrap">Sort By:</p>
                                            <select class="form-select ms-3 rounded-0">
                                                <option value="menu_order" selected="selected">Default sorting</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="d-flex align-items-center flex-nowrap">
                                            <p class="mb-0 font-13 text-nowrap">Show:</p>
                                            <select class="form-select ms-3 rounded-0">
                                                <option>10</option>
                                                <option>20</option>
                                                <option>50</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="card rounded-0 product-card">
                                        <div class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="assets/images/products/01.png" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text me-5">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="fs-5">$49.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-flex gap-2">
                                                                <a href="javascript:;" class="btn btn-dark btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class="bx bx-zoom-in"></i>Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top my-3"></div>
                                    <div class="card rounded-0 product-card">
                                        <div class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="assets/images/products/02.png" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text me-5">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="fs-5">$49.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-flex gap-2">
                                                                <a href="javascript:;" class="btn btn-dark btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class="bx bx-zoom-in"></i>Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top my-3"></div>
                                    <div class="card rounded-0 product-card">
                                        <div class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                            <a href="javascript:;">
                                                <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="assets/images/products/03.png" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text me-5">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="fs-5">$49.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-flex gap-2">
                                                                <a href="javascript:;" class="btn btn-dark btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class="bx bx-zoom-in"></i>Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <nav class="d-flex justify-content-between" aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="javascript:;"><i class='bx bx-chevron-left'></i> Prev</a>
                                        </li>
                                    </ul>
                                    <ul class="pagination">
                                        <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span>
                                        </li>
                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">2</a>
                                        </li>
                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">3</a>
                                        </li>
                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">4</a>
                                        </li>
                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">5</a>
                                        </li>
                                    </ul>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="javascript:;" aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
            <!--end shop area-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
