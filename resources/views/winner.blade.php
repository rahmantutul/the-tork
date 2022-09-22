@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item active">Winners</li>

                    @foreach ($winners as $winner)
                        @foreach ($winner->exam as $item)
                            @if ($item->total_marks == $maxNumber)
                             <li class="list-group-item p-5"><b>Name: &nbsp; &nbsp;</b>{{ $winner->name }}&nbsp; &nbsp; | &nbsp; &nbsp;<b>Mark: &nbsp; &nbsp; &nbsp;{{ $item->total_marks }} </b></li>
                            @endif
                        @endforeach
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
