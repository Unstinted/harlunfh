@extends('layouts.pages')

@section('title')
	HarlunFH-Hub || Shop
	@endsection
		@section('content')
		<!-- Breadcurb Area -->
		<div class="breadcurb-area">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Women</a></li>
					<li>Clother</li>
				</ul>
			</div>
		</div><!-- End Breadcurb Area -->
		<!-- Shop Product Area -->
		<div class="shop-product-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<!-- Shop Product Left -->
						<div class="shop-product-left">
							<!-- Shop Layout Area -->
							<div class="shop-layout-area">
								<div class="layout-title">
									<h2>Category</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Cocktail <span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Day <span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Evening <span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Sport <span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Sexy dress <span>(14)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Fashion skirt<span>(14)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Evening dress <span>(14)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Children's Clothing <span>(14)</span></a></li>
									</ul>
								</div>
							</div><!-- End Shop Layout Area -->
							<!-- Price Filter Area -->
							<div class="price-filter-area shop-layout-area">
								<div class="price-filter">
									<div class="layout-title">
										<h2>Price</h2>
									</div>
									<div id="slider-range"></div>
									<p>
									  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
									</p>
									<button class="btn btn-default">Filter</button>
								</div>
							</div><!-- End Price Filter Area -->
							<!-- Shop Layout Area -->
							<div class="shop-layout-area">
								<div class="layout-title">
									<h2>Manufacturer</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Adidas <span>(1)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Chanel <span>(1)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>DKNY <span>(2)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Dolce <span>(2)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Gabbana <span>(3)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Nike<span>(1)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Vogue <span>(3)</span></a></li>
									</ul>
								</div>
							</div><!-- End Shop Layout Area -->
							<!-- Shop Layout Area -->
							<div class="shop-layout-area">
								<div class="layout-title">
									<h2>Color</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Black <span>(1)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Blue <span>(2)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Brown <span>(1)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Pink <span>(3)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Red <span>(3)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>While<span>(2)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Yellow <span>(1)</span></a></li>
									</ul>
								</div>
							</div><!-- End Shop Layout Area -->
							<!-- Shop Layout Area -->
							<div class="shop-layout-area">
								<div class="layout-title">
									<h2>Compare</h2>
									<p>You have no items to compare.</p>
								</div>
								<div class="popular-tag">
									<h2>Popular Tags</h2>
									<div class="tag-list">
										<ul>
											<li><a href="#">Clothing</a></li>
											<li><a href="#">accessories</a></li>
											<li><a href="#">fashion</a></li>
											<li><a href="#">footwear</a></li>
											<li><a href="#">good</a></li>
											<li><a href="#">kid</a></li>
											<li><a href="#">Men</a></li>
											<li><a href="#">Women</a></li>
										</ul>
									</div>
									<div class="tag-action">
										<ul>
											<li><a href="#">View all tags</a></li>
										</ul>
									</div>
								</div>
								<div class="shop-layout-banner banner-add">
									<a href="#">
										<img alt="banner" src="img/banner/b18.jpg">
									</a>
								</div>
							</div><!-- End Shop Layout Area -->
						</div><!-- End Shop Product Left -->
					</div>
					<div class="col-md-9 col-sm-12">
						<!-- Shop Product Right -->
						<div class="shop-product-right">
							<div class="product-tab-area">
								<!-- Tab Bar -->
								<div class="tab-bar">
									<div class="tab-bar-inner">
										<ul class="nav nav-tabs" role="tablist">
											<li class="active"><a href="#shop-product" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
											<li><a href="#shop-list" data-toggle="tab"><i class="fa fa-th-list"></i>List</a></li>
										</ul>
									</div>
									<div class="toolbar">
										<div class="sorter">
											<div class="sort-by">
												<label>Sort By</label>
												<select>
													<option value="position">Position</option>
													<option value="name">Name</option>
													<option value="price">Price</option>
												</select>
												<a href="#"><i class="fa fa-long-arrow-up"></i></a>
											</div>
										</div>
										<div class="pager-list">
											<div class="limiter">
												<label>Show</label>
												<select>
													<option value="9">12</option>
													<option value="12">15</option>
													<option value="24">18</option>
													<option value="36">36</option>
												</select>
												per page
											</div>
										</div>
									</div>
								</div><!-- End Tab Bar -->
								<!-- Tab Content -->
								<div class="tab-content">
									<div class="tab-pane active" id="shop-product">
										<div class="row tab-content-row">
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp4.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp9.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price">$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp3.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp19.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price"><span>$205.00</span>$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp2.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price"><span>$205.00</span>$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
										</div>
										<div class="row tab-content-row">
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp11.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp2.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price">$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp13.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp19.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price"><span>$205.00</span>$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp12.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price"><span>$205.00</span>$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
										</div>
										<div class="row tab-content-row">
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp3.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp19.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price">$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp2.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp1.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price"><span>$205.00</span> $155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp6.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp15.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price">$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
										</div>
										<div class="row">
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp10.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price">$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp7.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp17.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price"><span>$205.00</span> $155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp5.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp14.jpg" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
															<p class="product-price">$155.00</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
										</div>
									</div>
									<div class="tab-pane" id="shop-list">
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp9.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price">$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp3.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price"><span>$205.00</span>$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp1.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price"><span>$205.00</span>$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp2.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price"><span>$205.00</span>$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp12.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp15.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price"><span>$205.00</span>$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
									</div>
								</div><!-- End Tab Content -->
								<!-- Tab Bar -->
								<div class="tab-bar">
									<div class="toolbar">
										<div class="sorter">
											<div class="sort-by">
												<label>Sort By</label>
												<select>
													<option value="position">Position</option>
													<option value="name">Name</option>
													<option value="price">Price</option>
												</select>
												<a href="#"><i class="fa fa-long-arrow-up"></i></a>
											</div>
										</div>
										<div class="pages">
											<strong>Page:</strong>
											<ol>
												<li class="current">1</li>
												<li><a href="#">2</a></li>
												<li><a title="Next" href="#"><i class="fa fa-arrow-right"></i></a></li>
											</ol>
										</div>
									</div>
								</div><!-- End Tab Bar -->
							</div>
						</div><!-- End Shop Product Left -->
					</div>
				</div>
			</div>
		</div><!-- End Shop Product Area -->
		@endsection
		
