<div class="mb-3">
    <label class="form-label">{{ $selectedNode->name }}</label>
    <input type="date" class="form-control" name="nodes[{{ $selectedNode->id }}]" value="{{ $value }}">
</div>
