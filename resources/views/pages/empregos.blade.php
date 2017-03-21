@extends('layout.default')
@section('content')

<div id="job-search">
	<div class="container">
		<div class="job-search-wrapper">
			<h2 class="job-search-title">Encontre um emprego</h2>
			<form id="job-search-form" role="form" action="#" method="get">
				<div id="search-text-input" class="row">
					<div class="col-md-7">
						<div class="form-group has-feedback">
							<label class="text-label" for="keyword">Search</label>
							<input class="form-control" type="text" name="keyword" id="keyword" placeholder="Keywords (IT Engineer, Shop Manager, Hr Manager...)" required="required">
							<span class="fa fa-search form-control-feedback"></span>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group has-feedback">
							<label class="text-label" for="location">Location</label>
															<select name="location" id="location" tabindex="-1" style="display: none;" class="selectized"><option value="" selected="selected"></option></select><div class="selectize-control single"><div class="selectize-input items not-full has-options"><input type="text" autocomplete="off" tabindex="" placeholder="Any" style="width: 29px;"></div><div class="selectize-dropdown single" style="display: none;"><div class="selectize-dropdown-content"></div></div></div>
													</div>
					</div>
				</div><!-- /.row -->


				<!-- Advanced Search Starts -->

				<div id="advance-search-option">



					<!-- Job Category and Job Type Starts -->

					<div class="row">

						<div class="col-md-7">

							<div class="form-group job-filter-dropdown">
								<label class="text-label" for="location">Category</label>

							<div class="job-category-select-wrapper"><select id="job-category-dropdown" name="job_category" tabindex="-1" class="selectized" style="display: none;"><option value="" selected="selected"></option></select><div class="selectize-control single"><div class="selectize-input items not-full has-options"><input type="text" autocomplete="off" tabindex="" placeholder="Select Job Category" style="width: 127px;"></div><div class="selectize-dropdown single" style="display: none;"><div class="selectize-dropdown-content"></div></div></div></div>
							<script>
								jQuery(document).ready(function($){

									"use strict";
									// Homepage job filter
									$('#job-category-dropdown').selectize({

									});
								});
							</script>

							</div><!-- /.form-group -->
						</div><!-- /.col-md-7 -->


						<div class="col-md-5">
							<div class="form-group job-filter-dropdown">
								<label class="text-label" for="location">Type</label>

							<div class="job-type-select-wrapper"><select id="job-type-dropdown" name="job_type" tabindex="-1" class="selectized" style="display: none;"><option value="" selected="selected"></option></select><div class="selectize-control single"><div class="selectize-input items not-full has-options"><input type="text" autocomplete="off" tabindex="" placeholder="Select Job Type" style="width: 100px;"></div><div class="selectize-dropdown single" style="display: none;"><div class="selectize-dropdown-content"></div></div></div></div>
									<script>
										jQuery(document).ready(function($){

											"use strict";
											// Homepage job filter
											$('#job-type-dropdown').selectize({

											});
										});
									</script>
									</div><!-- /.form-group -->
								</div><!-- /.col-md-5 -->

							</div><!-- /.row -->
							<!-- Job Category and Job Type Ends -->


				<div class="form-group experience">
					<fieldset>
						<label class="slider-label">Experience (-/+)<span class="ex-min"></span> - <span class="ex-max"></span></label>
						<select class="init-slider" name="experience_min" id="experience_min">
							<option value="">0</option>
							<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>						</select>
						<select class="init-slider" name="experience_max" id="experience_max">
							<option value="">0</option>
							<option value="1">1</option><option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select><div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" role="application"><a href="#" tabindex="0" id="handle_experience_min" class="ui-slider-handle ui-state-default ui-corner-all" role="slider" aria-labelledby="undefined" aria-valuemin="0" aria-valuemax="10" aria-valuenow="0" aria-valuetext="0" style="left: 0%;"><span class="screenReaderContext"></span><span class="ui-slider-tooltip ui-widget-content ui-corner-all"><span class="ttContent">0</span><span class="ui-tooltip-pointer-down ui-widget-content"><span class="ui-tooltip-pointer-down-inner" style="border-top: 7px solid rgb(206, 215, 217);"></span></span></span></a><a href="#" tabindex="0" id="handle_experience_max" class="ui-slider-handle ui-state-default ui-corner-all" role="slider" aria-labelledby="undefined" aria-valuemin="0" aria-valuemax="10" aria-valuenow="0" aria-valuetext="0" style="left: 0%;"><span class="screenReaderContext"></span><span class="ui-slider-tooltip ui-widget-content ui-corner-all"><span class="ttContent">0</span><span class="ui-tooltip-pointer-down ui-widget-content"><span class="ui-tooltip-pointer-down-inner" style="border-top: 7px solid rgb(206, 215, 217);"></span></span></span></a><ol class="ui-slider-scale ui-helper-reset" role="presentation"><li style="left:0.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">0</span><span class="ui-slider-tic ui-widget-content" style="display: none;"></span></li><li style="left:10.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">1</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:20.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">2</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:30.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">3</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:40.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">4</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:50.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">5</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:60.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">6</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:70.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">7</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:80.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">8</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:90.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">9</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:100.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">10</span><span class="ui-slider-tic ui-widget-content" style="display: none;"></span></li></ol><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 0%;"></div></div>
					</fieldset>
				</div><!-- /.experience -->
				<div class="form-group sallary">
					<label class="slider-label">Salary ($) / per year</label>
						<select class="init-slider" name="sallary_min" id="sallary_min">
							<option value="">0</option>
							<option value="10000">10K</option><option value="20000">20K</option><option value="50000">50K</option><option value="75000">75K</option><option value="100000">100K</option><option value="150000">150K</option><option value="200000">200K</option><option value="250000">250K</option><option value="300000">300K</option><option value="400000">400K</option><option value="500000">500K</option>						</select>
						<select class="init-slider" name="sallary_max" id="sallary_max">
							<option value="">0</option>
							<option value="10000">10K</option><option value="20000">20K</option><option value="50000">50K</option><option value="75000">75K</option><option value="100000">100K</option><option value="150000">150K</option><option value="200000">200K</option><option value="250000">250K</option><option value="300000">300K</option><option value="400000">400K</option><option value="500000">500K</option>						</select><div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" role="application"><a href="#" tabindex="0" id="handle_sallary_min" class="ui-slider-handle ui-state-default ui-corner-all" role="slider" aria-labelledby="undefined" aria-valuemin="0" aria-valuemax="11" aria-valuenow="0" aria-valuetext="0" style="left: 0%;"><span class="screenReaderContext"></span><span class="ui-slider-tooltip ui-widget-content ui-corner-all"><span class="ttContent">0</span><span class="ui-tooltip-pointer-down ui-widget-content"><span class="ui-tooltip-pointer-down-inner" style="border-top: 7px solid rgb(206, 215, 217);"></span></span></span></a><a href="#" tabindex="0" id="handle_sallary_max" class="ui-slider-handle ui-state-default ui-corner-all" role="slider" aria-labelledby="undefined" aria-valuemin="0" aria-valuemax="11" aria-valuenow="0" aria-valuetext="0" style="left: 0%;"><span class="screenReaderContext"></span><span class="ui-slider-tooltip ui-widget-content ui-corner-all"><span class="ttContent">0</span><span class="ui-tooltip-pointer-down ui-widget-content"><span class="ui-tooltip-pointer-down-inner" style="border-top: 7px solid rgb(206, 215, 217);"></span></span></span></a><ol class="ui-slider-scale ui-helper-reset" role="presentation"><li style="left:0.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">0</span><span class="ui-slider-tic ui-widget-content" style="display: none;"></span></li><li style="left:9.09%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">10K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:18.18%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">20K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:27.27%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">50K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:36.36%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">75K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:45.45%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">100K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:54.55%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">150K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:63.64%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">200K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:72.73%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">250K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:81.82%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">300K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:90.91%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">400K</span><span class="ui-slider-tic ui-widget-content"></span></li><li style="left:100.00%"><span class="ui-slider-label ui-slider-label-show" style="margin-left: 0px;">500K</span><span class="ui-slider-tic ui-widget-content" style="display: none;"></span></li></ol><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 0%;"></div></div>
				</div>


				</div><!-- /#advance-search-option -->
				<!-- Andvance Search Ends -->




				<div id="search-btn-wrap" class="row">

					<div class="col-md-8">
					</div>

					<div class="col-md-4 search-btn-group">


						<button class="btn btn-default btn-job-search " type="submit" name="submit" value="true">Search</button>

													<button class="btn btn-default advance-search-toggle" name="advance-search">Advanced Search</button>
											</div><!-- /.col-md-9 -->


				</div><!-- /.row -->

			</form><!-- /#job-search-form -->
		</div><!-- /.job-search-wrapper -->
	</div><!-- /.container -->
