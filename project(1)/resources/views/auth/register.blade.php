@extends('layouts.auth')
@section('content')
  <div class="login-box">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                     <div class="form-group">
                        <label class="control-label">Name</label>
                        <input name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="Name" autofocus>
                        @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input value="{{ old('email') }}" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="Email" autofocus>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label">PASSWORD</label>
                        <input name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Password">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label">Confirm PASSWORD</label>
                        <input name="password_confirmation" class="form-control" type="password" placeholder="Password">
                        
                    </div>

                    <div class="form-group btn-container">
                        <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                    </div>
                </form>

            </div>
@endsection