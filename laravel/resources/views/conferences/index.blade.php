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
                <a href="{{ route('conferences.create') }}" class="btn btn-dark me-2">
                    {{ __('conferences.add_new') }}
                </a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        {{ __('auth.logout') }}
                    </button>
                </form>
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
                                    <button type="button"
                                            class="btn btn-sm btn-danger"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteModal-{{ $conference->id }}">
                                        {{ __('conferences.actions.delete') }}
                                    </button>

                                    <div class="modal fade" id="deleteModal-{{ $conference->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger text-white">
                                                    <h5 class="modal-title">Patvirtinkite ištrynimą</h5>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Ar tikrai norite ištrinti renginį <strong>{{ $conference->title }}</strong>?</p>
                                                    <p class="text-muted mb-0">Šis veiksmas negrįžtamas.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atšaukti</button>
                                                    <form action="{{ route('conferences.destroy', $conference) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Ištrinti</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
