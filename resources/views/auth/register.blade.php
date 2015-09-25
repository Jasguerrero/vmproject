@extends('layouts.master')

@section('content')
	<br><br>
	<div align="center">
	<paper-card elevation="3"
				image={{URL::asset('images/logos/logo.jpg')}}>
		<div class="card-content" align="left">
			@include('partials.errors')
			<h3>Register</h3>
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" class="form-control" name="avatar" value="{{ asset('/img/default-img.png') }}">
				<div class="form-group">
					<paper-input label="Name" type="text" class="form-control" name="name"
								 value="{{ old('username') }}"></paper-input>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<paper-input label="Email" type="email" class="form-control"
									 name="email" value="{{ old('email') }}"></paper-input>
					</div>
				</div>
				<div class="form-group">
					<paper-input label="Room" type="number" class="form-control" name="room" value="">
					</paper-input>
				</div>

				<div class="form-group">
					<paper-input label="Password" type="password" class="form-control" name="password">
					</paper-input>

				</div>

				<div class="form-group">
					<div class="col-md-6">
						<paper-input label="Confirm Password" type="password" class="form-control"
									 name="password_confirmation"></paper-input>
					</div>
				</div>
				<br>

				<div class="form-group">
					<div class="col-md-6">
						<select name="type" id="level"
								style="width: 100%;" class="form-control input-sm">
							<option value="">- Seleciona un nivel -</option>
							<option value="1">Guest</option>
							<option value="2">Admin</option>
						</select>
					</div>
				</div>
				<br><br>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="myButton">
							Register
						</button>
					</div>
				</div>
			</form>
		</div>
	</paper-card>
</div>
@endsection
