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
                <div class="fw-bold">Admin</div>
                <small>Admin admin</small>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('admin/dashboard')}}">
                        <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{asset('admin/products')}}">
                        <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Products</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('admin/users')}}">
                        <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('admin/categories')}}">
                        <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Categories</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('admin/transactions')}}">
                        <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Transactions</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main">
        <nav class="navbar navbar-expand navbar-theme">
            <a class="sidebar-toggle d-flex me-2">
                <i class="hamburger align-self-center"></i>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                            <i class="align-middle fas fa-envelope-open"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                            <div class="dropdown-menu-header">
                                <div class="position-relative">
                                    4 New Messages
                                </div>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <img src="{{asset('assets/img/avatars/avatar-5.jpg')}}" class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
                                        </div>
                                        <div class="col-10 ps-2">
                                            <div class="text-dark">Michelle Bilodeau</div>
                                            <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                            <div class="text-muted small mt-1">5m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <img src="{{asset('assets/img/avatars/avatar-3.jpg')}}" class="avatar img-fluid rounded-circle" alt="Kathie Burton">
                                        </div>
                                        <div class="col-10 ps-2">
                                            <div class="text-dark">Kathie Burton</div>
                                            <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                            <div class="text-muted small mt-1">30m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <img src="{{asset('assets/img/avatars/avatar-2.jpg')}}" class="avatar img-fluid rounded-circle" alt="Alexander Groves">
                                        </div>
                                        <div class="col-10 ps-2">
                                            <div class="text-dark">Alexander Groves</div>
                                            <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                            <div class="text-muted small mt-1">2h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <img src="{{asset('assets/img/avatars/avatar-4.jpg')}}" class="avatar img-fluid rounded-circle" alt="Daisy Seger">
                                        </div>
                                        <div class="col-10 ps-2">
                                            <div class="text-dark">Daisy Seger</div>
                                            <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                            <div class="text-muted small mt-1">5h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all messages</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ms-lg-2">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                            <i class="align-middle fas fa-bell"></i>
                            <span class="indicator"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                            <div class="dropdown-menu-header">
                                4 New Notifications
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="ms-1 text-danger fas fa-fw fa-bell"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Update completed</div>
                                            <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                            <div class="text-muted small mt-1">2h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="ms-1 text-warning fas fa-fw fa-envelope-open"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Lorem ipsum</div>
                                            <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                            <div class="text-muted small mt-1">6h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="ms-1 text-primary fas fa-fw fa-building"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Login from 192.186.1.1</div>
                                            <div class="text-muted small mt-1">8h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">New connection</div>
                                            <div class="text-muted small mt-1">Anna accepted your request.</div>
                                            <div class="text-muted small mt-1">12h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ms-lg-2">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
                            <i class="align-middle fas fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i> View Profile</a>
                            <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-comments"></i> Contacts</a>
                            <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
                            <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="content">
            <div class="container-fluid">

                <div class="header">
                    <h1 class="header-title">
                        Products
                    </h1>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions float-end">
                                    <a href="#" class="me-1">
                                        <i class="align-middle" data-feather="refresh-cw"></i>
                                    </a>
                                    <div class="d-inline-block dropdown show">
                                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <i class="align-middle" data-feather="more-vertical"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatables-clients" class="table table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Garrett Winters</td>
                                        <td>Good Guys</td>
                                        <td>garrett@winters.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Ashton Cox</td>
                                        <td>Levitz Furniture</td>
                                        <td>ashton@cox.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Sonya Frost</td>
                                        <td>Child World</td>
                                        <td>sonya@frost.com</td>
                                        <td><span class="badge bg-danger">Deleted</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Jena Gaines</td>
                                        <td>Helping Hand</td>
                                        <td>jena@gaines.com</td>
                                        <td><span class="badge bg-warning">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Quinn Flynn</td>
                                        <td>Good Guys</td>
                                        <td>quinn@flynn.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Charde Marshall</td>
                                        <td>Price Savers</td>
                                        <td>charde@marshall.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-2.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Haley Kennedy</td>
                                        <td>Helping Hand</td>
                                        <td>haley@kennedy.com</td>
                                        <td><span class="badge bg-danger">Deleted</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-2.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Good Guys</td>
                                        <td>tatyana@fitzpatrick.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-3.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Michael Silva</td>
                                        <td>Red Robin Stores</td>
                                        <td>michael@silva.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-3.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Yuri Berry</td>
                                        <td>The Wiz</td>
                                        <td>yuri@berry.com</td>
                                        <td><span class="badge bg-danger">Deleted</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-3.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Doris Wilder</td>
                                        <td>Red Robin Stores</td>
                                        <td>doris@wilder.com</td>
                                        <td><span class="badge bg-warning">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-3.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Angelica Ramos</td>
                                        <td>The Wiz</td>
                                        <td>angelica@ramos.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-4.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Jennifer Chang</td>
                                        <td>Helping Hand</td>
                                        <td>jennifer@chang.com</td>
                                        <td><span class="badge bg-warning">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-4.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Brenden Wagner</td>
                                        <td>The Wiz</td>
                                        <td>brenden@wagner.com</td>
                                        <td><span class="badge bg-warning">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-4.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Fiona Green</td>
                                        <td>The Sample</td>
                                        <td>fiona@green.com</td>
                                        <td><span class="badge bg-warning">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-4.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Suki Burks</td>
                                        <td>The Sample</td>
                                        <td>suki@burks.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-5.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Prescott Bartlett</td>
                                        <td>The Sample</td>
                                        <td>prescott@bartlett.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-5.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Gavin Cortez</td>
                                        <td>Red Robin Stores</td>
                                        <td>gavin@cortez.com</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-5.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Unity Butler</td>
                                        <td>Price Savers</td>
                                        <td>unity@butler.com</td>
                                        <td><span class="badge bg-warning">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('assets/img/avatars/avatar-5.jpg')}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td>Howard Hatfield</td>
                                        <td>Price Savers</td>
                                        <td>howard@hatfield.com</td>
                                        <td><span class="badge bg-warning">Inactive</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
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
