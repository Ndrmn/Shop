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
                                                <a href="{{asset( route('user.show',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center active">Personal information <i class='bx bx-user-circle fs-5'></i></a>
                                                <a href="{{asset( route('user.wishlist',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Wishlist <i class='bx bx-heart fs-5'></i></a>
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
                                            <form action="{{route('user.update', Auth::user()->id)}}" class="row g-3" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('patch')
                                                <div class="col-12">
                                                    <img src="{{asset('/storage/' . Auth::user()->avatar)}}" class="mb-2 rounded-circle old-image" width="100" height="100" alt="">
                                                    <img src="" class="mb-2 rounded-circle new-image hiddenElem" width="100" height="100" id="result" alt="">
                                                    <br>
                                                    <label class="form-label">Avatar</label>
                                                    <input type="file" name="avatar" class="form-control uploadImage" accept="image/*,image/jpeg">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Name" minlength="1" maxlength="255" required value="{{old('name') ? old('name') : Auth::user()->name}}">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control" type="email" name="email" placeholder="Email" required value="{{old('email') ? old('email') : Auth::user()->email}}">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Phone</label>
                                                    <input class="form-control" type="tel" name="phone" placeholder="Phone" value="{{old('phone') ? old('phone') : Auth::user()->phone}}">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control" placeholder="Password" min="8" max="255" value="{{old('password')}}">
                                                </div>
                                                    <button type="submit" class="btn btn-dark btn-ecomm">Save Changes</button>
                                                </div>
                                            </form>
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
