@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-dark text-white py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">{{ $conference->title }}</h3>
                        <span class="badge bg-light text-dark fs-6">
                            {{ $conference->date->format('Y-m-d') }}
                        </span>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-card-text me-2 fs-5"></i>
                            <h6 class="text-muted mb-0">{{ __('conferences.fields.description') }}</h6>
                        </div>
                        <p class="ms-4 fs-5">{{ $conference->description }}</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-calendar-event me-2 fs-5"></i>
                                    <h6 class="text-muted mb-0">{{ __('conferences.fields.date') }}</h6>
                                </div>
                                <p class="ms-4 mb-0 fs-5 fw-semibold">{{ $conference->date->format('Y-m-d') }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-geo-alt me-2 fs-5"></i>
                                    <h6 class="text-muted mb-0">{{ __('conferences.fields.address') }}</h6>
                                </div>
                                <p class="ms-4 mb-0 fs-5 fw-semibold">{{ $conference->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5 pt-3 border-top">
                        <a href="{{ route('conferences.index') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-arrow-left me-2"></i>
                            {{ __('conferences.actions.back') }}
                        </a>
                        @auth
                            <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-dark btn-lg">
                                <i class="bi bi-pencil me-2"></i>
                                {{ __('conferences.actions.edit') }}
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
