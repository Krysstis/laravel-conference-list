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
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-card-text me-2" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <h6 class="text-muted mb-0">{{ __('conferences.fields.description') }}</h6>
                        </div>
                        <p class="ms-4 fs-5">{{ $conference->description }}</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-event me-2" viewBox="0 0 16 16">
                                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                    </svg>
                                    <h6 class="text-muted mb-0">{{ __('conferences.fields.date') }}</h6>
                                </div>
                                <p class="ms-4 mb-0 fs-5 fw-semibold">{{ $conference->date->format('Y-m-d') }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt me-2" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                    <h6 class="text-muted mb-0">{{ __('conferences.fields.address') }}</h6>
                                </div>
                                <p class="ms-4 mb-0 fs-5 fw-semibold">{{ $conference->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5 pt-3 border-top">
                        <a href="{{ route('conferences.index') }}" class="btn btn-secondary btn-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                            {{ __('conferences.actions.back') }}
                        </a>
                        @auth
                            <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-dark btn-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil me-2" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
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
