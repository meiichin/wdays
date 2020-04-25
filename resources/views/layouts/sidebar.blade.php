<li>
    <a href="{{ route('home') }}" class="waves-effect waves-grey @yield('dashboard')">
        <i class="material-icons">settings_input_svideo</i>Dashboard
    </a>
</li>
<li class="@yield('setting')">
    <a href="#" class="waves-effect waves-grey">
        <i class="material-icons">settings</i>Settings<i class="material-icons sub-arrow">keyboard_arrow_right</i>
    </a>
    <ul class="accordion-submenu list-unstyled">
        <li><a class="@yield('hari-kerja')" href="{{ route('hari-kerja') }}">Hari Kerja</a></li>
        <li><a class="@yield('periode-gajian')" href="{{ route('periode-gajian') }}">Periode Gajian</a></li>
    </ul>
</li>
{{-- garis --}}
<li class="divider"></li>
{{-- logout --}}
<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
