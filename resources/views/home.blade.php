@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Your are one step close to create your first meeting. Go to <a href="{{ route('meetings') }}">Meetings</a>!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
