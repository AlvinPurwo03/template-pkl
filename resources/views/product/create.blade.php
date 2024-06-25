@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Data Product
                        <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="">Name Product</label>
                                        <input type="text"
                                            class="form-control @error('name_product') is-invalid @enderror"
                                            name="name_product">
                                        @error('name_product')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Stock</label>
                                        <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                            name="stock">
                                        @error('stock')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Price</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            name="price">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Description</label>
                                        <input type="text"
                                            class="form-control @error('description') is-invalid @enderror"
                                            name="description">
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Name Brand</label>
                                        <input type="text" class="form-control @error('name_brand') is-invalid @enderror"
                                            name="name_brand">
                                        @error('name_brand')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <button class="btn btn-sm btn-success" type="submit">
                                            Simpan
                                        </button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