</div>

<div id="jobs-listing" class="in-homepage">
	<div class="container">
		<div class="row">

			<div class="col-lg-8">
				<div class="jobs-listing-title">
					<h3><i class="fa fa-briefcase"></i>Recent Jobs</h3>
				</div>
				<div class="jobs-listing-wrapper">
					<div id="job-listing-tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
						<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
						<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="all_jobs" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#all_jobs" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">All</a></li><li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-21" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tab-21" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Contract</a></li><li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-25" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#tab-25" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Freelance</a></li><li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-26" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false"><a href="#tab-26" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">Full Time</a></li><li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-45" aria-labelledby="ui-id-5" aria-selected="false" aria-expanded="false"><a href="#tab-45" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5">Part Time</a></li>						</ul>
						<div id="loadajax" class="loading-ajax">
													<i class="fa fa-refresh fa-spin fa-2x"></i>
												</div>
						<div id="all_jobs" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false">
							@foreach($vagas as $item)
										<a class="job-listing-permalink" href="http://vagas.com.br{!! $item['url'] !!}" target="_blank">
											<div class="job-listing-row clearfix">
												<div class="job-company-logo">
												<img width="80" height="80" src="{!! asset("assets/img/vagas.png") !!}" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Photodune">
												</div><!-- /.job-company-logo -->
												<div class="job-listing-name">
													<h4><a href="http://vagas.com.br{!! $item['url'] !!}" target="_blank" > {!! $item["titulo"] !!}</a></h4>
													<p class="job-listing-summary">{!! $item["desc"] !!}...</p>
												</div><!-- /.job-listing-name -->
												<div class="job-listing-region">
													<i class="fa fa-fw fa-map-marker"></i>
													São Paulo									</div><!-- /.job-listing-region -->
												<div class="job-listing-type">
													<i class="fa fa-fw fa-user"></i>
													{!! $item["cargo"] !!}									</div><!-- /.job-listing-type -->
											</div><!-- /#job-listing-1757 -->
										</a>
						@endforeach

						<div class="dashboard-pagination"><span class="page-numbers current">1</span>
