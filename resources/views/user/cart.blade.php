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
                                                <a href="{{asset( route('user.wishlist',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Wishlist <i class='bx bx-heart fs-5'></i></a>
                                                <a href="{{asset( route('user.cart',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center active">Cart <i class='bx bx-cart-alt fs-5'></i></a>
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
                                            <div class="shop-cart-list mb-3 p-3">
                                                @foreach($products as $product)
                                                    <div class="row align-items-center g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="d-lg-flex align-items-center gap-2">
                                                                <div class="cart-img text-center text-lg-start">
                                                                    @foreach($product->images as $image)
                                                                        @if ($loop->first)
                                                                            <img src="{{asset('/storage/' . $image->url)}}" width="130" alt="">
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                <div class="cart-detail text-center text-lg-start">
                                                                    <h6 class="mb-2">
                                                                        @foreach($brands as $brand)
                                                                            @if($brand->id == $product->brand_id)
                                                                                {{$brand->title}}
                                                                            @endif
                                                                        @endforeach
                                                                        {{" " . $product->model}}</h6>
                                                                    <h5 class="mb-0">${{$product->price}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @foreach($cartItems as $item)
                                                            @if($item->product_id == $product->id)
                                                                <div class="col-12 col-lg-3">
                                                                    <div class="cart-action text-center">
                                                                        <form action="{{route('cart.change', $product->id)}}" method="post">
                                                                            @csrf
                                                                           <input type="number" name="quantity" class="form-control rounded-0" value="{{$item->quantity}}" min="1" max="100" onchange="this.form.submit()">
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            <div class="col-12 col-lg-3">
                                                            <div class="text-center">
                                                                <form action="{{route('cart.remove', $item->id)}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                                                        <button type="submit" class="btn btn-dark rounded-0 btn-ecomm">
                                                                            <i class='bx bx-x-circle'>
                                                                            </i>
                                                                            Remove
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="my-4 border-top"></div>
                                                @endforeach
                                                <div class="d-lg-flex align-items-center gap-2 cart_buttons">
                                                    <a href="/products" class="btn btn-dark btn-ecomm"><i class='bx bx-shopping-bag'></i> Continue Shoping</a>
                                                    <form action="{{route('cart.removeAll', Auth::user()->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-light btn-ecomm">
                                                            <i class='bx bx-x-circle'></i>
                                                            Clear Cart
                                                        </button>
                                                    </form>
                                                    <a href="{{route('user.cart', Auth::user()->id)}}" class="btn btn-white btn-ecomm"><i class='bx bx-refresh'></i> Update Cart</a>
                                                </div>
                                            </div>
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="col-12 col-xl-4">--}}
                                            <div class="checkout-form p-3 bg-light">
                                                <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                                    <div class="card-body">
                                                        <h5 class="mb-0">Order Total:<span class="float-end">$ {{$total}}.00</span></h5>
                                                        <div class="my-4"></div>
                                                        <div class="d-grid"> <a href="javascript:;" class="btn btn-dark btn-ecomm">Proceed to Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--                                            </div>--}}

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
