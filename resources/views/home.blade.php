@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Answer All Qestion') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('exam') }}"> @csrf
                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <div class="py-2 h5"><b>Q1. Whitch one is php server site language?</b></div>
                            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                                <label class="options">Option One
                                    <input value="" type="radio" name="first_one">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="options">Option 2
                                    <input value="0.5" type="radio" name="first_two">
                                    <span class="checkmark"></span>
                                </label>
                                <label value="" class="options">Option 3
                                    <input type="radio" name="first_three">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="options">Option 4
                                    <input value="" type="radio" name="first_four">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <div class="py-2 h5"><b>Q1. Whitch one is php framework?</b></div>
                            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0.5" id="flexCheckDefault" name="second_one">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Option 1
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="second_two">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Option 2
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0.5" id="flexCheckChecked" name="second_three">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Option 3
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0" id="flexCheckChecked" name="second_four">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Option 4
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary m-4">Submit</button>
                    </form>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
