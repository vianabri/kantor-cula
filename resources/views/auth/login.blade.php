@extends('layouts.auth')

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-8 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">

                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                        <p class="mb-4">Silakan login untuk masuk ke sistem.</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="user">
                        @csrf

                        <div class="form-group">
                            <input type="email" class="form-control form-control-user"
                                name="email" placeholder="Alamat Email..." value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <small class="text-danger pl-3">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control form-control-user"
                                name="password" placeholder="Password" required>
                            @error('password')
                                <small class="text-danger pl-3">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Ingat saya</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Login
                        </button>

                    </form>

                </div>
            </div>

        </div>

    </div>

</div>
@endsection
