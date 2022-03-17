<!-- 
	modal__dialog--lg == 1060px
	modal__dialog--sm == 530px

	data-modal="#id"
-->
<a href="#" class="chat_btn btn btn--round btn--shadow">
	<img src="<?php echo get_template_directory_uri() . "/assets/img/ico-chat.svg"; ?>" alt="">
</a>
<div id="settings-modal" class="modal">
	<div class="modal__dialog modal__dialog--lg">
		<div class="modal__content">
			<div class="modal__header">
				<h2 class="modal__title">Settings</h2>
				<button type="button" class="btn btn--round btn--shadow" data-close-modal>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/ico-close.svg' ?>" alt="">
				</button>
			</div>
			<form action="#">
				<div class="modal__body settings">
					<div class="settings__section d-sm-flex align-items-sm-center">
						<div class="settings__image mb-20">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/avatar-01.jpg' ?>" alt="#">
						</div>
						<div class="button-group mb-20">
							<div class="button-group__item">
								<label>
									<input type="file" class="sr-only">
									<span class="btn btn--md btn--primary btn--fix-w">
										<span>Upload Photo</span>
									</span>
								</label>
							</div>
							<div class="button-group__item">
								<button type="button" class="btn btn--md btn--shadow btn--fix-w">
									<span>Remove</span>
								</button>
							</div>
						</div>
					</div>
					<div class="settings__section">
						<h3 class="fw-semi lh-title text-primary mb-20">Profile Information</h3>
						<div class="row section__row">
							<div class="col-md-6">
								<div class="form-group mb-20">
									<label class="form-label">First Name</label>
									<input type="text" class="form-control" placeholder="Enter first name...">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mb-20">
									<label class="form-label">Last Name</label>
									<input type="text" class="form-control" placeholder="Enter last name...">
								</div>
							</div>
						</div>
					</div>
					<div class="settings__section">
						<div class="row section__row">
							<div class="col-md-6">
								<div class="form-group mb-20">
									<label class="form-label">Email</label>
									<input type="email" class="form-control" placeholder="Enter email...">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mb-20">
									<label class="form-label">Secondary Email (optional)</label>
									<input type="email" class="form-control" placeholder="Enter secondary email...">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mb-20">
									<label class="form-check">
										<input type="checkbox" class="form-check__field">
										<span class="form-check__label"><span>Secondary email primary for communication</span></span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="settings__section">
						<div class="row section__row">
							<div class="col-md-6">
								<div class="form-group mb-20">
									<label class="form-label">Phone Number</label>
									<input type="tel" class="form-control" placeholder="Enter phone number...">
								</div>
							</div>
						</div>
					</div>
					<div class="settings__section">
						<h3 class="fw-semi lh-title text-primary mb-20">Change Password</h3>
						<div class="row section__row">
							<div class="col-md-6">
								<div class="form-group mb-20">
									<label class="form-label">New Password</label>
									<input type="password" class="form-control" placeholder="Enter new password...">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mb-20">
									<label class="form-label">Confirm Password</label>
									<input type="password" class="form-control" placeholder="Confirm password...">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal__footer">
					<div class="button-group">
						<div class="button-group__item">
							<button type="button" class="btn btn--md btn--shadow btn--fix-w" data-close-modal>
								<span>Cancel</span>
							</button>
						</div>
						<div class="button-group__item">
							<button type="submit" class="btn btn--md btn--primary btn--fix-w">
								<span>Save Changes</span>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="material-modal" class="modal">
	<div class="modal__dialog modal__dialog--lg">
		<div class="modal__content">
			<div class="modal__header">
				<h2 class="modal__title">A-Frame Sign</h2>
				<button type="button" class="btn btn--round btn--shadow" data-close-modal>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/ico-close.svg' ?>" alt="">
				</button>
			</div>
			<form action="#">
				<div class="modal__body">
					<div class="order">
						<div class="row order__row">
							<div class="col-md-6">
								<h3 class="fw-semi lh-title text-primary mb-20">Product Info</h3>
								<div class="form-group mb-20">
									<label class="form-label">Select Size</label>
									<select class="form-control">
										<option>Select</option>
										<option value="1" selected>24" x 36"</option>
										<option value="2">26" x 38"</option>
										<option value="3">28" x 40"</option>
									</select>
								</div>
								<div class="form-group mb-20">
									<label class="form-label">Select Options</label>
									<select class="form-control">
										<option>Select</option>
										<option value="1" selected>With a Stand + $117.00</option>
										<option value="2">Without Stand + $99.00</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<table class="order-table mb-20">
									<thead>
										<tr>
											<th>Number of Packs</th>
											<th class="w-100">Per Item</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1+</td>
											<td>$25.25</td>
										</tr>
									</tbody>
								</table>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group mb-20">
											<label class="form-label">Quantity</label>
											<input type="number" class="form-control" value="1">
										</div>
									</div>
								</div>
								<div class="order-summary mb-20">
									<h3 class="fw-semi lh-title text-primary">Summary</h3>
									<ul class="order-summary__list">
										<li class="order-summary__item">
											<span>24" x 36"</span>
											<span>A-Frame Sign</span>
										</li>
									</ul>
								</div>
								<div class="order__total d-flex justify-content-between mb-20">
									<span>Total</span>
									<span>$25.25</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal__footer">
					<div class="button-group justify-content-between">
						<div class="button-group__item">
							<button type="button" class="btn btn--md btn--shadow btn--fix-w" data-close-modal>
								<span>Cancel</span>
							</button>
						</div>
						<div class="button-group__item">
							<button type="submit" class="btn btn--md btn--primary btn--fix-w">
								<span>Order Item</span>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="raise-ticket" class="modal">
	<div class="modal__dialog modal__dialog--sm">
		<div class="modal__content">
			<div class="modal__header">
				<h2 class="modal__title">Raise a Ticket</h2>
				<button type="button" class="btn btn--round btn--shadow" data-close-modal>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/ico-close.svg' ?>" alt="">
				</button>
			</div>
			<form action="#">
				<div class="modal__body">
					<div class="form-group mb-20">
						<label for="example-input-01" class="form-label">Subject</label>
						<input id="example-input-01" type="text" class="form-control" value="Subject Name">
					</div>
					<div class="form-group mb-20">
						<label class="form-label">Form label</label>
						<select class="form-control">
							<option selected hidden>Select problem category</option>
							<option value="1">option 1</option>
							<option value="2">option 2</option>
							<option value="3">option 3</option>
						</select>
					</div>
					<div class="form-group mb-20">
						<label for="example-input-03" class="form-label">Subject</label>
						<textarea id="example-input-03" class="form-control" placeholder="Subject Name"></textarea>
					</div>
				</div>
				<div class="modal__footer">
					<div class="button-group justify-content-between">
						<div class="button-group__item">
							<button type="button" class="btn btn--md btn--shadow btn--fix-w" data-close-modal>
								<span>Cancel</span>
							</button>
						</div>
						<div class="button-group__item">
							<button type="submit" class="btn btn--md btn--primary btn--fix-w">
								<span>Order Item</span>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="access-ebook" class="modal">
	<div class="modal__dialog modal__dialog--promo">
		<div class="modal__content promo-modal">
			<div class="d-flex justify-content-end mb-20 mb-lg-0">
				<button type="button" class="btn btn--round btn--shadow modal__outside" data-close-modal>
					<span class="d-inline-flex text-body">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/ico-close.svg' ?>" alt="">
					</span>
				</button>
			</div>
			<div class="row">
				<div class="col promo-modal__left">
					<figure class="text-center mb-20 mb-sm-0">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/ebook.png' ?>" alt="EBook" class="promo-modal__img">
					</figure>
				</div>
				<div class="col promo-modal__right">
					<h2 class="promo-modal__title lh-title fw-semi">Get access to EBook</h2>
					<form action="#">
						<div class="form-group mb-20">
							<label for="ebook-input-01" class="form-label">Name</label>
							<input id="ebook-input-01" type="text" class="form-control" placeholder="Type your Name...">
						</div>
						<div class="form-group mb-20">
							<label for="ebook-input-02" class="form-label">Email Address</label>
							<input id="ebook-input-02" type="text" class="form-control" placeholder="Type your Email...">
						</div>
						<div class="form-group mb-20">
							<label for="ebook-input-03" class="form-label">Phone Number</label>
							<input id="ebook-input-03" type="text" class="form-control" placeholder="Type your Phone Number...">
						</div>
						<button type="submit" class="btn btn--md btn--primary w-100"><span>Get EBook</span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>