<x-guest-layout>

    <div class="login-page">

        <div class="login-container">

            <h1 class="login-title">
                Connexion
            </h1>

            <p class="login-subtitle">
                Connectez-vous à votre compte OutLand
            </p>


            <!-- Session Status -->

            <x-auth-session-status
                class="login-status"
                :status="session('status')"
            />


            <form
                method="POST"
                action="{{ route('login') }}"
                class="login-form"
            >

                @csrf


                <!-- Email Address -->

                <div class="login-form-group">

                    <x-input-label
                        for="email"
                        :value="__('Email')"
                        class="login-label"
                    />

                    <x-text-input
                        id="email"
                        class="login-input"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="login-error"
                    />

                </div>


                <!-- Password -->

                <div class="login-form-group">

                    <x-input-label
                        for="password"
                        :value="__('Password')"
                        class="login-label"
                    />

                    <x-text-input
                        id="password"
                        class="login-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                    />

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="login-error"
                    />

                </div>


                <!-- Remember Me -->

                <div class="login-remember">

                    <label for="remember_me">

                        <input
                            id="remember_me"
                            type="checkbox"
                            name="remember"
                        >

                        <span>
                            {{ __('Remember me') }}
                        </span>

                    </label>

                </div>


                <!-- Actions -->

                <div class="login-actions">

                    @if (Route::has('password.request'))

                        <a
                            class="forgot-password"
                            href="{{ route('password.request') }}"
                        >
                            {{ __('Forgot your password?') }}
                        </a>

                    @endif


                    <button
                        type="submit"
                        class="login-button"
                    >
                        {{ __('Log in') }}
                    </button>

                </div>

            </form>

        </div>

    </div>

</x-guest-layout>