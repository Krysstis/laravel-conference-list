@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">{{ __('conferences.edit') }}</h4>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('conferences.update', $conference) }}">
                        @csrf
                        @method('PUT')

                        @include('conferences.fields')

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
                                {{ __('conferences.actions.back') }}
                            </a>
                            <button type="submit" class="btn btn-dark">
                                {{ __('conferences.actions.update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