<a class="page-numbers" href="http://demo.puriwp.com/jobboard/page/2/">2</a>
<a class="page-numbers" href="http://demo.puriwp.com/jobboard/page/3/">3</a>
<a class="next page-numbers" href="http://demo.puriwp.com/jobboard/page/2/">Next</a></div><!-- /.dashboard-pagination -->						</div><!-- /#all_jobs -->
												<script>
													jQuery(document).ready(function($){
														"use strict";
														$('#tab-21').on('click', '.dashboard-pagination a.page-numbers', function(e){
															e.preventDefault();
															var link = $(this).attr('href');
															$('#tab-21').slideUp(300, function(){
																$('#loadajax').show();
																$(this).load(link + ' #tab-21', function() {
																	$('#loadajax').hide();
																	$(this).slideDown(800);
																});
															});
														});
													});
												</script>
						<div id="tab-21" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/entry-level-jobs/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="21" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/videohive-80x21.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Video Hive">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Entry Level Jobs</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										Los Angeles									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Contract									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-1758 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/department-head/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="24" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/photodune-80x24.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Photodune">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Department Head</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										Washington									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Contract									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-229 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/content-and-social-media-specialist/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="23" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/activeden-80x23.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Activeden">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Content and Social Media Specialist</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										Remote									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Contract									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-81 -->
							</a>
						<div class="dashboard-pagination"></div><!-- /.dashboard-pagination -->						</div><!-- /#contract-21 -->
												<script>
													jQuery(document).ready(function($){
														"use strict";
														$('#tab-25').on('click', '.dashboard-pagination a.page-numbers', function(e){
															e.preventDefault();
															var link = $(this).attr('href');
															$('#tab-25').slideUp(300, function(){
																$('#loadajax').show();
																$(this).load(link + ' #tab-25', function() {
																	$('#loadajax').hide();
																	$(this).slideDown(800);
																});
															});
														});
													});
												</script>
						<div id="tab-25" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/instructional-coordinator/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="24" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/photodune-80x24.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Photodune">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Instructional Coordinator</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										Melbourne									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Freelance									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-1757 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/creative-designer/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="21" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/audiojungle-80x21.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Audio Jungle">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Creative Designer</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										Denver									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Freelance									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-230 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/technical-business-analyst-systems-analyst/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="21" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/codecanyon-80x21.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Code Canyon">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Technical Business Analyst/ Systems Analyst</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										Melbourne									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Freelance									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-80 -->
							</a>
						<div class="dashboard-pagination"></div><!-- /.dashboard-pagination -->						</div><!-- /#freelance-25 -->
												<script>
													jQuery(document).ready(function($){
														"use strict";
														$('#tab-26').on('click', '.dashboard-pagination a.page-numbers', function(e){
															e.preventDefault();
															var link = $(this).attr('href');
															$('#tab-26').slideUp(300, function(){
																$('#loadajax').show();
																$(this).load(link + ' #tab-26', function() {
																	$('#loadajax').hide();
																	$(this).slideDown(800);
																});
															});
														});
													});
												</script>
						<div id="tab-26" aria-labelledby="ui-id-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/director-of-business-development/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="20" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/themeforest-80x20.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Theme Forest">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Director Of Business Development</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										New York									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Full Time									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-1763 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/computer-software-engineer/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="21" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/codecanyon-80x21.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Code Canyon">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Computer Software Engineer</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										San Fransisco									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Full Time									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-1761 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/healthcaremedical/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="19" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/12/company-logo-80x19.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="company-logo">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Healthcare/Medical</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										San Fransisco									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Full Time									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-1760 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/event-planning/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="21" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/codecanyon-80x21.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Code Canyon">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Event Planning</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										New York									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Full Time									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-1759 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/store-general-manager/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="20" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/themeforest-80x20.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Theme Forest">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Store General Manager</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										San Fransisco									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Full Time									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-228 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/web-analyst/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="20" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/themeforest-80x20.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="Theme Forest">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Web Analyst</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										New York									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Full Time									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-79 -->
							</a>
						<div class="dashboard-pagination"></div><!-- /.dashboard-pagination -->						</div><!-- /#full-time-26 -->
												<script>
													jQuery(document).ready(function($){
														"use strict";
														$('#tab-45').on('click', '.dashboard-pagination a.page-numbers', function(e){
															e.preventDefault();
															var link = $(this).attr('href');
															$('#tab-45').slideUp(300, function(){
																$('#loadajax').show();
																$(this).load(link + ' #tab-45', function() {
																	$('#loadajax').hide();
																	$(this).slideDown(800);
																});
															});
														});
													});
												</script>
						<div id="tab-45" aria-labelledby="ui-id-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/computer-systems-analyst/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="24" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/3docean-80x24.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="3D Ocean">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Computer Systems Analyst</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										Washington									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Part Time									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-1762 -->
							</a>
													<a class="job-listing-permalink" href="http://demo.puriwp.com/jobboard/job/web-developer/">
								<div class="job-listing-row clearfix">
									<div class="job-company-logo">
									<img width="80" height="24" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/3docean-80x24.png" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="3D Ocean">									</div><!-- /.job-company-logo -->
									<div class="job-listing-name">
										<h4>Web Developer</h4>
										<p class="job-listing-summary">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
									</div><!-- /.job-listing-name -->
									<div class="job-listing-region">
										<i class="fa fa-fw fa-map-marker"></i>
										Texas									</div><!-- /.job-listing-region -->
									<div class="job-listing-type">
										<i class="fa fa-fw fa-user"></i>
										Part Time									</div><!-- /.job-listing-type -->
								</div><!-- /#job-listing-231 -->
							</a>
						<div class="dashboard-pagination"></div><!-- /.dashboard-pagination -->						</div><!-- /#part-time-45 -->
											</div><!-- /#job-listing-tabs -->
				</div><!-- /.jobs-listing-wrapper -->
			</div><!-- /.col-md-8 -->


