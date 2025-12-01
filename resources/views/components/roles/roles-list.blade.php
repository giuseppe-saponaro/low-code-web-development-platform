<ul>

    <li><a class="btn btn-sm btn"href="/apps/app">{{ __("main.roles.App") }}</a></li>

	<li><a class="btn btn-sm btn" href="/roles">{{ __("main.roles.Roles") }}</a></li>

	<ul>
		@foreach($roles as $role)
		<li><a class="btn btn-sm btn" href="/roles/{{ $role->id }}">{{ $role->name }}</a></li>
		@endforeach

    </ul>

</ul>
