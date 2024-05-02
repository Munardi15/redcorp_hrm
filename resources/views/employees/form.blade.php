@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        {{ isset($employee) ? 'Edit Karyawan' : 'Tambah Karyawan' }}
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($employee) ? route('employees.update', $employee->id) : route('employees.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($employee))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ isset($employee) ? $employee->name : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="dob">Tanggal Lahir:</label>
                                <input type="date" class="form-control" id="dob" name="dob"
                                    value="{{ isset($employee) ? $employee->dob : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active"
                                        {{ isset($employee) && $employee->status == 'active' ? 'selected' : '' }}>Aktif
                                    </option>
                                    <option value="inactive"
                                        {{ isset($employee) && $employee->status == 'inactive' ? 'selected' : '' }}>
                                        Non-Aktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="join_date">Tanggal Bergabung:</label>
                                <input type="date" class="form-control" id="join_date" name="join_date"
                                    value="{{ isset($employee) ? $employee->join_date : '' }}">
                            </div>
                            <button type="submit"
                                class="btn btn-primary">{{ isset($employee) ? 'Simpan Perubahan' : 'Tambah Karyawan' }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
