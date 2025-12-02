@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">{{ __('conferences.list') }}</h1>
        @auth
            <a href="{{ route('conferences.create') }}" class="btn btn-dark">{{ __('conferences.add_new') }}</a>
        @endauth
    </div>

    @if($conferences->isEmpty())
        <div class="alert alert-info">{{ __('conferences.no_conferences') }}</div>
    @else
        <table class="table table-striped">
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
                            <a href="{{ route('conferences.show', $conference) }}" class="btn btn-sm btn-info">{{ __('conferences.actions.view') }}</a>
                            @auth
                                <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-sm btn-primary">{{ __('conferences.actions.edit') }}</a>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#del{{ $conference->id }}">{{ __('conferences.actions.delete') }}</button>

                                <div class="modal fade" id="del{{ $conference->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Patvirtinkite ištrynimą</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                Ar tikrai norite ištrinti renginį <strong>{{ $conference->title }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atšaukti</button>
                                                <form action="{{ route('conferences.destroy', $conference) }}" method="POST">
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
    @endif
</div>
@endsection
