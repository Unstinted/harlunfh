@extends('layouts.pages')
@section('title')
	HarlunFH-Hub || My-Account
	@endsection

	@section('content')
		<!-- My Account Area -->
		<div class="my-account-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="my-account-title">
							<h2>Login or Create an Account</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="new-customers customer">
							<div class="customer-inner">
								@if (Session::has('status'))
									<div class="alert alert-warning">{{ Session::get('status') }}</div>
								@endif
								<div class="user-title">
									<h2><i class="fa fa-file"></i>New Customers</h2>
								</div>
								<div class="user-content">
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
								</div>
								{!! Form::open(array('url' => '/register',  'class' => 'form-horizontal product-form')) !!}
									<div class="form-goroup{{ $errors->has('name') ? ' has-error' : '' }}">
										<label>Name <sup>*</sup></label>
										<input name="name" type="text" class="form-control" >
										@if ($errors->has('name'))
											<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-goroup{{ $errors->has('email') ? ' has-error' : '' }}">
										<label>Email Address <sup>*</sup></label>
										<input name="email" type="text"  class="form-control" >
										@if ($errors->has('email'))
											<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
										@endif
									</div>
									<div class="form-goroup{{ $errors->has('password') ? ' has-error' : '' }}">
										<label>Password <sup>*</sup></label>
										<input name="password" type="password"  class="form-control">
										@if ($errors->has('password'))
											<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    	</span>
										@endif
									</div>

									<div class="form-goroup{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
										<label>Confirm Password <sup>*</sup></label>
										<input name="password_confirmation" type="password"  class="form-control">
										@if ($errors->has('password_confirmation'))
											<span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
										@endif
									</div>
							</div>

							<div class="user-bottom fix">
								<button class="btn" type="submit">Create an Account</button>
							</div>
							{!! Form::close() !!}
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="resestered-customers customer">
							<div class="customer-inner">
								@if (Session::has('message'))
									<div class="alert alert-warning">{{ Session::get('message') }}</div>
								@endif
								<div class="user-title">
									<h2><i class="fa fa-file-text"></i>Registered  Customers</h2>
								</div>
								<div class="user-content">
									<p>If you have an account with us, please log in.</p>
								</div>
								<div class="account-form">
									{!! Form::open(array( 'url'=>'/login', 'class'=>'form-horizontal product-form'))!!}
										<div class="form-goroup{{ $errors->has('email') ? ' has-error' : '' }}">
											<label>Email Address <sup>*</sup></label>
											<input id="name" name="email" type="text"  class="form-control" required="required" value="{{ old('email') }}">
											@if ($errors->has('email'))
												<span class="help-block">
                                        	<strong>{{ $errors->first('email') }}</strong>
                                    		</span>
											@endif
										</div>
										<div class="form-goroup{{ $errors->has('password') ? ' has-error' : '' }}">
											<label>Password <sup>*</sup></label>
											<input id="password" name="password" type="password" required="required" class="form-control">
											@if ($errors->has('password'))
												<span class="help-block">
                                        	<strong>{{ $errors->first('password') }}</strong>
                                    		</span>
											@endif
										</div>
								</div>
								<p class="reauired-fields floatright"><sup>*</sup> Required Fields</p>
								<br>
								<a class="btn btn-block btn-social btn-facebook">
									<span class="fa fa-facebook"></span> Sign in with Facebook
								</a>
								<a class="btn btn-block btn-social btn-twitter">
									<span class="fa fa-twitter"></span> Sign in with Twitter
								</a>
								<a class="btn btn-block btn-social btn-google">
									<span class="fa fa-google"></span> Sign in with Google
								</a>
								<a class="btn btn-block btn-social btn-instagram">
									<span class="fa fa-instagram"></span> Sign in with Instagram
								</a>
							</div>
							<div class="user-bottom fix">
								<a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
								<button class="btn" type="submit">login</button>
							</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div><!-- End My Account Area -->
	@endsection
