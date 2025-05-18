@extends('layouts.app')

@section('title', 'Detail Karyawan')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Karyawan</h1>

    <a href="{{ route('employees.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <td>{{ $employee->name }}</td>
        </tr>
        <tr>
            <th>Posisi</th>
            <td>{{ $employee->position }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $employee->email }}</td>
        </tr>
        <tr>
            <th>Dibuat Pada</th>
            <td>{{ $employee->created_at->format('d M Y H:i') }}</td>
        </tr>
        <tr>
            <th>Diperbarui Pada</th>
            <td>{{ $employee->updated_at->format('d M Y H:i') }}</td>
        </tr>
    </table>
</div>
@endsection
