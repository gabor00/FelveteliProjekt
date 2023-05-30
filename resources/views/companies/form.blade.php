<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit {{ $company->name }}</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js') }}" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar-->
            <li class="btn btn-info"><a href="javascript:history.back()">Back</a></li>
            <ul class="navbar-nav ms-auto ms-md-end me-3 me-lg-4">
                    
                @if(isset(Auth::user()->email))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('/login/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                        <script>window.location="/login";</script>
                @endif
            </ul>
        </nav>
        <div id="layoutSidenav_content">
            <main>
            
                <div class="container-fluid px-4">
                    <h1>Edit {{ $company->name }}</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ $action }}" method="POST" id="form">
                                @csrf
                                @if ($method)
                                    @method($method)
                                @endif
                                <div class="mb-4">
                                    <label for="name" class="form-label">Company Name </label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $company->name) }}">
                                </div>
                                <div class="mb-4">
                                    <label for="tax_number" class="form-label">Tax Number </label>
                                    <input type="text" class="form-control" id="tax_number" name="tax_number" value="{{ old('tax_number', $company->tax_number) }}">
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $company->phone) }}">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $company->email) }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                
                            </form>
                        </div>  
                    </div>
                </div>
            </main>
        </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
