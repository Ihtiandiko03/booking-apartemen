@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Data Table</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="#">Home</a>
								</li>
								<li><a href="#">Table</a>
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
						<h2>Tables</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h1>Basic Table</h1>
							<table class="table">
								<thead>
									<tr>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h2>Bordered Table</h2>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Contextual Table</h3>
							<table class="table">
								<thead>
									<tr>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Default</td>
										<td>Defaultson</td>
										<td>def@somemail.com</td>
									</tr>
									<tr class="success">
										<td>Success</td>
										<td>Doe</td>
										<td>john@example.com</td>
									</tr>
									<tr class="danger">
										<td>Danger</td>
										<td>Moe</td>
										<td>mary@example.com</td>
									</tr>
									<tr class="info">
										<td>Info</td>
										<td>Dooley</td>
										<td>july@example.com</td>
									</tr>
									<tr class="warning">
										<td>Warning</td>
										<td>Refs</td>
										<td>bo@example.com</td>
									</tr>
									<tr class="active">
										<td>Active</td>
										<td>Activeson</td>
										<td>act@example.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection