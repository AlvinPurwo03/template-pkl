@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="card border-secondary">
                <div class="card-header">Data Product
                    <a href="{{route('product.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name Product</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Name Brand</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            @foreach ($product as $item)
                            <tbody>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->name_product}}</td>
                                    <td>{{$item->stock}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->brand->name_brand}}</td>
                                    <td>
                                        <form action="{{route('product.destroy',$item->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('product.edit',$item->id)}}" class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a href="{{route('product.show',$item->id)}}" class="btn btn-sm btn-warning">
                                                Show
                                            </a>

                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
