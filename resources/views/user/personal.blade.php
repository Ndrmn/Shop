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
                                                <a href="{{asset('user/1/personal')}}" class="list-group-item active d-flex justify-content-between align-items-center">Personal information <i class='bx bx-user-circle fs-5'></i></a>
                                                <a href="{{asset('user/1/orders')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Orders <i class='bx bx-cart-alt fs-5'></i></a>
                                                <a href="{{asset('user/1/wishlist')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Wishlist <i class='bx bx-heart fs-5'></i></a>
                                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Logout <i class='bx bx-log-out fs-5'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-none mb-0 border">
                                        <div class="card-body">
                                            <form class="row g-3">
                                                <div class="col-12">
                                                    <img src="{{asset('assets/images/default_avatar.svg')}}" class="mb-2 rounded-circle old-image" width="100" height="100" alt="">
                                                    <img src="" class="mb-2 rounded-circle new-image hiddenElem" width="100" height="100" id="result" alt="">
                                                    <br>
                                                    <label class="form-label">User image</label>
                                                    <input type="file" name="image" id="image" class="form-control uploadImage" accept="image/*">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control" value="Madison">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" value="Ruiz">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Email address</label>
                                                    <input type="text" class="form-control" value="madison.ruiz@gmail.com">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Current Password</label>
                                                    <input type="text" class="form-control" value=".................">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">New Password</label>
                                                    <input type="text" class="form-control" value=".................">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Confirm New Password</label>
                                                    <input type="text" class="form-control" value=".................">
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-dark btn-ecomm">Save Changes</button>
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
