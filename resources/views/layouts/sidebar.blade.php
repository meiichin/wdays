<li>
    <a href="{{ route('home') }}" class="waves-effect waves-grey active">
        <i class="material-icons">settings_input_svideo</i>Dashboard
    </a>
</li>
{{-- garis --}}
<li class="divider"></li>
{{-- logout --}}
<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
