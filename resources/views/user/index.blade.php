@extends('layouts.backend.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">Tablle Users</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div>
                <a href="{{ route('user.create') }}" type="button" class="btn btn-success px-4 raised gap-2"><i
                        class="material-icons-outlined">account_circle</i></a>

            </div>
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Admin?</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $data)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->is_admin ? 'Admin' : 'User' }}</td>
                            <td>
                                <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('user.show', $data->id) }}" type="button"
                                        class="btn btn-outline-primary "><i class="material-icons-outlined">search</i></a>
                                    <a href="{{ route('user.edit', $data->id) }}" type="button"
                                        class="btn btn-warning px-2">EDIT</a>
                                    <button type="submit" class="btn ripple btn-danger px-2"
                                        onclick="return confirm('Apakah Anda Yakin Untuk Menghapus?')">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
