<b>{{ $node->name }}</b>

@php

$sharedNode = $selectedSharing->sharedNode($node)->first();

@endphp

@if(!$sharedNode)
<form action="/sharings/{{ $selectedSharing->id }}/nodes/{{ $node->id }}/shared-nodes" method="post">
	@csrf
	<button type="submit" class="btn btn-success btn-sm">Crea permessi</button>    
</form>

@else
<form action="/shared-nodes/{{ $sharedNode->id }}" method="post">
	@csrf
	@method('put')

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="can_create" name="can_create" @if($sharedNode->can_create) checked @endif>
        <label class="form-check-label" for="can_create">
        	Can Create
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="can_read" name="can_read" @if($sharedNode->can_read) checked @endif>
        <label class="form-check-label" for="can_read">
        	Can Read
        </label>
    </div>
    
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="can_update" name="can_update" @if($sharedNode->can_update) checked @endif>
        <label class="form-check-label" for="can_update">
        	Can Update
        </label>
    </div>
    
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="can_delete" name="can_delete" @if($sharedNode->can_delete) checked @endif>
        <label class="form-check-label" for="can_delete">
        	Can Delete
        </label>
    </div>
    
    <button type="submit" class="btn btn-success btn-sm">Salva</button>    
</form>
@endif

<ul>

	@foreach($node->children as $child)
	
	<x-sharings.sharing-node :selectedSharing="$selectedSharing" :node="$child"/>
	
	@endforeach
	

	
</ul>