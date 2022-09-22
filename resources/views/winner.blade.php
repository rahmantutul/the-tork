@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item active">Winners</li>
                    @foreach ($winners as $item)
                        <li class="list-group-item"><b>Name: </b>{{ $winner->name }} <b>Mark: {{ $winner->exam->total_mark }} </b></li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
