@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4 px-3 py-3" style="border-left: 5px solid #4e73df;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-uppercase text-primary fw-semibold mb-1" style="font-size: 1.1rem;">
                            Jumlah Staf
                        </p>
                        <h2 class="fw-bold text-dark mb-0" style="font-size: 2.5rem;">
                            {{ $staffCount }} Orang
                        </h2>
                        <small class="text-muted">Karyawan aktif CU Likku Aba</small>
                    </div>
                    <div class="ms-4 d-none d-sm-block">
                        <i class="fas fa-users fa-3x text-primary" style="opacity: 0.4;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
