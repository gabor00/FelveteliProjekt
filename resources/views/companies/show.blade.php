@extends('layout')

@section('title', 'Detailed View')

@section('auth')
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
@endsection

@section('content')
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
@endsection
