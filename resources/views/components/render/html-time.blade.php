<div class="mb-3">
    <label class="form-label">{{ $selectedNode->label }}</label>
    <input type="time" class="form-control" name="nodes[{{ $selectedNode->id }}]" value="{{ old("nodes.$selectedNode->id", $value) }}">
    @error("nodes.$selectedNode->id")
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>
