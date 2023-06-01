@extends('layout')

@section('title', 'Companies')

@section('head_bar')

@section('content')
    <div class="container-fluid px-4">
        <br />
        <h1 class="mt-4">Companies</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Tax Number</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Company Name</th>
                            <th>Tax Number</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->tax_number }}</td>
                                <td>
                                    <a href="{{ route('companies.show', $company->id) }}" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    <a href="{{ route('companies.create') }}" class="btn btn-success">Add Company</a>
            </div>
        </div>
    </div>
@endsection
