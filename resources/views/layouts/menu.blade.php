<li class="nav-item">
    <a href="{{ route('home') }}"
       class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
        <p> <i class="nav-icon fas fa-tachometer-alt"></i>Dashboard</p>
    </a>
</li>







<li class="nav-item">
    <a href="{{ route('kuisioners.index') }}"
       class="nav-link {{ Request::is('kuisioners*') ? 'active' : '' }}">
        <p>Kuisioners</p>
    </a>
</li>


<li class="nav-item">
    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="nav-icon fas fa-sign-out"></i>
        <p>Logout</p>
    </a>
</li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>



