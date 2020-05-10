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
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, nobis, quo. Beatae cupiditate dolores doloribus ipsa laudantium molestiae nisi odio quisquam quo quod rem repellendus rerum sint soluta, temporibus voluptatum.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
