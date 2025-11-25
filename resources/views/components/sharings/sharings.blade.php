<x-layout>

	<div class="d-flex flex-row h-100">

		<div class="border-end w-25 h-100 p-4">

			@isset($selectedSharing)
			<x-sharings.sharing :selectedSharing="$selectedSharing" />
			@endisset

            @isset($sharings)
			<x-sharings.sharings-list :sharings="$sharings"/>
            @endisset

            @empty($selectedSharing)
            <form action="/sharings" method="post">
            	@csrf
            	<div class="row g-1">
            		<div class="col-10">
            			<div class="form-floating">
            				<input type="text" class="form-control form-control-sm" name="name"/>
            				<label>Nome nuova condivisione</label>
                            @error("name")
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
            			</div>

            		</div>
            		<div class="col-2">
            			<button type="submit" class="btn btn-primary btn-sm">Salva</button>
            		</div>
            	</div>


            </form>
            @endempty

            @isset($selectedSharing)
            <script>
                function confirmDelete() {
                    if(confirm("Confermi di voler cancellare la condivisione selezionata ?")) {
                        window.location.href = "/sharings/{{ $selectedSharing->id }}/delete";
                    }
                }
            </script>
            <a class="btn btn-primary btn-danger btn-sm mt-3" href="javascript:void(0)" onclick="confirmDelete()" role="button">Elimina condivisione</a>
			@endisset

		</div>

		<div class="flex-grow-1">

		</div>

	</div>

</x-layout>
