@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Form Fields</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="#">Home</a>
								</li>
								<li><a href="#">Form Fields</a>
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
						<h2>Form Fields</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Forms are the standard way to receive user inputted data. The transitions and smoothness of these elements are very important because of the inherent user interaction associated with forms.</p>
					</div>
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand book-form inn-com-form">
							<h2>Input fields</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input placeholder="Placeholder" type="text" class="validate">
										<label>First Name</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Last Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input disabled value="I am not editable" type="text" class="validate">
										<label>Disabled</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input type="password" class="validate">
										<label>Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input type="email" class="validate">
										<label>Email</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12"> This is an inline input field:
										<div class="input-field inline">
											<input type="email" class="validate">
											<label data-error="wrong" data-success="right">Email</label>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand">
							<h2>Prefilling Text Inputs</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<div class="input-field col s12">
								<input value="Alvin" type="text" class="validate">
								<label class="active">First Name</label>
							</div>
							<div class="input-field col s12">
								<textarea class="materialize-textarea"></textarea>
								<label class="active">Textarea</label>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand book-form inn-com-form">
							<h2>Icon Prefixes</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6"> <i class="material-icons prefix">account_circle</i>
										<input type="text" class="validate">
										<label>First Name</label>
									</div>
									<div class="input-field col s6"> <i class="material-icons prefix">phone</i>
										<input type="tel" class="validate">
										<label>Telephone</label>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand book-form inn-com-form">
							<h2>Custom Error or Success Messages</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<form class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<input type="email" class="validate">
										<label data-error="wrong" data-success="right">Email</label>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand book-form inn-com-form">
							<h2>Select</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<form class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<select>
											<option value="" disabled selected>Choose your option</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand form-ch-box">
							<h2>Radio Buttons</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<form action="#">
								<p>
									<input name="group1" type="radio" id="test1" />
									<label for="test1">Red</label>
								</p>
								<p>
									<input name="group1" type="radio" id="test2" />
									<label for="test2">Yellow</label>
								</p>
								<p>
									<input class="with-gap" name="group1" type="radio" id="test3" />
									<label for="test3">Green</label>
								</p>
								<p>
									<input name="group1" type="radio" id="test4" disabled="disabled" />
									<label for="test4">Brown</label>
								</p>
							</form>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand form-ch-box">
							<h2>Checkboxes</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<form action="#">
								<p>
									<input type="checkbox" id="test5" />
									<label for="test5">Red</label>
								</p>
								<p>
									<input type="checkbox" id="test6" checked="checked" />
									<label for="test6">Yellow</label>
								</p>
								<p>
									<input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
									<label for="filled-in-box">Filled in</label>
								</p>
								<p>
									<input type="checkbox" id="indeterminate-checkbox" />
									<label for="indeterminate-checkbox">Indeterminate Style</label>
								</p>
								<p>
									<input type="checkbox" id="test7" checked="checked" disabled="disabled" />
									<label for="test7">Green</label>
								</p>
								<p>
									<input type="checkbox" id="test8" disabled="disabled" />
									<label for="test8">Brown</label>
								</p>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand">
							<h2>Switches</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<!-- Switch -->
							<div class="switch">
								<label> Off
									<input type="checkbox"> <span class="lever"></span> On </label>
							</div>
							<!-- Disabled Switch -->
							<div class="switch">
								<label> Off
									<input disabled type="checkbox"> <span class="lever"></span> On </label>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand book-form inn-com-form">
							<h2>Character Counter</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input id="input_text" type="text" data-length="10">
										<label for="input_text">Input text</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
										<label for="textarea1">Textarea</label>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="head-typo typo-com collap-expand">
							<h2>Switches</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection