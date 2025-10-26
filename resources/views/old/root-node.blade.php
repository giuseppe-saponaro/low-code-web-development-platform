<x-layout>


	@if($node->html_type === "App\\Models\\Form")
	
		<x-form>
			@foreach($node->children as $child)
        		<x-node :node="$child"></x-node>
        	@endforeach
		</x-form>
	
	@elseif($node->html_type === "App\\Models\\Section")

		<x-section>
			@foreach($node->children as $child)
        		<x-node :node="$child"></x-node>
        	@endforeach
		</x-section>
		
	@elseif($node->html_type === "App\\Models\\Row")

		<x-section>
			@foreach($node->children as $child)
        		<x-node :node="$child"></x-node>
        	@endforeach
		</x-section>
	
	@endif



	<x-children-bootstrap-modal :nodeId="$node->id"></x-children-bootstrap-modal>

</x-layout>
