<x-guest-layout>
    {{--  <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>  --}}

    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1 w-full sm:w-full">

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession



        <div class="flex-1 lg:w-1/2 xl:w-5/12 p-6 sm-3">
            <!-- Logo -->
            <div class="text-center">
                {{--  <img src="https://storage.googleapis.com/devitary-image-host.appspot.com/15846435184459982716-LogoMakr_7POjrN.png"
                    class="w-32 mx-auto" alt="Logo" />  --}}
            </div>

            <!-- Heading -->
            <div class="mt-12">

                <h1 class="text-2xl xl:text-3xl font-extrabold text-center">
                    Selamat Datang Di Pendaftaraan Admin Berita
                </h1>
                <!-- Social Login Buttons -->
                <div class="mt-2">
                    <x-validation-errors class="mb-4" />
                </div>

                <!-- Email and Password Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mt-12">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name"
                            class="w-full px-8 py-4 rounded-lg bg-gray-100 border placeholder-gray-500 focus:outline-none focus:ring focus:ring-indigo-200"
                            type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" placeholder="Email"
                            class="w-full px-8 py-4 rounded-lg bg-gray-100 border placeholder-gray-500 focus:outline-none focus:ring focus:ring-indigo-200" />

                        <x-label for="password" :value="__('Password')" class="mt-4" />
                        <x-input id="password" type="password" name="password" required autocomplete="current-password"
                            placeholder="Password"
                            class="w-full px-8 py-4 mt-4 rounded-lg bg-gray-100 border placeholder-gray-500 focus:outline-none focus:ring focus:ring-indigo-200" />

                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation"
                            class="w-full px-8 py-4 mt-4 rounded-lg bg-gray-100 border placeholder-gray-500 focus:outline-none focus:ring focus:ring-indigo-200"
                            type="password" name="password_confirmation" required autocomplete="new-password" />

                        {{--  <x-button class="mt-6 w-full text-center">
                            {{ __('Log in') }}
                        </x-button>  --}}

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ms-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Terms of Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Privacy Policy') .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif

                        <div class="grip items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-button class="mt-6 w-full text-center">
                                {{ __('Register') }}
                            </x-button>

                        </div>
                </form>
            </div>
        </div>

        {{--  <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
            </div>
        </div>  --}}
    </div>

</x-guest-layout>
