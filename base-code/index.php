<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title></title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!-- our custom styles -->
		<link href="styles/main.css?v=<?php echo filemtime("styles/main.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="styles/raw-main.css?v=<?php echo filemtime("styles/raw-main.css"); ?>" rel="stylesheet" type="text/css" />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
        crossorigin="anonymous"
    />		
		<!-- our custom styles end-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div id="app_container">
		<!-- Begin::your code -->

		<div class="text-center mt-4 pt-5">
			<h5>This page Works</h5>

			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
				Launch demo modal
			</button>

			<div class="modal fade" tabindex="-1" id="kt_modal_1">
				

					<div class="modal-dialog modal-dialog-scrollable modal-lg">
							<div class="modal-content">
									<div class="modal-header">
											<div class="row w-100">
												<div class="col text-start">
													<p class="modal-title m-0 p-0">PREVIEW <span class="badge badge-light-success p-2"><i class="fa-solid fa-grip px-1"></i> Approved</span></p>
												</div>
												<div class="col text-start">
													<p class="modal-title m-0 p-0">ACTIVITY</p>		
												</div>
											</div>
									</div>

									<div class="modal-body p-0">
											<div class="row m-0 h-100 color-grey">
												<div class="col text-start h-100 color-grey">
													<div class="card">
														<img src="https://i0.wp.com/cms.babbel.news/wp-content/uploads/2019/02/ColorsInEnglish.png?resize=1200%2C675" class="w-100">
														<div class="card-body p-2 mb-4">
															<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint magnam deserunt pariatur quaerat voluptatum officia atque rerum libero reiciendis qui! ... <span class='text-primary'>See more</span></p>
															<div class="form-floating text-start mb-3">
																<select class="form-select form-select-sm form-select-solid" id="floatingSelect" aria-label="Floating label select example">
																	<option selected>Open this select menu</option>
																	<option value="1">Batesa Enterprise Ltd</option>
																	<option value="2">Client Two</option>
																	<option value="3">Client Three</option>
																</select>
																<label for="floatingSelect">Select Client</label>
															</div>
															<div class="form-floating text-start">
																<select class="form-select form-select-sm " id="floatingSelect" aria-label="Floating label select example">
																	<option selected>Open this select menu</option>
																	<option value="1">Social Media</option>
																	<option value="2">Job Posting sites</option>
																</select>
																<label for="floatingSelect">Content Type</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col text-start h-100 color-blue">
													<form>
														<div class="row mb-2">
															<div class="col-2 p-0 pe-1 w-40px h-40px">
																<img src="https://images.assetsdelivery.com/compings_v2/ylivdesign/ylivdesign1510/ylivdesign151000120.jpg" class="img-fluid rounded" />
															</div>
															<div class="col-10 p-0">
																<div class="card">
																	<div class="card-body p-2">
																	<!-- <div class="form-floating form-floating-sm comment-title text-start mb-3"> -->
																		<select class="form-select form-select-sm p-0 w-100px comment-type" id="floatingSelect" aria-label="Floating label select example">
																			<option value="1">To everyone</option>
																			<option value="2">To only Agency</option>
																		</select>
																	<!-- </div> -->
																		<textarea class="form-control form-control-sm mb-2" data-kt-autosize="true" placeholder='Comment on this one?'></textarea>
																		<div class="row">
																			<div class="col">
																				<i class="fas fa-bold"></i>
																				<i class="fas fa-italic"></i>
																				<i class="fa-solid fa-underline"></i>
																				<i class="fa-solid fa-align-left"></i>
																				<i class="fa-solid fa-list-ol"></i>
																			</div>
																			<div class="col text-end">
																				<button type="submit" class="btn btn-sm btn-warning">Add Comment</button>
																			</div>
																		</div>																		
																	</div>
																</div>
															</div>															
														</div>
													</form>
													<div class="row">
														<p><span class='text-muted fs-6 p-0 m-0'>System:</span> Published <span class='text-primary'>Facebook - Botesa</span> > <span class='text-success'>Sucessful</span>  </p>
														<p><span class='text-muted fs-6 p-0 m-0'>System:</span> Published <span class='text-primary'>Facebook - Botesa</span> > <span class='text-success'>Sucessful</span>  </p>
														<p><span class='text-muted fs-6 p-0 m-0'>System:</span> Published <span class='text-primary'>Facebook - Botesa</span> > <span class='text-danger'>Failed</span>  </p>
														<p><span class='text-muted fs-6 p-0 m-0'>System:</span> Published <span class='text-primary'>Facebook - Botesa</span> > <span class='text-success'>Sucessful</span>  </p>
														<p><span class='text-muted fs-6 p-0 m-0'>System:</span> Published <span class='text-primary'>Facebook - Botesa</span> > <span class='text-success'>Sucessful</span>  </p>
													</div>
													<div class="row mb-2">
														<div class="col-2 p-0 pe-1 w-40px h-40px">
															<img src="https://images.assetsdelivery.com/compings_v2/ylivdesign/ylivdesign1510/ylivdesign151000120.jpg" class="img-fluid rounded" />
														</div>
														<div class="col-10 p-0">
															<div class="card">
																<div class="card-body p-2">
																	<div class='d-flex justify-content-between align-items-center'>
																		<h6 class="comment-title">Grace Logan <span class="badge badge-light-success">Approved</span></h6>
																		<p class="">2 hour ago</p>
																	</div>
																	
																	<div class="input-group mb-5 align-items-center">
																		<input type="text" class="form-control form-control-sm" placeholder="Reply..." aria-label=""/>
																		<i class="fa-solid fa-paperclip"></i>
																	</div>
																</div>
															</div>															
														</div>

													</div>
													<div class="row">
													<p><span class=' text-primary p-0 m-0'>Grace Logan:</span> updated schedule for <span class=' fw-bold'>2th/jun/2022</span> to <span class=' fw-bold'>23/jun/2022</span> </p>
													</div>

													<div class="row mb-2">
														<div class="col-2 p-0 pe-1 w-40px h-40px">
															<img src="https://images.assetsdelivery.com/compings_v2/ylivdesign/ylivdesign1510/ylivdesign151000120.jpg" class="img-fluid rounded" />
														</div>
														<div class="col-10 p-0">
															<div class="card">
																<div class="card-body p-2">
																	<div class='d-flex justify-content-between align-items-center'>
																		<h6 class="comment-title">Mukala Fransis <span class="badge badge-light-info">Updated</span></h6>
																		<p class="">3 hour ago</p>
																	</div>
																	
																	<div class="input-group mb-5 align-items-center">
																		<input type="text" class="form-control form-control-sm" placeholder="Reply..." aria-label=""/>
																		<i class="fa-solid fa-paperclip"></i>
																	</div>
																</div>
															</div>															
														</div>

													</div>

													<div class="row mb-2">
														<div class="col-2 p-0 pe-1 w-40px h-40px">
															<img src="https://images.assetsdelivery.com/compings_v2/ylivdesign/ylivdesign1510/ylivdesign151000120.jpg" class="img-fluid rounded" />
														</div>
														<div class="col-10 p-0">
															<div class="card">
																<div class="card-body p-2">
																	<div class='d-flex justify-content-between align-items-center'>
																		<h6 class="comment-title">Grace Logan <span class="badge badge-light-warning ">Commented</span></h6>
																		<p class="">3 hour ago</p>
																	</div>
																	
																	<div class="d-flex flex-column">
																		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quam cumque atque optio? Minima deserunt ipsa, cum ipsam enim numquam nostrum laudantium aspernatur velit explicabo architecto ipsum provident! Reiciendis, dolorum.</p>
																		<div class="d-flex gap-4">
																			<div class="d-flex badge badge-light-primary align-items-center justify-content-center p-2">
																				<i class="fa-solid fa-comment text-primary"></i>
																				<p class='m-0'>3</p>
																			</div>

																			<div class="d-flex align-items-center justify-content-center p-2">
																				<i class="fa-solid fa-heart text-danger"></i>
																				<p class='m-0'>12</p>
																			</div>
																		</div>

																		<div class="row m-2">
																			<div class="col-2 p-0 pe-1 w-40px h-40px">
																				<img src="https://images.assetsdelivery.com/compings_v2/ylivdesign/ylivdesign1510/ylivdesign151000120.jpg" class="img-fluid rounded" />
																			</div>
																			<div class="col-10 p-0">
																				<div class="card">
																					<div class="card-body p-2">
																						<div class='d-flex justify-content-between align-items-center'>
																							<h6 class="comment-title">Mr. Anderson <span class="badge badge-light-success">Approved</span></h6>
																							<p class="">3 hour ago</p>
																						</div>
																						
																						<div class="d-flex flex-column">
																							<p>Lorem ipsum dolor sit amet consectetur.</p>
																						</div>
																					</div>
																				</div>															
																			</div>
																		</div>

																		<div class="row m-2">
																			<div class="col-2 p-0 pe-1 w-40px h-40px">
																				<img src="https://images.assetsdelivery.com/compings_v2/ylivdesign/ylivdesign1510/ylivdesign151000120.jpg" class="img-fluid rounded" />
																			</div>
																			<div class="col-10 p-0">
																				<div class="card">
																					<div class="card-body p-2">
																						<div class='d-flex justify-content-between align-items-center'>
																							<h6 class="comment-title">Markula Fransis <span class="badge badge-light-success">Approved</span></h6>
																							<p class="">3 hour ago</p>
																						</div>
																						
																						<div class="d-flex flex-column">
																							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloribus?</p>
																						</div>
																					</div>
																				</div>															
																			</div>
																		</div>

																	</div>
																</div>
															</div>															
														</div>

													</div>
												</div>
											</div>
									</div>

									<div class="modal-footer">
											<div class="row w-100 align-items-center">
												<div class="col text-start">
													<div class="row">
														<div class="col">
															<span class="badge badge-outline badge-dark p-2"><i class="fa-solid fa-grip px-1"></i> Delete</span>
															<span class="badge badge-outline badge-dark p-2"><i class="fa-solid fa-grip px-1"></i> Show</span>
														</div>
														<div class="col">
															<span class="badge badge-outline badge-warning undo-approval p-2"><i class="fa-solid fa-grip px-1"></i> Undo Approval</span>
															<span class="badge badge-warning edit p-2"><i class="fa-solid fa-grip px-1"></i> Edit</span>
														</div>
														
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Add a Comment..." aria-label=""/>
													</div>
												</div>
											</div>
									</div>
							</div>
					</div>
			</div>

		<!-- End::your code -->
		</div>

		<!--begin::Javascript-->
		<script>var hostUrl = "scripts/lib/uikit/";</script>
		<script src="scripts/lib/uikit/plugins/global/plugins.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/scripts.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/scripts.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/widgets.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/widgets.bundle.js') ?>"></script>

		<script src="scripts/lib/custom.js?v=<?php echo filemtime('scripts/lib/custom.js') ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
