@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow border-0">
        <div class="card-header bg-dark text-white">
            <h3>{{ $conference->title }}</h3>
            <span class="badge bg-light text-dark">{{ $conference->date->format('Y-m-d') }}</span>
        </div>
        <div class="card-body">
            <p><strong>{{ __('conferences.fields.description') }}:</strong> {{ $conference->description }}</p>

            <p><strong>{{ __('conferences.fields.address') }}:</strong> {{ $conference->address }}</p>

            @if($conference->participant_count)
                <p><strong>{{ __('conferences.fields.participant_count') }}:</strong> {{ $conference->participant_count }}</p>
            @endif

            <div class="mt-3 pt-3 border-top">
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
@endsection
