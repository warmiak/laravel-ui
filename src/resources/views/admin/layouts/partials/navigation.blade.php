<div class="flex items-center p-2 bg-blue-900 text-white">
    <div>Logo</div>
    <div class="flex flex-1 justify-center items-center">
        <div>Center</div>
    </div>
    <div>
        <a class="mr-2" href="/">
            <i class="material-icons md-28">home</i>
        </a>
        <a class="mr-2" href="/home">
            <i class="material-icons md-28">account_circle</i>
        </a>
        <a class="mr-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="material-icons md-28">power_settings_new</i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
