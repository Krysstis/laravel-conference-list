@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">{{ $conference->title }}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="text-muted">{{ __('conferences.fields.description') }}</h6>
                        <p>{{ $conference->description }}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">{{ __('conferences.fields.date') }}</h6>
                            <p>{{ $conference->date->format('Y-m-d') }}</p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">{{ __('conferences.fields.address') }}</h6>
                            <p>{{ $conference->address }}</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
                            {{ __('conferences.actions.back') }}
                        </a>
                        @auth
                            <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-dark">
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
