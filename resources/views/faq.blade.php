@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>FAQ</h4>
							<ul>
								<li><a href="{{ url('/') }}">Home</a>
								</li>
								<li><a href="#">FAQ</a>
								</li>
							</ul>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<div class="inn-body-section pad-bot-55">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>FAQ</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Frequently Asked Questions</p>
					</div>
					<!--TYPOGRAPHY SECTION-->
					<div class="col-12">
						<div class="head-typo typo-com collap-expand">
							<ul class="collapsible popout" data-collapsible="accordion">
								@forelse ($faq as $f)
									<li>
										<div class="collapsible-header"><i class="material-icons">help_outline</i>{{ $f->question }}</div>
										<div class="collapsible-body"><span>{{ $f->answer }}</span>
										</div>
									</li>
								@empty
									<li class="text-center">DATA KOSONG</li>
								@endforelse
							</ul>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection