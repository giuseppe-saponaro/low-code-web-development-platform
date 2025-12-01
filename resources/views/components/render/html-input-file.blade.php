<div class="mb-2">
    <label>{{ $selectedNode->label }}</label>
    <input type="file" name="nodes[{{ $selectedNode->id }}]" value="{{ old("nodes.$selectedNode->id", $value) }}" class="form-control form-control-lg"/>
    @error("nodes.$selectedNode->id")
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>
