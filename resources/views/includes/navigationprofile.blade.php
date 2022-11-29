<div class="list-group">
    <a href="/items" class="list-group-item list-group-item-action">&#9657; View Airtag history</a>
    <a href="/upload" class="list-group-item list-group-item-action">&#9657; Upload Airtag data</a>
    <a href="{{ route('updateprofile') }}" class="list-group-item list-group-item-action {{ (request()->is('updateprofile')) ? 'active' : '' }}">&#9657; Update profile</a>
    <a href="/changepw" class="list-group-item list-group-item-action">&#9657; Change password</a>
    <a href="/changeavatar" class="list-group-item list-group-item-action">&#9657; Change profile photo</a>
    <a href="/user/{{ $user->username }}" class="list-group-item list-group-item-action">&#9657; View profile</a>
</div>