@extends('layouts.main_dashboard')

@section('content')
    <div class="page-info container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Apps</a></li>
                        <li class="breadcrumb-item" aria-current="page">Product</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
                <div class="page-options">
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('product.store') }}">
                            @csrf
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Banana" value="{{ old('name') }}">
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="2"></textarea>
                                <small class="text-danger">{{ $errors->first('description') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sale?</label>
                                <select name="is_sale" id="is_sale" class="form-control">
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sale">Price Before Sale</label>
                                <input type="text" class="form-control separator currency" id="sale_price" value="{{ old('price_before_sale') }}" placeholder="1.000.000" disabled>
                                <input type="hidden" name="price_before_sale" class="separator-hidden" value="{{ old('price_before_sale') }}">
                            </div>
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price">Price</label>
                                <input type="text" class="form-control separator currency" value="{{ old('price') }}" placeholder="1.000.000">
                                <input type="hidden" name="price" class="separator-hidden" value="{{ old('price') }}">
                                <small class="text-danger">{{ $errors->first('price') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount in percent</label>
                                <input type="number" name="discount" id="discount" class="form-control" placeholder="50" disabled>
                            </div>
                            <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                <label for="qty">Quantity</label>
                                <input type="number" name="quantity" class="form-control" placeholder="100" value="{{ old('quantity') }}">
                                <small class="text-danger">{{ $errors->first('quantity') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label for="weight">Weight</label>
                                <input type="text" name="weight" class="form-control" id="exampleInputPassword1" placeholder="1 KG" value="{{ old('weight') }}">
                                <small class="text-danger">{{ $errors->first('weight') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label for="exampleInputPassword1">Category</label>
                                <select name="category_id" class="form-control" tabindex="-1" style="display: none; width: 100%">
                                    <option></option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">{{ $errors->first('category_id') }}</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $( "#is_sale" ).change(function() {
            var selectSale = $(this).children("option:selected").val();
            if (selectSale !== 'no'){
                $('#sale_price').attr("disabled", false);
                $('#discount').attr("disabled", false);
            } else {
                $('#sale_price').attr("disabled", true);
                $('#discount').attr("disabled", true);
            }
        });
    </script>
@endsection
