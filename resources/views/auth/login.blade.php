@extends('layouts.master')

@section('content')
	<br>
	<div align="center">
		<div style="padding: 10px">
			<paper-card elevation="3"
						image={{URL::asset('images/logos/picture2.jpg')}}>
				<div class="card-content" align="left">
					<div class="panel-body">
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						<h3>Login</h3>
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<paper-input label="E-mail" class="form-control" name="email" value="{{ old('email') }}">
								</paper-input>
							</div>

							<div class="form-group">
								<paper-input label="Password" class="form-control" name="password" type="password">
								</paper-input>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember"> Remember Me
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button class="myButton">Login</button>
									<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
									<a class="btn btn-link" href="{{ url('/auth/register') }}">Register</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</paper-card>
		</div>
@endsection
