<div class="container">

	@foreach($children as $child)
	
	@php
	$component = $child->getSectedNodeViewType();
	@endphp

	@if($component)
	<x-dynamic-component :component="$component" :children="$child->children" />
	@endif
	
	@endforeach

</div>