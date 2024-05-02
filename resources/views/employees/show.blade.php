@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Karyawan
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Nama:</strong> {{ $employee->name }}
                        </div>
                        <div class="mb-3">
                            <strong>Tanggal Lahir:</strong> {{ $employee->dob }}
                        </div>
                        <div class="mb-3">
                            <strong>Status:</strong> {{ $employee->status }}
                        </div>
                        <div class="mb-3">
                            <strong>Tanggal Bergabung:</strong> {{ $employee->join_date }}
                        </div>
                        <div class="mb-3">
                            <strong>Pengalaman:</strong> {{ $employeeDetail->experience ?? 'Belum diisi' }}
                        </div>
                        <div class="mb-3">
                            <strong>Judul Pekerjaan:</strong> {{ $employeeDetail->job_title ?? 'Belum diisi' }}
                        </div>
                        <div class="mb-3">
                            <strong>Deskripsi Pekerjaan:</strong> {{ $employeeDetail->job_desc ?? 'Belum diisi' }}
                        </div>
                        <a href="{{ route('employees.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
