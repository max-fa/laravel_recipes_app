@extends('layouts.layout')

@section('scripts')
	<!-- Use laravel's resource loader here -->
@endsection

@section('buttons')
	<button id="login-button" toggle-login-form>Login</button>	
	<button id="create-account-button" toggle-create-account-form>Create Account</button>
@endsection

@section('forms')
	<div id="login-form-container" style="display: none;">
		<form id="login-form" ng-submit="login()">
				<h3><span style="color: blue;">Login</span></h3>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" ng-model="loginCredentials.username" required>
				<br>
				<br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" ng-model="loginCredentials.password" required>
				<br>
				<br>
				<span><button type="submit" id="submit-create-account">Sign In</button></span>
				<span><button type="reset">Reset Form</button></span>
				<span><button type="button" id="exit-login-form" exit-login-form>Exit Form</button></span>
				<br>
				<br>
		</form>			
	</div>	
	
	<div id="create-account-form-container" style="display: none;">
		<form id="create-account-form" name="create-account">
				<h3><span style="color: blue;">Create Account</span></h3>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required>
				<br>
				<br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
				<br>
				<br>
				<input type="hidden"></input>
				<span><button type="submit" id="submit-create-account">Sign Up</button></span>
				<span><button type="reset">Reset Form</button></span>
				<span><button type="button" id="exit-create-account-form" exit-create-account-form>Exit Form</button></span>
				<br>
				<br>
		</form>
	</div>	
@endsection