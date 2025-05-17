@extends('layouts.app')

@section('title', 'Detail Karyawan')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-white text-center" style="background: linear-gradient(to right, #4e73df, #224abe);">
                    <h4 class="mb-0">Detail Karyawan</h4>
                    <p class="mb-0 small">Berikut adalah informasi lengkap karyawan</p>
                </div>
                <div class="card-body bg-light px-5 py-4">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">NIM</label>
                        <p class="form-control rounded-pill bg-white">{{ $employee->nim }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama</label>
                        <p class="form-control rounded-pill bg-white">{{ $employee->name }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <p class="form-control rounded-pill bg-white">{{ $employee->email }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nomor HP</label>
                        <p class="form-control rounded-pill bg-white">{{ $employee->phone }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat</label>
                        <div class="form-control bg-white rounded-3" style="min-height: 90px;">{{ $employee->address }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Posisi</label>
                        <p class="form-control rounded-pill bg-white">{{ $employee->position }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Departemen</label>
                        <p class="form-control rounded-pill bg-white">{{ $employee->department }}</p>
                    </div>

                    <div class="text-end mt-4">
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-primary rounded-pill me-2">← Kembali</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary rounded-pill shadow-sm">Edit Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
