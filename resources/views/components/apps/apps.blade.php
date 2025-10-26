<x-layout>


	<div class="d-flex flex-row h-100">
	
		<div class="border-end w-25 h-100 p-4">
		
			@isset($selectedApp)			
			<x-apps.app :selectedApp="$selectedApp"/> 
			@endisset
		

			<x-apps.apps-list :apps="$apps"/> 
        	
        	@empty($selectedApp)
            <form action="/apps" method="post">
            	@csrf
            	<div class="row g-1">
            		<div class="col-10">
            			<div class="form-floating">
            				<input type="text" class="form-control form-control-sm" name="name"/>
            				<label>Nome nuova app</label>
            			</div>
            			
            		</div>
            		<div class="col-2">
            			<button type="submit" class="btn btn-primary btn-sm">Salva</button>
            		</div>
            	</div>
               		
                	
            </form>
            @endempty
			
		</div>
	
		<div class="flex-grow-1">
			
		</div>
	
	</div>

</x-layout>
