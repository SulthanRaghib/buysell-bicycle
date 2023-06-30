@extends('backend.main')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Role</h1>

    <a href={{ route('role.create') }} class="btn btn-primary">Tambah Role</a>

    <div class="my-3">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id_role }}</td>
                            <td>{{ $role->nama_role }}</td>
                            <td class="d-flex">
                                <a href={{ route('role.edit', $role->id_role) }} class="btn btn-warning mr-2">Edit</a>
                                <form action="{{ route('role.destroy', $role->id_role) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
