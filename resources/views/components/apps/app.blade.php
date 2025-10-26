<div class="mb-3 pb-3 border-bottom">

	<h5>{{ $selectedApp->name }}</h5>

   	<form action="/apps/{{ $selectedApp->id }}" method="post">
   		@csrf
   		@method('put')
   		
		<div class="mb-3 form-floating">
			<input type="text" class="form-control form-control-sm" name="name" value="{{ old('name', $selectedApp->name) }}"/>
			<label>Nome app</label>
		</div>
        
        <button type="submit" class="btn btn-primary btn-sm mb-3">Salva</button>
       		
	</form>
	
</div>