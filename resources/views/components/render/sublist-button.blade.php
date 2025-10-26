<div class="container mb-2">
    <a class="btn btn-primary" href="javascript:void(0)" onclick="createRefresh({{ $selectedNode->parent->id }}, '', 'targetMenuContainer')"><i class="bi bi-chevron-left"></i> {{ $selectedNode->parent->name }}</a>
</div>
<x-render.html-list :selectedNode="$selectedNode->html->listBinding->node"></x-render.html-list>
