    <x-guest-layout>

        <div class="authentication h-100">
            <div class="container-fluid h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-4">
                        <div class="authentication-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">

                                        <div class="text-center mb-3">
                                            <a href="/">
                                                <img src="{{ asset('images/soscom.png') }}" alt=""
                                                    style="height: 30px;">
                                            </a>

                                        </div>

                                        <h4 class="text-center mb-4">School Sign in</h4>

                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group">
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="form-control" type="email"
                                                    name="email" value="{{ old('email') }}" required />

                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="mt-4 form-group">
                                                <x-input-label for="password" :value="__('Password')" />

                                                <x-text-input id="password" class="form-control" type="password"
                                                    name="password" required autocomplete="current-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>

                                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                                <div class="form-group">
                                                    <label for="remember_me" class="inline-flex items-center">
                                                        <input id="remember_me" type="checkbox"
                                                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 border focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800 mr-1"
                                                            name="remember">
                                                        <span
                                                            class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    @if (Route::has('password.request'))
                                                        <a class="underline text-sm text-warning hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                            href="{{ route('password.request') }}">
                                                            {{ __('Forgot your password?') }}
                                                        </a>
                                                    @endif
                                                </div>

                                            </div>
                                            <x-primary-button label="Log in" class="w-100" />

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-partner"
            style="position: absolute; bottom: 0; width: 100%; text-align: center; padding: 10px;">
            <p><a href="#" class="underline">soscom technologies @2025</a> | <a href="#"
                    class="underline">Contact Us</a> | <a href="#" class="underline">FAQs</a> </p>
        </div>


    </x-guest-layout>
