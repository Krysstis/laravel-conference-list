<div class="mb-3">
    <label for="title" class="form-label">{{ __('conferences.fields.title') }} <span class="text-danger">*</span></label>
    <input type="text"
           class="form-control @error('title') is-invalid @enderror"
           id="title"
           name="title"
           value="{{ old('title', $conference->title ?? '') }}"
           required>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">{{ __('conferences.fields.description') }} <span class="text-danger">*</span></label>
    <textarea class="form-control @error('description') is-invalid @enderror"
              id="description"
              name="description"
              rows="4"
              required>{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="date" class="form-label">{{ __('conferences.fields.date') }} <span class="text-danger">*</span></label>
    <input type="date"
           class="form-control @error('date') is-invalid @enderror"
           id="date"
           name="date"
           value="{{ old('date', isset($conference) ? $conference->date?->format('Y-m-d') : '') }}"
           required>
    @error('date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">{{ __('conferences.fields.address') }} <span class="text-danger">*</span></label>
    <input type="text"
           class="form-control @error('address') is-invalid @enderror"
           id="address"
           name="address"
           value="{{ old('address', $conference->address ?? '') }}"
           required>
    @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="participant_count" class="form-label">{{ __('conferences.fields.participant_count') }}</label>
    <input type="number"
           class="form-control @error('participant_count') is-invalid @enderror"
           id="participant_count"
           name="participant_count"
           min="1"
           value="{{ old('participant_count', $conference->participant_count ?? '') }}">
    @error('participant_count')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
