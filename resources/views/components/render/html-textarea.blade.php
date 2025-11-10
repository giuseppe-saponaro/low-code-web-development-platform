<div class="mb-2 form-floating">
    <textarea name="nodes[{{ $selectedNode->id }}]" class="form-control form-control-sm">{{ old("nodes.$selectedNode->id", $value) }}</textarea>
    <label>{{ $selectedNode->label }}</label>
    @error("nodes.$selectedNode->id")
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>
