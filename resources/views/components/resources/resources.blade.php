
<x-layout>

	<div class="d-flex flex-row h-100">

		<div class="border-end w-25 h-100 p-4">

			@isset($selectedResource)
			<x-resources.resource :selectedResource="$selectedResource" />
			@endisset

			@isset($selectedField)
			<x-resources.field :selectedField="$selectedField" />
			@endisset

            @isset($resources)
			<x-resources.resources-list :resources="$resources"/>
            @endisset

        	@if(!isset($selectedResource) && !isset($selectedField))
            <x-resources.resources-list-action-create-resource/>
            @endif

        	@isset($selectedResource)
            <x-resources.resources-list-action-create-field :selectedResource="$selectedResource" />
            <script>
                function confirmDelete() {
                    if(confirm("Confermi di voler cancellare la risorsa selezionata (l'operazione cancellerà campi, nodi e valori correlati) ?")) {
                        window.location.href = "/resources/{{ $selectedResource->id }}/delete";
                    }
                }
            </script>
            <a class="btn btn-primary btn-danger btn-sm mt-3" href="javascript:void(0)" onclick="confirmDelete()" role="button">Elimina risorsa</a>
            @endisset


            @isset($selectedField)
            <script>
                function confirmDelete() {
                    if(confirm("Confermi di voler cancellare il campo selezionato (l'operazione cancellerà nodi e valori correlati) ?")) {
                        window.location.href = "/fields/{{ $selectedField->id }}/delete";
                    }
                }
            </script>
            <a class="btn btn-primary btn-danger btn-sm mt-3" href="javascript:void(0)" onclick="confirmDelete()" role="button">Elimina campo</a>
			@endisset

		</div>

		<div class="flex-grow-1">

		</div>

	</div>

</x-layout>
