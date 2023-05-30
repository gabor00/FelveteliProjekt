<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Detailed View</title>
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar-->
            <li class="btn btn-info"><a href="../companies">Back</a></li>
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
            <main>
                <div class="container-fluid px-4">
                    <br />
                    <br />
                    <h1 class="mt-4">{{ $company->name }}</h1>
                    <br />
                    <div class="card mb-4">
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Tax Number</th>
                                        <th></th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $company->tax_number }}</td>
                                        <td></td>
                                        <td>{{ $company->phone }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>
                                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-dark">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Törlés</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
