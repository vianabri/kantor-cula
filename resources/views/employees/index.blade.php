@extends('layouts.app')

@section('title', 'Data Karyawan')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header text-white" style="background: linear-gradient(to right, #4e73df, #224abe);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-0 fw-bold text-white">Data Karyawan</h4>
                    <p class="mb-0 text-white-50 small">Daftar semua karyawan aktif di perusahaan</p>
                </div>
                <a href="{{ route('employees.create') }}" class="btn btn-primary rounded-pill shadow-sm">
                    <i class="fas fa-plus me-1"></i> Tambah Karyawan
                </a>
            </div>
        </div>

        <div class="card-body bg-light p-4">

            @if(session('success'))
                <div class="alert alert-primary rounded-3">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Form Pencarian --}}
            <div class="mb-3">
                <form action="{{ route('employees.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari karyawan..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-outline-primary">Cari</button>
                    <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary ms-2">Reset</a>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle bg-white rounded-3">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($employees as $index => $employee)
                            <tr>
                                <td class="text-center">{{ $employees->firstItem() + $index }}</td>
                                <td class="text-center">{{ $employee->nim }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm rounded-pill me-1">Detail</a>
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm rounded-pill me-1">Edit</a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus karyawan ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm rounded-pill">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">
                                    @if(request('search'))
                                        Data dengan kata kunci "{{ request('search') }}" tidak ditemukan.
                                    @else
                                        Belum ada data karyawan.
                                    @endif
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center mt-3">
                {{ $employees->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
