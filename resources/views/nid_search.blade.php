@extends('master_view')

	@section('container')
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable-line tabbable-full-width">
						<div class="tab-content">
							<div id="tab_2_2" class="tab-pane active">
								<div class="row">
									<div class="col-md-8">
										<div class="booking-search">
											<form action="profile" method="get" role="form">
												<div class="row form-group">
													<div class="col-md-12">
														<label class="control-label">NID Number</label>
														<div class="input-icon">
															<i class="fa fa-map-marker"></i>
															<input class="form-control" type="text" name="id" placeholder="NID number">
														</div>
													</div>
												</div>
												<button type="submit" class="btn blue btn-block margin-top-20">SEARCH <i class="m-icon-swapright m-icon-white"></i></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end tabbable-->
			</div>
			<!-- END PAGE CONTENT-->
@endsection