<ul>

	<li><a href="/apps/{{ $ddd->id }}/sharings">Condivisioni {{ $ddd->name }}</a></li>
	
	<ul>

    	@foreach($ddd->sharings as $sharing)
    	
    	<li><a href="/sharings/{{ $sharing->id }}">{{ $sharing->name }}</a></li>
    	
    	@endforeach
    	
    
    	
    </ul>

</ul>
