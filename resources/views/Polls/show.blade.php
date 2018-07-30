@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>There are a Poll</h1></div>

                    <div class="card-body">

                        <p> {{ $poll->title}} </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
