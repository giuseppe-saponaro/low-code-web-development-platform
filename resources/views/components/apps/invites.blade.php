<x-layout>


	<div class="d-flex flex-row h-100">
	
		<div class="border-end w-25 h-100 p-4">	

			<ul>

            	<li><a href="/invites">Inviti</a></li>
            	
            	<ul>
            
                	@foreach($apps as $app)
                	
                	@php
                	
                	$start = "#";
                	
                	if (isset($app->starts[0])) {
                		
                		$id = $app->starts[0]->id;
                		
                		$start = "/render/$id";
                	
                	}
                	
                	@endphp
                	
                	<li><a href="/apps/{{ $app->id }}/sharings">{{ $app->name }}</a> <a href="{{ $start }}" target="_blank">START</a></li>
                	
                	@endforeach
                	
                
                	
                </ul>
            
            </ul>
			
		</div>
	
		<div class="flex-grow-1">
			
		</div>
	
	</div>

</x-layout>
