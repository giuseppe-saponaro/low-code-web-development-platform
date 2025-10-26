<ul>

	<li><a href="/apps/{{ $ddd->id }}/roles">Ruoli</a></li>
	
	<ul>
		@foreach($ddd->roles as $role)
		<li><a href="/roles/{{ $role->id }}">{{ $role->name }}</a></li>
		@endforeach

    </ul>

</ul>