<div class="col-lg-4">
	<aside id="sidebar-home" class="sidebar">
	<div id="jobboard_featured_job-2" class="widget widget_jobboard_featured_job"><h3 class="home-widget-title">Top Job Opening</h3>		<div id="featured-job" class="featured-job-widget owl-carousel owl-theme owl-loaded">
					<!-- /.featured-job-item -->
					<!-- /.featured-job-item -->
					<!-- /.featured-job-item -->
					<!-- /.featured-job-item -->
				<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1600px, 0px, 0px); transition: 0.25s; width: 3200px;"><div class="owl-item cloned" style="width: auto; margin-right: 0px;"><div class="featured-job-item">
				<div class="featured-job-thumbnail">
				<a href="http://demo.puriwp.com/jobboard/company/codecanyon/"><img width="232" height="63" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/codecanyon.png" class="attachment-jobboard-featured-job-thumbnail wp-post-image" alt="Code Canyon"></a>				</div><!-- /.featured-job-thumbnail -->
				<div class="featured-job-detail">
					<div class="featured-job-title">Technical Business Analyst/ Systems Analyst</div>
					<div class="featured-job-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
					<a href="http://demo.puriwp.com/jobboard/job/technical-business-analyst-systems-analyst/" class="btn btn-view-featured-job">View Job</a>
				</div><!-- /.featured-job-detail -->
				<div class="featured-job-type clearfix">
						<div class="featured-job-location">
							<i class="fa fa-map-marker"></i>
							Melbourne						</div><!-- featured-job-location -->
						<div class="featured-job-contract">
							<i class="fa fa-fw fa-user"></i>
							Freelance						</div><!-- /.featured-job-contract -->
					</div><!-- /.featured-job-type -->
			</div></div><div class="owl-item cloned" style="width: auto; margin-right: 0px;"><div class="featured-job-item">
				<div class="featured-job-thumbnail">
				<a href="http://demo.puriwp.com/jobboard/company/themeforest/"><img width="231" height="60" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/themeforest.png" class="attachment-jobboard-featured-job-thumbnail wp-post-image" alt="Theme Forest"></a>				</div><!-- /.featured-job-thumbnail -->
				<div class="featured-job-detail">
					<div class="featured-job-title">Web Analyst</div>
					<div class="featured-job-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
					<a href="http://demo.puriwp.com/jobboard/job/web-analyst/" class="btn btn-view-featured-job">View Job</a>
				</div><!-- /.featured-job-detail -->
				<div class="featured-job-type clearfix">
						<div class="featured-job-location">
							<i class="fa fa-map-marker"></i>
							New York						</div><!-- featured-job-location -->
						<div class="featured-job-contract">
							<i class="fa fa-fw fa-user"></i>
							Full Time						</div><!-- /.featured-job-contract -->
					</div><!-- /.featured-job-type -->
			</div></div><div class="owl-item" style="width: auto; margin-right: 0px;"><div class="featured-job-item">
				<div class="featured-job-thumbnail">
				<a href="http://demo.puriwp.com/jobboard/company/themeforest/"><img width="231" height="60" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/themeforest.png" class="attachment-jobboard-featured-job-thumbnail wp-post-image" alt="Theme Forest"></a>				</div><!-- /.featured-job-thumbnail -->
				<div class="featured-job-detail">
					<div class="featured-job-title">Director Of Business Development</div>
					<div class="featured-job-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
					<a href="http://demo.puriwp.com/jobboard/job/director-of-business-development/" class="btn btn-view-featured-job">View Job</a>
				</div><!-- /.featured-job-detail -->
				<div class="featured-job-type clearfix">
						<div class="featured-job-location">
							<i class="fa fa-map-marker"></i>
							New York						</div><!-- featured-job-location -->
						<div class="featured-job-contract">
							<i class="fa fa-fw fa-user"></i>
							Full Time						</div><!-- /.featured-job-contract -->
					</div><!-- /.featured-job-type -->
			</div></div><div class="owl-item" style="width: auto; margin-right: 0px;"><div class="featured-job-item">
				<div class="featured-job-thumbnail">
				<a href="http://demo.puriwp.com/jobboard/company/activeden/"><img width="205" height="59" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/activeden.png" class="attachment-jobboard-featured-job-thumbnail wp-post-image" alt="Activeden"></a>				</div><!-- /.featured-job-thumbnail -->
				<div class="featured-job-detail">
					<div class="featured-job-title">Content and Social Media Specialist</div>
					<div class="featured-job-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
					<a href="http://demo.puriwp.com/jobboard/job/content-and-social-media-specialist/" class="btn btn-view-featured-job">View Job</a>
				</div><!-- /.featured-job-detail -->
				<div class="featured-job-type clearfix">
						<div class="featured-job-location">
							<i class="fa fa-map-marker"></i>
							Remote						</div><!-- featured-job-location -->
						<div class="featured-job-contract">
							<i class="fa fa-fw fa-user"></i>
							Contract						</div><!-- /.featured-job-contract -->
					</div><!-- /.featured-job-type -->
			</div></div><div class="owl-item active" style="width: auto; margin-right: 0px;"><div class="featured-job-item">
				<div class="featured-job-thumbnail">
				<a href="http://demo.puriwp.com/jobboard/company/codecanyon/"><img width="232" height="63" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/codecanyon.png" class="attachment-jobboard-featured-job-thumbnail wp-post-image" alt="Code Canyon"></a>				</div><!-- /.featured-job-thumbnail -->
				<div class="featured-job-detail">
					<div class="featured-job-title">Technical Business Analyst/ Systems Analyst</div>
					<div class="featured-job-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
					<a href="http://demo.puriwp.com/jobboard/job/technical-business-analyst-systems-analyst/" class="btn btn-view-featured-job">View Job</a>
				</div><!-- /.featured-job-detail -->
				<div class="featured-job-type clearfix">
						<div class="featured-job-location">
							<i class="fa fa-map-marker"></i>
							Melbourne						</div><!-- featured-job-location -->
						<div class="featured-job-contract">
							<i class="fa fa-fw fa-user"></i>
							Freelance						</div><!-- /.featured-job-contract -->
					</div><!-- /.featured-job-type -->
			</div></div><div class="owl-item" style="width: auto; margin-right: 0px;"><div class="featured-job-item">
				<div class="featured-job-thumbnail">
				<a href="http://demo.puriwp.com/jobboard/company/themeforest/"><img width="231" height="60" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/themeforest.png" class="attachment-jobboard-featured-job-thumbnail wp-post-image" alt="Theme Forest"></a>				</div><!-- /.featured-job-thumbnail -->
				<div class="featured-job-detail">
					<div class="featured-job-title">Web Analyst</div>
					<div class="featured-job-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
					<a href="http://demo.puriwp.com/jobboard/job/web-analyst/" class="btn btn-view-featured-job">View Job</a>
				</div><!-- /.featured-job-detail -->
				<div class="featured-job-type clearfix">
						<div class="featured-job-location">
							<i class="fa fa-map-marker"></i>
							New York						</div><!-- featured-job-location -->
						<div class="featured-job-contract">
							<i class="fa fa-fw fa-user"></i>
							Full Time						</div><!-- /.featured-job-contract -->
					</div><!-- /.featured-job-type -->
			</div></div><div class="owl-item cloned" style="width: auto; margin-right: 0px;"><div class="featured-job-item">
				<div class="featured-job-thumbnail">
				<a href="http://demo.puriwp.com/jobboard/company/themeforest/"><img width="231" height="60" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/themeforest.png" class="attachment-jobboard-featured-job-thumbnail wp-post-image" alt="Theme Forest"></a>				</div><!-- /.featured-job-thumbnail -->
				<div class="featured-job-detail">
					<div class="featured-job-title">Director Of Business Development</div>
					<div class="featured-job-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
					<a href="http://demo.puriwp.com/jobboard/job/director-of-business-development/" class="btn btn-view-featured-job">View Job</a>
				</div><!-- /.featured-job-detail -->
				<div class="featured-job-type clearfix">
						<div class="featured-job-location">
							<i class="fa fa-map-marker"></i>
							New York						</div><!-- featured-job-location -->
						<div class="featured-job-contract">
							<i class="fa fa-fw fa-user"></i>
							Full Time						</div><!-- /.featured-job-contract -->
					</div><!-- /.featured-job-type -->
			</div></div><div class="owl-item cloned" style="width: auto; margin-right: 0px;"><div class="featured-job-item">
				<div class="featured-job-thumbnail">
				<a href="http://demo.puriwp.com/jobboard/company/activeden/"><img width="205" height="59" src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/07/activeden.png" class="attachment-jobboard-featured-job-thumbnail wp-post-image" alt="Activeden"></a>				</div><!-- /.featured-job-thumbnail -->
				<div class="featured-job-detail">
					<div class="featured-job-title">Content and Social Media Specialist</div>
					<div class="featured-job-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
					<a href="http://demo.puriwp.com/jobboard/job/content-and-social-media-specialist/" class="btn btn-view-featured-job">View Job</a>
				</div><!-- /.featured-job-detail -->
				<div class="featured-job-type clearfix">
						<div class="featured-job-location">
							<i class="fa fa-map-marker"></i>
							Remote						</div><!-- featured-job-location -->
						<div class="featured-job-contract">
							<i class="fa fa-fw fa-user"></i>
							Contract						</div><!-- /.featured-job-contract -->
					</div><!-- /.featured-job-type -->
			</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="">&nbsp;</div><div class="owl-next" style="">&nbsp;</div></div><div class="owl-dots" style="display: none;"></div></div></div>
	</div><div id="jobboard_custom_button-2" class="widget widget_jobboard_custom_button">		<div class="upload-post-job-wrapper resume">
			<h4 class="custom-button-widget-title">Upload your resume</h4>
			<p class="custom-button-widget-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit debitis quas reiciendis consectetur totam fuga amet.</p>
			<a href="http://demo.puriwp.com/jobboard/post-a-resume/" class="btn btn-custom-button-widget">Upload Resume</a>
		</div><!-- /.upload-post-job-wrapper -->

	</div>	</aside><!-- /#sidebar-default -->
</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div>
@stop
