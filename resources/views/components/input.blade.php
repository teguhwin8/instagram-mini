<div class="form-group row">
  <label for="{{ $name }}" class="col-md-4 col-form-label text-md-right">{{ $label }}</label>
  <div class="col-md-6">
    <input id="{{ $name }}" 
      type="{{ $type ?? 'text' }}" 
      class="form-control @error($name) is-invalid @enderror" 
      name="{{ $name }}" 
      @isset($data->{$name})
        value="{{ old($name) ? old($name) : $data->{$name} }}"
      @else
        value="{{ old($name) }}" 
      @endisset
      @isset($disabled)
        disabled="true"
      @endisset
      @isset($required)
        required
      @endisset
      autocomplete="{{ $name }}" autofocus>
    @if ($errors->has($name))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first($name) }}</strong>
      </span>
    @endif
  </div>
</div>
