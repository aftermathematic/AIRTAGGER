<div class="list-group sticky-top">
    <a href="{{ route('admin') }}" class="list-group-item list-group-item-action {{ (request()->is('admin')) ? 'active' : '' }}">&#9657; Messages</a>
    <a href="{{ route('admin_users') }}" class="list-group-item list-group-item-action {{ (request()->is('admin_users')) ? 'active' : '' }}">&#9657; Users</a>
    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>