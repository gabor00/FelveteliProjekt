@extends('layout')

@section('title', 'Edit')

@section('head_bar')
@section('content')
            
    <div class="container-fluid px-4">
        <br />
        <h1 class="mt-4">Edit {{ $company->name }}</h1>
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
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="tax_number" class="form-label">Tax Number </label>
                        <input type="text" class="form-control" id="tax_number" name="tax_number" value="{{ old('tax_number', $company->tax_number) }}">
                        @error('tax_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" pattern="[0-9.-()]*" name="phone" value="{{ old('phone', $company->phone) }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $company->email) }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>                                
                </form>
            </div>  
        </div>
    </div>
@endsection