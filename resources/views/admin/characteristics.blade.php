<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
    <meta name="author" content="Bootlab">

    <title>Admin panel</title>

    <link href="{{asset('../../assets/css/light.css')}}" rel="stylesheet">

    <style>
        .hiddenElem {
            display: none;
        }
        body {
            opacity: 0;
        }
    </style>
    <script src="{{asset('../assets/js/settings.js')}}"></script>
    <!-- END SETTINGS -->
</head>

<body>
<div class="splash active">
    <div class="splash-icon"></div>
</div>

<div class="wrapper">
    <nav id="sidebar" class="sidebar">
        <a class="sidebar-brand" href="/">
            <svg>
                <use xlink:href="#ion-ios-pulse-strong"></use>
            </svg>
            Spark
        </a>
        <div class="sidebar-content">
            <div class="sidebar-user">
                <div class="fw-bold">{{ Auth::user()->name }}</div>
                <a class="btn btn-light" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('admin/dashboard')}}">
                        <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Products</span>
                    </a>
                    <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('admin/products/all')}}">All products</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('admin/products/add')}}">Add new</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('admin/users')}}">
                        <i class="align-middle me-2 fas fa-fw fa-user"></i> <span class="align-middle">Users</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{asset('admin/characteristics')}}">
                        <i class="align-middle me-2 fas fa-fw fa-wrench"></i> <span class="align-middle">Сharacteristics</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('admin/transactions')}}">
                        <i class="align-middle me-2 fas fa-fw fa-dollar"></i> <span class="align-middle">Transactions</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main">
        <nav class="navbar navbar-expand navbar-theme">
            <a class="sidebar-toggle d-flex me-2 mt-3">
                <i class="hamburger align-self-center"></i>
            </a>
        </nav>
        <main class="content">
            <div class="container-fluid">

                <div class="header">
                    <h1 class="header-title">
                        Characteristics
                    </h1>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('category.store')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Add new category:</label>
                                        <input type="text" value="{{old('title')}}" name="title" id="title" class="form-control" placeholder="Category" required minlength="3" maxlength="25">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Categories</h5>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:90%;">Title</th>
                                    <th style="width:10%;">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="hiddenElem">
                                                <form action="{{route('category.update', $category->id)}}" method="post" class="d-flex">
                                                    @csrf
                                                    @method(('patch'))
                                                    <input type="text" class="form-control" name="title" id="title" value="{{$category->title}}">
                                                    <button type="submit" class="btn btn-success ms-1">Save</button>
                                                </form>
                                            </td>
                                            <td>{{$category->title}}</td>
                                            <td class="table-action">
                                                <i style="cursor: pointer" class="align-middle fas fa-fw fa-pen editBtn"></i>
                                                <form style="display: inline-flex" action="{{ route('category.delete', $category->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button style="padding:0px" class="btn btn-outline-white" type="submit" value="Delete"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('type.store')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Add new type:</label>
                                        <input type="text" value="{{old('title1')}}" name="title1" id="title" class="form-control" placeholder="Type" required minlength="3" maxlength="25">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Types</h5>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:90%;">Title</th>
                                    <th style="width:10%;">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($types as $type)
                                    <tr>
                                        <td class="hiddenElem">
                                            <form action="{{route('category.update', $type->id)}}" method="post" class="d-flex">
                                                @csrf
                                                @method(('patch'))
                                                <input type="text" class="form-control" name="title1" id="title" value="{{$type->title}}">
                                                <button type="submit" class="btn btn-success ms-1">Save</button>
                                            </form>
                                        </td>
                                        <td>{{$type->title}}</td>
                                        <td class="table-action">
                                            <i style="cursor: pointer" class="align-middle fas fa-fw fa-pen editBtn"></i>
                                            <form style="display: inline-flex" action="{{ route('type.delete', $type->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button style="padding:0px" class="btn btn-outline-white" type="submit" value="Delete"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('brand.store')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Add new brand:</label>
                                        <input type="text" value="{{old('title2')}}" name="title2" id="title" class="form-control" placeholder="Brand" required minlength="1" maxlength="50">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Brands</h5>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:90%;">Title</th>
                                    <th style="width:10%;">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td class="hiddenElem">
                                            <form action="{{route('category.update', $brand->id)}}" method="post" class="d-flex">
                                                @csrf
                                                @method(('patch'))
                                                <input type="text" class="form-control" name="title2" id="title" value="{{$brand->title}}">
                                                <button type="submit" class="btn btn-success ms-1">Save</button>
                                            </form>
                                        </td>
                                        <td>{{$brand->title}}</td>
                                        <td class="table-action">
                                            <i style="cursor: pointer" class="align-middle fas fa-fw fa-pen editBtn"></i>
                                            <form style="display: inline-flex" action="{{ route('type.delete', $brand->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button style="padding:0px" class="btn btn-outline-white" type="submit" value="Delete"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
        </footer>
    </div>
</div>

<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path
                d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
            </path>
        </symbol>
    </defs>
</svg>
<script src="{{asset('assets/js/dashboard/app.js')}}"></script>
<script src="{{asset('assets/js/dashboard/script.js')}}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables clients
        $("#datatables-clients").DataTable({
            responsive: true,
            order: [
                [1, "asc"]
            ]
        });
    });
</script>
</body>

</html>
