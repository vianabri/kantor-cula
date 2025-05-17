@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-6">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header text-white text-center" style="background: linear-gradient(to right, #4e73df, #224abe);">
                    <h4 class="mb-0">✨ Daftar Akun Baru</h4>
                    <p class="small mb-0">Silakan isi informasi di bawah untuk mendaftar</p>
                </div>
                <div class="card-body px-5 py-4 bg-light">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">👤 Nama Lengkap</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control rounded-pill @error('name') is-invalid @enderror" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">📧 Alamat Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control rounded-pill @error('email') is-invalid @enderror" required>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">🔒 Kata Sandi</label>
                            <input type="password" name="password" class="form-control rounded-pill @error('password') is-invalid @enderror" required>
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">🔁 Konfirmasi Kata Sandi</label>
                            <input type="password" name="password_confirmation" class="form-control rounded-pill" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-pill shadow-sm">
                            🚀 Daftar Sekarang
                        </button>
                    </form>
                </div>
                <div class="card-footer text-center bg-white rounded-bottom-4">
                    <small class="text-muted">Sudah punya akun? <a href="{{ route('login') }}" class="text-primary fw-bold">Masuk di sini</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
