@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center px-6 my-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <!-- Col -->
            <div
                class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                style="background-image: url('/images/register.jpeg')"
            ></div>
            <!-- Col -->
            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                <h3 class="pt-4 text-2xl text-center">Registrieren Sie sich</h3>
                <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                            Benutzername
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded @error('name') border-red-500 @enderror shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            placeholder="Benutzername"
                        />
                        @error('name')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            E-Mail
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded @error('name') border-red-500 @enderror shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            placeholder="E-Mail"
                        />
                        @error('email')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 md:flex md:justify-between">
                        <div class="mb-4 md:mr-2 md:mb-0">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Passwort
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded @error('name') border-red-500 @enderror shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="password"
                                name="password"
                                type="password"
                                value="{{ old('password') }}"
                                placeholder="Passwort"
                            />
                            @error('password')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md:ml-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password_confirmation">
                                Passwort
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                placeholder="Passwort wiederholen"
                            />
                        </div>
                    </div>
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                            Registrieren
                        </button>
                    </div>
                    <hr class="mb-6 border-t" />
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href="{{ route('password.request') }}"
                        >
                            Passwort vergessen ?
                        </a>
                    </div>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href="{{ route('login') }}"
                        >
                            Sie haben bereits ein Konto? Melden Sie sich an!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
