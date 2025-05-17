@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-white text-center" style="background: linear-gradient(to right, #4e73df, #224abe);">
                    <h4 class="mb-0">Tambah Data Karyawan</h4>
                    <p class="mb-0 small">Lengkapi form berikut untuk menambahkan data karyawan baru</p>
                </div>
                <div class="card-body bg-light px-5 py-4">
                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3">
                            <strong>Periksa kembali:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nim" class="form-label fw-semibold">Nomor Induk Manajemen (NIM)</label>
                            <input type="text" name="nim" class="form-control rounded-pill @error('nim') is-invalid @enderror" value="{{ old('nim') }}" required>
                            @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nama Karyawan</label>
                            <input type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control rounded-pill @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">Nomor HP</label>
                            <input type="text" name="phone" class="form-control rounded-pill @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                            @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label fw-semibold">Alamat</label>
                            <textarea name="address" rows="3" class="form-control rounded-3 @error('address') is-invalid @enderror" required>{{ old('address') }}</textarea>
                            @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label fw-semibold">Posisi</label>
                            <input type="text" name="position" class="form-control rounded-pill @error('position') is-invalid @enderror" value="{{ old('position') }}" required>
                            @error('position') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="department" class="form-label fw-semibold">Departemen</label>
                            <input type="text" name="department" class="form-control rounded-pill @error('department') is-invalid @enderror" value="{{ old('department') }}" required>
                            @error('department') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="text-end mt-4">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-primary rounded-pill me-2">Kembali</a>
                            <button type="submit" class="btn btn-primary rounded-pill shadow-sm">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
