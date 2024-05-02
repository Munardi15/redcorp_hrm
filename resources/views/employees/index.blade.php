@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Daftar Karyawan
                    </div>
                    <div class="card-body">
                        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Tambah Karyawan</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Status</th>
                                    <th>Tanggal Bergabung</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->dob }}</td>
                                        <td>{{ $employee->status }}</td>
                                        <td>{{ $employee->join_date }}</td>
                                        <td>
                                            <a href="{{ route('employees.show', $employee->id) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                            <a href="{{ route('employees.edit', $employee->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?')">Hapus</button>
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
@endsection
