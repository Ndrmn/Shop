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
                                                <a href="{{asset( route('user.cart',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Cart <i class='bx bx-cart-alt fs-5'></i></a>
                                                <a href="{{asset( route('user.orders',  Auth::user()->id))}}" class="list-group-item d-flex justify-content-between align-items-center active">Orders <i class='bx bx-shopping-bag fs-5'></i></a>
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
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Date</th>
                                                        <th>Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($transactions as $transaction)
                                                        <tr>
                                                            <td>{{$transaction->id}}</td>
                                                            <td>{{$transaction->created_at}}</td>
                                                            <td>$ {{$transaction->total}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
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
