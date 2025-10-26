<ul>

	<li><a href="/apps">Radice</a></li>
	
	<ul>

    	@foreach($apps as $app)
    	
    	<li><a href="/apps/{{ $app->id }}">{{ $app->name }}</a></li>
    	
    	<ul>
    	
    		<li><a href="/apps/{{ $app->id }}/resources">Risorse</a></li>
    		
    		<li><a href="/apps/{{ $app->id }}/nodes">Nodi</a></li>
    		
    		<li><a href="/apps/{{ $app->id }}/roles">Ruoli</a></li>
    	
    	</ul>
    	
    	@endforeach
    	
    
    	
    </ul>

</ul>
