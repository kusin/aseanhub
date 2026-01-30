@extends('layouts.auth')

@section('title', 'Login | ASEAN HUB')

@section('content')

    <h4 class="mb-2">Welcome to ASEAN HUB 👋</h4>
    <p class="text-muted mb-4">
        Please sign-in to your account and start the journey
    </p>

    <form method="POST" action="{{ route('login.process') }}">
        @csrf

        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <div class="input-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="********">
                <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                    <i class="bi bi-eye"></i>
                </span>
            </div>
        </div>

        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" name="remember">
            <label class="form-check-label">Remember Me</label>
        </div>

        <button class="btn btn-primary w-100">
            Sign in
        </button>
    </form>

@endsection

@push('scripts')
    <script>
        document.getElementById('togglePassword')?.addEventListener('click', function() {
            const input = document.getElementById('password');
            const icon = this.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('bi-eye', 'bi-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('bi-eye-slash', 'bi-eye');
            }
        });
    </script>
@endpush
