@extends('layouts.partials.effects')


@section('content')
<body class="login">
<div class="wrapper">
    <h1><a href="#"><img src="{{URL::asset('img/ucc.jpg')}}" alt="" class='retina-ready' width="59" height="49">UCCSRS</a></h1>
		<div class="login-body">
			<h2>SIGN IN</h2>
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
				<div class="email ">
                                    <input type="email" name='email' placeholder="Email address" value="{{ old('email') }}" class='input-block-level'>
                                        
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
				</div>
                        </div>
                        <br >
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
				<div class="password ">
                                    
					<input type="password" name="password" placeholder="Password" class='input-block-level'>
                                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>
                            <div class="pull-left"><input type="checkbox"  class="input-block-level" name="remember"> Remember Me</div>
				<div class="submit">
                                    
					<input type="submit" value="Sign me in" class='btn btn-primary'>
				</div>
                            </form>
			<div class="forget">
				<a href="{{ url('/password/reset') }}">Forgot password?</a>
			</div>
                            			

		</div>
	</div>
</div> 
                    @endsection