<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 text-center text-white">
            <div class="mb-4">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
                <h1 class="display-4" style="color: #ffffff;">login</h1>
                <p class="lead" style="color: #a0aec0;">login  and start managing your candidates!</p>
            </div>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="alert alert-success mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <input id="email" class="form-control form-control-lg rounded-pill bg-dark-subtle text-black border-0" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Username" style="background-color: #1a3647;" />
                </div>

                <div class="mb-3">
                    <input id="password" class="form-control form-control-lg rounded-pill bg-dark-subtle text-black border-0" type="password" name="password" required autocomplete="current-password" placeholder="Password" style="background-color: #1a3647;" />
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4 text-white">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember" style="background-color: #ffffff; border-color: #ffffff;">
                        <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="text-decoration-none text-white-50" href="{{ route('password.request') }}" style="color: #a0aec0 !important;">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>

                <button type="submit" class="btn btn-lg rounded-pill w-100" style="background-color: #00e676; border-color: #00e676; color: #1a3647;">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>