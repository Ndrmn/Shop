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
                                        <form action="{{route('product.index')}}" method="get">
{{--                                            @csrf--}}
                                            <hr class="d-flex d-xl-none" />
                                            <div class="product-categories">
                                                <h6 class="text-uppercase mb-3">Categories</h6>
                                                <ul class="list-unstyled mb-0 categories-list">
                                                    @foreach($categories as $category)
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="{{$category->id}}" name="categories[]"
                                                            @if($checked_boxes->categories)
                                                                @foreach($checked_boxes->categories as $cat)
                                                                    @if($cat == $category->id)
                                                                        checked
                                                                    @endif
                                                                @endforeach
                                                            @endif>
                                                            <label class="form-check-label">{{$category->title}}</label>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="size-range">
                                                <h6 class="text-uppercase mb-3">Type</h6>
                                                <ul class="list-unstyled mb-0 categories-list">
                                                    @foreach($types as $type)
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="{{$type->id}}" name="types[]"
                                                                   @if($checked_boxes->types)
                                                                       @foreach($checked_boxes->types as $typ)
                                                                           @if($typ == $type->id)
                                                                               checked
                                                                           @endif
                                                                       @endforeach
                                                                    @endif>
                                                            <label class="form-check-label">{{$type->title}}</label>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="product-brands">
                                                <h6 class="text-uppercase mb-3">Brands</h6>
                                                <ul class="list-unstyled mb-0 categories-list">
                                                    @foreach($brands as $brand)
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="{{$brand->id}}" name="brands[]"
                                                                   @if($checked_boxes->brands)
                                                                       @foreach($checked_boxes->brands as $bra)
                                                                           @if($bra == $brand->id)
                                                                               checked
                                                                           @endif
                                                                       @endforeach
                                                                   @endif>
                                                            <label class="form-check-label">{{$brand->title}}</label>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-dark btn-ecomm">Filter</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-9">
                            <div class="product-wrapper">
{{--                                <div class="toolbox d-flex align-items-center mb-3 gap-2">--}}
{{--                                    <div class="d-flex flex-wrap flex-grow-1 gap-1">--}}
{{--                                        <div class="d-flex align-items-center flex-nowrap">--}}
{{--                                            <p class="mb-0 font-13 text-nowrap">Sort By:</p>--}}
{{--                                            <select class="form-select ms-3 rounded-0">--}}
{{--                                                <option value="menu_order" selected="selected">Default sorting</option>--}}
{{--                                                <option value="price">Sort by price: low to high</option>--}}
{{--                                                <option value="price-desc">Sort by price: high to low</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex flex-wrap">--}}
{{--                                        <div class="d-flex align-items-center flex-nowrap">--}}
{{--                                            <p class="mb-0 font-13 text-nowrap">Show:</p>--}}
{{--                                            <select class="form-select ms-3 rounded-0">--}}
{{--                                                <option>10</option>--}}
{{--                                                <option>20</option>--}}
{{--                                                <option>50</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="product-grid">
                                    @foreach($products as $product)
                                        <div class="card rounded-0 product-card">
                                            <div class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
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
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    @foreach($product->images as $image)
                                                        @if ($loop->first)
                                                        <img src="{{asset('/storage/' . $image->url)}}" class="img-fluid" alt="...">
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="product-info">
                                                            <a href="javascript:;">
                                                                <h6 class="product-name mb-2">
                                                                    @foreach($brands as $brand)
                                                                        @if($brand->id == $product->brand_id)
                                                                            {{$brand->title}}
                                                                        @endif
                                                                    @endforeach
                                                                    {{" " . $product->model}}</h6>
                                                            </a>
                                                            <p class="card-text me-5">{{$product->description}}</p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="mb-1 product-price">
                                                                    <span class="fs-5">${{$product->price}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-action mt-2">
                                                                <div class="d-flex gap-2">
                                                                    @auth()
                                                                        <form action="{{route('cart.add', $product->id)}}" method="post">
                                                                            @csrf
                                                                            <input type="text" name="quantity" value="1" class="d-none">
                                                                            <button type="submit" class="border-0 bg-transparent">
                                                                                <div class="btn btn-dark btn-ecomm">
                                                                                    <i class="bx bxs-cart-add"></i>
                                                                                    Add to Cart
                                                                                </div>
                                                                            </button>
                                                                        </form>
                                                                    @else
                                                                        <a href="javascript:;" class="btn btn-dark btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a>
                                                                    @endauth
                                                                    <a href="/products/{{$product->id}}" class="btn btn-light btn-ecomm"><i class="bx bx-zoom-in"></i>Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top my-3"></div>
                                    @endforeach
                                </div>
{{--                                <hr>--}}
{{--                                <nav class="d-flex justify-content-between" aria-label="Page navigation">--}}
{{--                                    <ul class="pagination">--}}
{{--                                        <li class="page-item"><a class="page-link" href="javascript:;"><i class='bx bx-chevron-left'></i> Prev</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <ul class="pagination">--}}
{{--                                        <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">2</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">3</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">4</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">5</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <ul class="pagination">--}}
{{--                                        <li class="page-item"><a class="page-link" href="javascript:;" aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
                                <div>
                                    {{$products->withQueryString()->links()}}
                                </div>
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
