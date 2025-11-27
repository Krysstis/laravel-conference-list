@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ __('conferences.list') }}</h1>
        @auth
            <a href="{{ route('conferences.create') }}" class="btn btn-dark">
                {{ __('conferences.add_new') }}
            </a>
        @endauth
    </div>

    @if($conferences->isEmpty())
        <div class="alert alert-info">
            No conferences available.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('conferences.fields.title') }}</th>
                        <th>{{ __('conferences.fields.date') }}</th>
                        <th>{{ __('conferences.fields.address') }}</th>
                        @auth
                            <th class="text-end">{{ __('conferences.actions.edit') }}</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach($conferences as $conference)
                        <tr>
                            <td>{{ $conference->title }}</td>
                            <td>{{ $conference->date }}</td>
                            <td>{{ $conference->address }}</td>
                            @auth
                                <td class="text-end">
                                    <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-sm btn-primary">
                                        {{ __('conferences.actions.edit') }}
                                    </a>
                                    <form action="{{ route('conferences.destroy', $conference) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('{{ __('conferences.messages.confirm_delete') }}')">
                                            {{ __('conferences.actions.delete') }}
                                        </button>
                                    </form>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
