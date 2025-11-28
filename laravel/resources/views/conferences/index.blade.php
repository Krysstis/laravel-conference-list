@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ __('conferences.list') }}</h1>
        <div>
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary">
                    {{ __('auth.login') }}
                </a>
            @endguest
            @auth
                <a href="{{ route('conferences.create') }}" class="btn btn-dark">
                    {{ __('conferences.add_new') }}
                </a>
            @endauth
        </div>
    </div>

    @if($conferences->isEmpty())
        <div class="alert alert-info">
            {{ __('conferences.no_conferences') }}
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('conferences.fields.title') }}</th>
                        <th>{{ __('conferences.fields.date') }}</th>
                        <th>{{ __('conferences.fields.address') }}</th>
                        <th class="text-end">{{ __('conferences.actions.header') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($conferences as $conference)
                        <tr>
                            <td>{{ $conference->title }}</td>
                            <td>{{ $conference->date->format('Y-m-d') }}</td>
                            <td>{{ $conference->address }}</td>
                            <td class="text-end">
                                <a href="{{ route('conferences.show', $conference) }}" class="btn btn-sm btn-info">
                                    {{ __('conferences.actions.view') }}
                                </a>
                                @auth
                                    <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-sm btn-primary">
                                        {{ __('conferences.actions.edit') }}
                                    </a>
                                    <form action="{{ route('conferences.destroy', $conference) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm btn-danger delete-conference-btn"
                                                data-conference-name="{{ $conference->title }}">
                                            {{ __('conferences.actions.delete') }}
                                        </button>
                                    </form>
                                @endauth
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
