<navigation @if(auth()->user()) :user="{{ auth()->user() }}" @endif></navigation>







{{--@guest--}}
{{--    <a href="/">{{ config('app.name', 'Laravel') }}</a>--}}
{{--    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>--}}
{{--    <a href="#" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>--}}
{{--@else--}}
{{--    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--        {{ __('Logout') }}--}}
{{--    </a>--}}
{{--    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--        @csrf--}}
{{--    </form>--}}
{{--@endguest--}}
