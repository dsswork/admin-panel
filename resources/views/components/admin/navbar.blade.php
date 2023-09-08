<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"
                onclick="document.querySelector('#logout').submit()">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
    <form id="logout" action="{{ route('logout') }}" method="post">
        @csrf
    </form>
</nav>

