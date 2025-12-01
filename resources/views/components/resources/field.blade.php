<div class="mb-3 pb-3 border-bottom">

	<h5>{{ $selectedField->name }}</h5>

   	<form action="/fields/{{ $selectedField->id }}" method="post">
   		@csrf
   		@method('put')

		<div class="mb-3 form-floating">
			<input type="text" class="form-control form-control-sm" name="name" value="{{ old('name', $selectedField->name) }}"/>
			<label>{{ __("main.resources.Field name") }}</label>
            @error("name")
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
		</div>

        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" name="required"  @if (true == old('required', $selectedField->required)) checked @endif>
            <label class="form-check-label">
                {{ __("main.resources.Required") }}
            </label>
        </div>

        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" name="unique"  @if (true == old('unique', $selectedField->unique)) checked @endif>
            <label class="form-check-label">
                {{ __("main.resources.Unique") }}
            </label>
        </div>

		<div class="mb-3 form-floating">
            <select class="form-select" name="field_type" aria-label="Tipo di campo">
                <option value ="" selected>{{ __("main.resources.Select") }} ...</option>
                @foreach($Utility::getValues() as $value => $field)
                <option value="{{ $value }}" @if ($value == old('field_type', $Utility::getSectedFieldType($selectedField))) selected @endif>{{ $field["label"] }}</option>
                @endforeach
            </select>
			<label>Type</label>
        </div>

        <button type="submit" class="btn btn-primary btn-sm mb-3">
            <i class="bi bi-save"></i> {{ __("main.resources.Save") }}
        </button>

	</form>

    @isset($fieldFormComponent)
    <x-dynamic-component :component="$fieldFormComponent" :selectedField="$selectedField" />
    @endisset

</div>
