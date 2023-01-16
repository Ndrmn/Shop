@extends('../main.app')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Account details</h3>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start shop cart-->
            <section class="py-4">
                <div class="container">
                    <h3 class="d-none">Account</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-none mb-3 mb-lg-0 border">
                                        <div class="card-body">
                                            <div class="list-group list-group-flush">
                                                <a href="{{asset( route('user.show',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Personal information <i class='bx bx-user-circle fs-5'></i></a>
                                                <a href="{{asset( route('user.wishlist',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center active">Wishlist <i class='bx bx-heart fs-5'></i></a>
                                                <a href="{{asset( route('user.cart',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Cart <i class='bx bx-cart-alt fs-5'></i></a>
                                                <a href="{{asset( route('user.orders',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Orders <i class='bx bx-shopping-bag fs-5'></i></a>
                                                <a class="list-group-item d-flex justify-content-between align-items-center bg-transparent" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                    <i class='bx bx-log-out fs-5'></i>
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-none mb-0 border">
                                        <div class="card-body">
                                            <div class="product-grid">
                                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                                                    @foreach($products as $product)
                                                    <div class="col">
                                                        <div class="card rounded-0 product-card">
                                                            <div class="card-header bg-transparent border-bottom-0">
                                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                                    <form action="{{route('user.wishlist.delete', $product->id)}}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="bg-transparent border-0">
                                                                            <div class="product-wishlist">
                                                                                <i class="bx bx-x"></i>
                                                                            </div>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <a href="{{route('product.show', $product->id)}}">
                                                                @foreach($product->images as $image)
                                                                    @if ($loop->first)
                                                                        <img src="{{asset('/storage/' . $image->url)}}" class="card-img-top" alt="...">
                                                                    @endif
                                                                @endforeach
                                                            </a>
                                                            <div class="card-body">
                                                                <div class="product-info">
                                                                    <a href="javascript:;">
                                                                        <p class="product-catergory font-13 mb-1">
                                                                            @foreach($brands as $brand)
                                                                                @if($brand->id == $product->brand_id)
                                                                                    {{$brand->title}}
                                                                                @endif
                                                                            @endforeach</p>
                                                                    </a>
                                                                    <a href="javascript:;">
                                                                        <h6 class="product-name mb-2">{{$product->model}}</h6>
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
                                                                            <a href="{{route('product.show', $product->id)}}" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Details</a>
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
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </section>
            <!--end shop cart-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
