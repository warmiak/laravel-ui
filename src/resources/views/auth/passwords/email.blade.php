@extends('layouts.app')

@section('content')
<div class="container mx-auto">

    @if (session('status'))
        <div class="flex bg-yellow-lighter max-w-sm mb-4">
            <div class="w-16 bg-yellow">
                <div class="p-4">
                    <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M503.191 381.957c-.055-.096-.111-.19-.168-.286L312.267 63.218l-.059-.098c-9.104-15.01-23.51-25.577-40.561-29.752-17.053-4.178-34.709-1.461-49.72 7.644a66 66 0 0 0-22.108 22.109l-.058.097L9.004 381.669c-.057.096-.113.191-.168.287-8.779 15.203-11.112 32.915-6.569 49.872 4.543 16.958 15.416 31.131 30.62 39.91a65.88 65.88 0 0 0 32.143 8.804l.228.001h381.513l.227.001c36.237-.399 65.395-30.205 64.997-66.444a65.86 65.86 0 0 0-8.804-32.143zm-56.552 57.224H65.389a24.397 24.397 0 0 1-11.82-3.263c-5.635-3.253-9.665-8.507-11.349-14.792a24.196 24.196 0 0 1 2.365-18.364L235.211 84.53a24.453 24.453 0 0 1 8.169-8.154c5.564-3.374 12.11-4.381 18.429-2.833 6.305 1.544 11.633 5.444 15.009 10.986L467.44 402.76a24.402 24.402 0 0 1 3.194 11.793c.149 13.401-10.608 24.428-23.995 24.628z"/><path d="M256.013 168.924c-11.422 0-20.681 9.26-20.681 20.681v90.085c0 11.423 9.26 20.681 20.681 20.681 11.423 0 20.681-9.259 20.681-20.681v-90.085c.001-11.421-9.258-20.681-20.681-20.681zM270.635 355.151c-3.843-3.851-9.173-6.057-14.624-6.057a20.831 20.831 0 0 0-14.624 6.057c-3.842 3.851-6.057 9.182-6.057 14.624 0 5.452 2.215 10.774 6.057 14.624a20.822 20.822 0 0 0 14.624 6.057c5.45 0 10.772-2.206 14.624-6.057a20.806 20.806 0 0 0 6.057-14.624 20.83 20.83 0 0 0-6.057-14.624z"/></svg>
                </div>
            </div>
            <div class="w-auto text-grey-darker items-center p-4">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <div class="flex justify-center px-6 my-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <!-- Col -->
            <div
                class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                style="background-image: url('/images/email-reset.jpeg')"
            ></div>
            <!-- Col -->
            <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                <div class="px-8 mb-4 text-center">
                    <h3 class="pt-4 mb-2 text-2xl">Passwort vergessen ?</h3>
                    <p class="mb-4 text-sm text-gray-700">
                        Das passiert sogar den besten. Geben Sie einfach Ihre E-Mail Adresse ein und
                        wir senden Ihnen einen Link zum zurücksetzen Ihres Passwortes!
                    </p>
                </div>
                <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border @error('email') border-red-500 @enderror rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            placeholder="E-Mail Adresse eingeben ..."
                        />
                        @error('email')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                            Passwort zurücksetzen
                        </button>
                    </div>
                    <hr class="mb-6 border-t" />
                    <div class="text-center">
                        <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('register') }}">
                            Registrieren
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('login') }}">
                            Sie haben bereits ein Konto? Melden Sie sich an!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
