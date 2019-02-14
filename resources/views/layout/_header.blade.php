<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Facebook</a>
        <ul class="navbar-nav justify-content-end">
            @if(Auth::check())
                <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">members</a> </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('users.show', Auth::user())}}">Center</a>
                        <a class="dropdown-item" href="{{route('users.edit', Auth::user())}}">Edit file</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="logout" href="#">
                            <form method="post", action="{{route('logout')}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-block btn-danger" type="submit" name="button">log out</button>

                            </form>
                        </a>
                    </div>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{route('help')}}">help</a> </li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">log in</a> </li>
            @endif
        </ul>
    </div>
</nav>