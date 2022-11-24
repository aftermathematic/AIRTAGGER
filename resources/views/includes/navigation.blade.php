
<ul class="nav nav-pills">
    <li class="btn border-0"><a href="{{ route('home') }}" class="nav-link pg">Home</a></li>
    <li class="btn border-0"><a href="{{ route('news') }}" class="nav-link pg">News</a></li>
    <li class="btn border-0"><a href="{{ route('faq') }}" class="nav-link pg">FAQ</a></li>
    <li class="btn border-0"><a href="{{ route('about') }}" class="nav-link pg">About</a></li>
    <li class="btn border-0"><a href="{{ route('contact') }}" class="nav-link pg">Contact</a></li>

    @guest
    <li class="btn border-0"><a href="{{ route('login') }}" class="btn btn-primary btn-block mb-4">Login</a></li>
    @else
    <li class="btn border-0"><a href="{{ route('logout') }}" class="btn btn-danger btn-block mb-4">Logout</a></li>
    @endguest
</ul>


