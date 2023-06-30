@extends('backend.main')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Role</h1>

    <form action="{{ route('role.update', $roles->id_role) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nama_role">Nama Role</label>
            <input type="text" class="form-control" name="nama_role" id="nama_role" value="{{ $roles->nama_role }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
