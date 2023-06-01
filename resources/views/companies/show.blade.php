@extends('layout')

@section('title', 'Detailed View')

@section('head_bar')

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
