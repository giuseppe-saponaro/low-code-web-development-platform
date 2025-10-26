@if(Auth::user()->canRead($selectedNode))
<x-dynamic-component :component="$component" :selectedNode="$selectedNode" />
@endif
