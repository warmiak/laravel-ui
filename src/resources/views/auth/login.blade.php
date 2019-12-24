@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center px-6 my-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <!-- Col -->
            <div
                class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                style="background-image: url('/images/login.jpeg')"
            ></div>
            <!-- Col -->
            <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                <h3 class="pt-4 text-2xl text-center">Schön Sie wieder zu sehen</h3>
                <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            E-Mail
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            name="email"
                            type="email"
                            placeholder="E-Mail"
                        />
                        @error('email')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                            Passwort
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="password"
                            name="password"
                            type="password"
                            placeholder="Passwort"
                        />
                        @error('password')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="custom-label flex">
                            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                                <input type="checkbox" class="hidden" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                            </div>
                            <span class="select-none"> Angemeldet bleiben.</span>
                        </label>
                    </div>
                    <div class="mb-6 text-center">
                        <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                            Anmelden
                        </button>
                    </div>
                    <hr class="mb-6 border-t" />
                    <div class="text-center">
                        <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('register') }}">
                            Registrieren
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request') }}">
                            Passwort vergessen ?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
