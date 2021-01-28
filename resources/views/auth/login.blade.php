@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6" style="padding-top:15%;">
            <div class="card" style="height: 350px !important;">
                <div class="card-header">
                <center>
                 <h1 style="font-weight:bold;">{{ __('POS A-Best') }}</h1>
                </center>
                 </div>

                <div class="card-body" style="background:none;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="login" class="col-sm-4 col-form-label text-md-right">
                                <h4>{{ __('Username') }}</h4>
                            </label>
                        
                            <div class="col-md-6">
                                <input id="login" type="text"
                                    class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('username') ?: old('email') }}" required autofocus
                                    style="border: 1px solid #f70334;">
                        
                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><h4>{{ __('Password') }}</h4></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  style="border: 1px solid #f70334;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-1" >
                            <div class="col-12 text-center" style="margin-top:20px;">
            
                                <button type="submit" class="btn btn-success" style="width:30%; font-weight:900;">
                                {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
