@extends('layouts.partials.effects')
@section('content')
<body class='locked'>
	<div class="wrapper">
		<div class="pull-left">
			<img src="img/demo/sign-in.jpg" alt="" width="200" height="200">
			<a href="{{ url('/login') }}">Not John Doe?</a>
		</div>
		<div class="right">
			<div class="upper">
				<h2>John Doe</h2>
				<span>Locked</span>
			</div>
			<form action="{{url('/login')}}" method='get'>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                @if($errors->has('password'))
				<input type="password" placeholder="Password">
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				<div>
					<input type="submit" value="Unlock" class='btn btn-inverse'>
				</div>
			</form>
		</div>
	</div>

</body>

