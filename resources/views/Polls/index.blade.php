@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Polls</h1></div>
                    <div class="card-body">
                        @foreach($polls as $poll)
                            <a href="{{ $poll->path() }}">
                                <h3>{{ $poll->title}}</h3>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
