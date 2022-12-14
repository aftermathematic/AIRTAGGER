<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group me-2" role="group" aria-label="First group">
        <a href="{{ route('home') }}" class="btn btn-lg btn-light {{ (request()->is('home')) ? 'active' : '' }}">Home</a>
        <a href="{{ route('news') }}" class="btn btn-lg btn-light {{ (request()->is('news')) ? 'active' : '' }}">News</a>
        <a href="{{ route('faq') }}" class="btn btn-lg btn-light {{ (request()->is('faq')) ? 'active' : '' }}">FAQ</a>
        <a href="{{ route('about') }}" class="btn btn-lg btn-light {{ (request()->is('about')) ? 'active' : '' }}">About</a>
        <a href="{{ route('contact') }}" class="btn btn-lg btn-light {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
    </div>

    <div class="btn-group me-2" role="group" aria-label="Second group">
        @if ( @session()->get('user.admin') == 1)
        <a href="{{ route('admin') }}" class="btn btn-lg btn-primary">Admin</a>
        @endif
    </div>

    <div class="btn-group" role="group" aria-label="Third group">
        @guest
        <a href="{{ route('login') }}" class="btn btn-lg btn-primary">Login</a>
        @else
        <a href="{{ route('profile') }}" class="btn btn-lg btn-secondary">Profile</a>
        <a href="{{ route('logout') }}" class="btn btn-lg btn-danger">Logout</a>
        @endguest
    </div>
</div>