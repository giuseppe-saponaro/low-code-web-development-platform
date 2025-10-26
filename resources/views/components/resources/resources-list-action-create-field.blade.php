<form action="/resources/{{ $selectedResource->id }}/fields" method="post">
	@csrf
	<div class="row g-1">
		<div class="form-floating">
			<input type="text" class="form-control form-control-sm" name="name"/>
			<label>Nome nuovo campo</label>
		</div>
			
		<div class="mb-3 form-floating">
            <select class="form-select" name="field_type" aria-label="Tipo di campo">
                <option selected>Seleziona uno ...</option>
                @foreach($Utility::getValues() as $value => $field)
                <option value="{{ $value }}" @if ($value == old('field_type', $Utility::getSectedFieldType($selectedResource))) selected @endif>{{ $field["label"] }}</option>
                @endforeach
            </select>
			<label>Tipo di campo</label>
        </div>

		<button type="submit" class="btn btn-primary btn-sm">Salva</button>

	</div>
   		
    	
</form>