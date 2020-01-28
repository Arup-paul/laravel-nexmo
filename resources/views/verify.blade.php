@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Please verify code from your phone number to active account') }}</div>

                @if(Session::has('message'))
                <div class="alert alert-danger">{{Session::get('message')}}</div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('verify') }}" aria-label="{{ __('verify') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" required>

                                @if ($errors->has('code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Verify') }}
                                </button>

                             
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                  <!-- <a href="#">Request New Code</a>
                  <input type="hidden" name="phone" value="{{request()->phone }}"> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
