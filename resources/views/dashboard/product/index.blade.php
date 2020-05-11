@extends('layouts.main_dashboard')

@section('content')
    <div class="page-info container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Apps</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </nav>
                <div class="page-options">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper container">
        <livewire:product />
    </div>
@endsection
