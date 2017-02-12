@extends('layouts.pages')

@section('title')
	HarlunFH-Hub || Contact
	@endsection
		@section('content')
		<!-- Map area -->
		<div class="map-area">
			<div id="googleMap" style="width:100%;height:410px;"></div>
		</div><!-- End Map area -->
		<!-- Contact area -->
		<div class="contact-area">
			<div class="container">
				<div class="row">
					<!-- contact info -->
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="contact-info">
							<h3>Contact info</h3>
							<ul>
								<li>
									<i class="fa fa-map-marker"></i> <strong>Address</strong>
									Iba Housing Estate, Lagos State.
								</li>
								<li>
									<i class="fa fa-envelope"></i> <strong>Phone</strong>
									(+234) 0123 4567 890
								</li>
								<li>
									<i class="fa fa-mobile"></i> <strong>Email</strong>
									<a href="#">wecare@harlunfh.com</a>
								</li>
							</ul>
						</div>
					</div><!-- End contact info -->
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="contact-form">
							<h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
							<div class="row">
								{!! Form::open(array()) !!}
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input name="name" type="text" placeholder="Name (required)" />
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input name="email" type="email" placeholder="Email (required)" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input name="subject" type="text" placeholder="Subject" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
									<input type="submit" value="Submit Form" />
								</div>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Eontact area -->
		@endsection

		@section('script')
		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.81033, 90.41252)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/logo/map-marker.png',
				map: map
			  });

			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		@endsection