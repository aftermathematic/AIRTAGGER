<div class="list-group">
    <a href="{{ route('history') }}" class="list-group-item list-group-item-action">&#9657; View Airtag history</a>
    <a href="{{ route('upload') }}" class="list-group-item list-group-item-action">&#9657; Upload Airtag data</a>
    <a href="{{ route('user.edit') }}" class="list-group-item list-group-item-action {{ (request()->is('updateprofile')) ? 'active' : '' }}">&#9657; Update profile</a>
    <a href="{{ route('user.editpw') }}" class="list-group-item list-group-item-action">&#9657; Change password</a>
    <a href="{{ route('user.show', ['id' => Auth::user()->id]) }}" class="list-group-item list-group-item-action">&#9657; View profile</a>
</div>