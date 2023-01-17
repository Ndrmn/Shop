    <div class="header-wrapper">
        <div class="header-content pb-3 pb-md-0">
            <div class="container">

                <div class="logo logo_mobile">
                    <a href="/">
                        <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="" />
                    </a>
                </div>

                <div class="row align-items-center justify-content-between">
                    <div class="col-4 col-md-auto">
                        <div class="d-flex align-items-center">
                            <div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
                            </div>
                            <div class="logo d-none d-lg-flex">
                                <a href="/">
                                    <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-auto order-2 order-md-4">
                        <div class="top-cart-icons float-end">
                            <nav class="navbar navbar-expand">
                                <ul class="navbar-nav ms-auto">
                                    @guest
                                        <li class="nav-item"><a class="nav-link cart-link" href="{{ route('login') }}"><i class='bx bx-user'></i></a>
                                        </li>
{{--                                        <li class="nav-item"><a href="/wishlist" class="nav-link cart-link"><i class='bx bx-heart'></i></a>--}}
{{--                                        </li>--}}
                                        <li class="nav-item dropdown dropdown-large">
                                            <a href="/login" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link">
                                                {{--                                            <span class="alert-count">8</span>--}}
                                                <i class='bx bx-cart-alt'></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div class="cart-list">
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item"><a href="{{ route('user.show', Auth::user()->id) }}" class="nav-link cart-link"><img src="{{asset('/storage/' . Auth::user()->avatar)}}" width="30" height="30" style="margin-bottom: 8px;" class="rounded-circle" alt="" /></a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('user.wishlist', Auth::user()->id) }}" class="nav-link cart-link"><i class='bx bx-heart'></i></a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-large">
                                            <a href="{{ route('user.cart', Auth::user()->id) }}" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link">
    {{--                                            <span class="alert-count">8</span>--}}
                                                <i class='bx bx-cart-alt'></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div class="cart-list">
                                                </div>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
        <div class="primary-menu">
            <div class="container">
                <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
                    <div class="offcanvas-header">
                        <button class="btn-close float-end"></button>
                        <h5 class="py-2">Navigation</h5>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item active"> <a class="nav-link" href="/">Home </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="/products">Products</a>
                        </li>
                        @guest()
                            <li class="nav-item"> <a class="nav-link" href="/login">My Account</a>
                            </li>
                        @else
                            <li class="nav-item"> <a class="nav-link" href="{{route('user.show', Auth::user()->id)}}">My Account</a>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
