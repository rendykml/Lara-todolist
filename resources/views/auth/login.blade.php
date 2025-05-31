@extends('layouts.app')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #f9a825, #f06292, #42a5f5, #66bb6a);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .auth-card {
            background: white;
            border-radius: 20px;
            border: none;
        }

        .btn-purple {
            background: linear-gradient(90deg, #8e2de2, #4a00e0);
            color: #fff;
            border: none;
            transition: 0.3s ease;
        }

        .btn-purple:hover {
            background: linear-gradient(90deg, #4a00e0, #8e2de2);
        }

        .link-purple {
            color: #7b1fa2;
            font-weight: bold;
        }

        .link-purple:hover {
            color: #4a148c;
            text-decoration: underline;
        }

        .feature-icon i {
            color: #ff7043;
        }

        .todo {
            background: linear-gradient(to right, #ff6f61, #6a82fb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .input-group-text {
            background-color: #f1f1f1;
        }
    </style>

    <div class="min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card auth-card shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <!-- Alert Message -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="text-center mb-4">
                                <h2 class="todo fw-bold mb-4">To-Do-List</h2>
                                <p class="text-muted">Masuk ke akun test</p>
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text border-end-0">
                                            <i class="bi bi-person"></i>
                                        </span>
                                        <input type="text" name="login"
                                            class="form-control border-start-0 @error('login') is-invalid @enderror"
                                            placeholder="Email atau Username" value="{{ old('login') }}" required
                                            autofocus>
                                    </div>
                                    @error('login')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text border-end-0">
                                            <i class="bi bi-key"></i>
                                        </span>
                                        <input type="password" name="password"
                                            class="form-control border-start-0 @error('password') is-invalid @enderror"
                                            placeholder="Password" required>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-purple w-100 mb-3 position-relative overflow-hidden">
                                    <span class="d-flex align-items-center justify-content-center">
                                        Masuk
                                        <i class="ms-2">➜</i>
                                    </span>
                                </button>

                                <div class="text-center">
                                    <a href="{{ route('register') }}" class="link-purple">
                                        Belum Punya Akun? Daftar Sekarang
                                    </a>
                                </div>

                                <div class="mt-4 pt-4 border-top">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon me-2"><i class="bi bi-check-circle"></i></div>
                                                <span class="small text-muted">Task Management</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon me-2"><i class="bi bi-check-circle"></i></div>
                                                <span class="small text-muted">Progress Tracking</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon me-2"><i class="bi bi-check-circle"></i></div>
                                                <span class="small text-muted">Team Collaboration</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon me-2"><i class="bi bi-check-circle"></i></div>
                                                <span class="small text-muted">Priority Settings.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
