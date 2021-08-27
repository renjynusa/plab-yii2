<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<!-- Main Content Header -->
<div class="main-content-header">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <span class="active">CRM</span>
        </li>
    </ol>
</div>
<!-- End Main Content Header -->

<!-- Stats Card -->
<div class="row">
	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-two mb-30">
			<div class="media align-items-center justify-content-between">
				<div class="ml-0">
					<p class="mb-10 line-height-1">Sales</p>
					<h3 class="mb-0 fs-25">$25,890</h3>
				</div>
				<div class="avatar avatar-blue">
					<i data-feather="dollar-sign"></i>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-two mb-30">
			<div class="media align-items-center justify-content-between">
				<div class="ml-0">
					<p class="mb-10 line-height-1">Net Profit</p>
					<h3 class="mb-0 fs-25">$20,467</h3>
				</div>
				<div class="avatar avatar-cyan">
					<i data-feather="briefcase"></i>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-two mb-30">
			<div class="media align-items-center justify-content-between">
				<div class="ml-0">
					<p class="mb-10 line-height-1">New Products</p>
					<h3 class="mb-0 fs-25">10,000</h3>
				</div>
				<div class="avatar avatar-gold">
					<i data-feather="shopping-bag"></i>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-two mb-30">
			<div class="media align-items-center justify-content-between">
				<div class="ml-0">
					<p class="mb-10 line-height-1">New Users</p>
					<h3 class="mb-0 fs-25">$23,523</h3>
				</div>
				<div class="avatar avatar-purple">
					<i data-feather="users"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Stats Card -->

<!-- Total Sales & Weekly Target -->
<div class="row">
	<div class="col-lg-12 col-xl-8">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Total Sales</h5>
				</div>

				<!-- File path: assets/js/custom-chart.js -->
				<div id="total-sales-chart"></div>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-xl-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Weekly Target</h5>
				</div>

				<!-- File path: assets/js/custom-chart.js -->
				<div id="weekly-target-chart" class="mh-100"></div>
				<p class="m-0 text-center fw-600">85% of Your Goal</p>
			</div>
		</div>
	</div>
</div>

<!-- Campaigns & Social Marketing -->
<div class="row">
	<div class="col-lg-12 col-xl-8">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Marketing Campaigns</h5>
				</div>

				<div class="table-responsive">
					<table class="table table-hover text-vertical-middle mb-0">
						<thead class="bort-none borpt-0">
							<tr>
								<th>Campaigns Name</th>
								<th>Growth</th>
								<th>Charges</th>
								<th>Status</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<?= Html::img('@web/images/product/product1.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Macbook Pro
								</td>
								<td>
									<span class="badge badge-cyan fs-12">
										<i class="icofont-swoosh-up"></i>
										<span class="fw-600">50.70%</span>
									</span>
								</td>
								<td>$50.99</td>
								<td>
									<span class="badge badge_success py-1">Active</span>
								</td>
								<td class="text-center">
									<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
										<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
									</a>
									<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
										<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>
									<?= Html::img('@web/images/product/product2.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									iPhone 11 pro
								</td>
								<td>
									<span class="badge badge-cyan fs-12">
										<i class="icofont-swoosh-up"></i>
										<span class="fw-600">50.70%</span>
									</span>
								</td>
								<td>$299.99</td>
								<td>
									<span class="badge badge_danger py-1">Closed</span>
								</td>
								<td class="text-center">
									<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
										<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
									</a>
									<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
										<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>
									<?= Html::img('@web/images/product/product3.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									HeadPhone
								</td>
								<td>
									<span class="badge badge-red fs-12">
										<i class="icofont-swoosh-down"></i>
										<span class="fw-600">30.70%</span>
									</span>
								</td>
								<td>$120.99</td>
								<td>
									<span class="badge badge_success py-1">Active</span>
								</td>
								<td class="text-center">
									<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
										<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
									</a>
									<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
										<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>
									<?= Html::img('@web/images/product/product4.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Adidas shoes
								</td>
								<td>
									<span class="badge badge-cyan fs-12">
										<i class="icofont-swoosh-up"></i>
										<span class="fw-600">50.70%</span>
									</span>
								</td>
								<td>$250.99</td>
								<td>
									<span class="badge badge_success py-1">Active</span>
								</td>
								<td class="text-center">
									<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
										<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
									</a>
									<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
										<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>
									<?= Html::img('@web/images/product/product5.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Adidas shirts
								</td>
								<td>
									<span class="badge badge-cyan fs-12">
										<i class="icofont-swoosh-up"></i>
										<span class="fw-600">50.70%</span>
									</span>
								</td>
								<td>$350.99</td>
								<td>
									<span class="badge badge_danger py-1">Closed</span>
								</td>
								<td class="text-center">
									<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
										<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
									</a>
									<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
										<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>
									<?= Html::img('@web/images/product/product6.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Nike shirts
								</td>
								<td>
									<span class="badge badge-red fs-12">
										<i class="icofont-swoosh-down"></i>
										<span class="fw-600">40.70%</span>
									</span>
								</td>
								<td>$140.99</td>
								<td>
									<span class="badge badge_success py-1">Active</span>
								</td>
								<td class="text-center">
									<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
										<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
									</a>
									<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
										<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-xl-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Social Marketing</h5>
				</div>

				<div class="marketing-content">
					<div class="list">
						<i data-feather="facebook" class="icon fb"></i>
						<h3><a href="#">Facebook Ads</a></h3>
						<p>1.5k Like - 598 Shares</p>
						<div class="stats">
							<i data-feather="trending-up" class="icon text-success"></i>
							50%
						</div>
					</div>
					<div class="list">
						<i data-feather="instagram" class="icon ins"></i>
						<h3><a href="#">Instagram Ads</a></h3>
						<p>2.5k Follows - 598 Shares</p>
						<div class="stats">
							<i data-feather="trending-up" class="icon text-success"></i>
							45%
						</div>
					</div>
					<div class="list">
						<i data-feather="twitter" class="icon twi"></i>
						<h3><a href="#">Twitter Ads</a></h3>
						<p>1.1k Like - 598 Shares</p>
						<div class="stats">
							<i data-feather="trending-down" class="icon text-danger"></i>
							25%
						</div>
					</div>
					<div class="list">
						<i data-feather="linkedin" class="icon lin"></i>
						<h3><a href="#">Linkedin Ads</a></h3>
						<p>1.6k Like - 463 Shares</p>
						<div class="stats">
							<i data-feather="trending-up" class="icon text-success"></i> 
							55%
						</div>
					</div>
					<div class="list">
						<i data-feather="youtube" class="icon ytb"></i>
						<h3><a href="#">Youtube Ads</a></h3>
						<p>1.5m Subscribe - 598 Shares</p>
						<div class="stats">
							<i data-feather="trending-down" class="icon text-danger"></i>
							75%
						</div>
					</div>
					<div class="list">
						<i data-feather="github" class="icon gh"></i>
						<h3><a href="#">Youtube Ads</a></h3>
						<p>1.5m Subscribe - 598 Shares</p>
						<div class="stats">
							<i data-feather="trending-up" class="icon text-success"></i>
							75%
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Latest Transactions -->
<div class="row">
	<div class="col-lg-12 col-xl-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Finance & Sales</h5>
				</div>

				<div class="stats-card-two analytics-card pt-2">
					<div class="media align-items-center">
						<div class="avatar avatar-blue">
							<i data-feather="briefcase"></i>
						</div>
						<div class="ml-15">
							<p class="mb-7 line-height-1">Revenue</p>
							<h4 class="mb-0 fs-20">$25,890</h4>
						</div>
						<span class="badge badge-cyan fs-12 position-right">
							<i class="icofont-swoosh-up"></i>
							<span class="fw-600 m-l-5">8.70%</span>
						</span>
					</div>
				</div>

				<div class="stats-card-two analytics-card">
					<div class="media align-items-center">
						<div class="avatar avatar-cyan">
							<i data-feather="database"></i>
						</div>
						<div class="ml-15">
							<p class="mb-7 line-height-1">Order</p>
							<h4 class="mb-0 fs-20">3,569</h4>
						</div>
						<span class="badge badge-cyan fs-12 position-right">
							<i class="icofont-swoosh-up"></i>
							<span class="fw-600 m-l-5">7.60%</span>
						</span>
					</div>
				</div>

				<div class="stats-card-two analytics-card">
					<div class="media align-items-center">
						<div class="avatar avatar-purple">
							<i data-feather="file-text"></i>
						</div>
						<div class="ml-15">
							<p class="mb-7 line-height-1">Total Leads</p>
							<h4 class="mb-0 fs-20">4,890</h4>
						</div>
						<span class="badge badge-cyan fs-12 position-right">
							<i class="icofont-swoosh-up"></i>
							<span class="fw-600 m-l-5">6.75%</span>
						</span>
					</div>
				</div>

				<div class="stats-card-two analytics-card">
					<div class="media align-items-center">
						<div class="avatar avatar-blue">
							<i data-feather="users"></i>
						</div>
						<div class="ml-15">
							<p class="mb-7 line-height-1">Total Vendors</p>
							<h4 class="mb-0 fs-20">42.7%</h4>
						</div>
						<span class="badge badge-red fs-12 position-right">
							<i class="icofont-swoosh-down"></i>
							<span class="fw-600 m-l-5">4.70%</span>
						</span>
					</div>
				</div>

				<div class="stats-card-two analytics-card">
					<div class="media align-items-center">
						<div class="avatar avatar-gold">
							<i data-feather="dollar-sign"></i>
						</div>
						<div class="ml-15">
							<p class="mb-7 line-height-1">Total Expense</p>
							<h4 class="mb-0 fs-20">$5,678</h4>
						</div>
						<span class="badge badge-red fs-12 position-right">
							<i class="icofont-swoosh-down"></i>
							<span class="fw-600 m-l-5">5.70%</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-xl-8">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Latest Transactions</h5>
				</div>

				<div class="table-responsive">
					<table class="table table-hover text-vertical-middle mb-0">
						<thead class="bort-none borpt-0">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Customer</th>
								<th scope="col">Product</th>
								<th scope="col">Date</th>
								<th scope="col">Price</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>#6791</strong></td>
								<td>
									<?= Html::img('@web/images/user/1.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Colin Firth
								</td>
								<td>
									<?= Html::img('@web/images/product/product1.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded"']); ?> 
									Macbook Pro
								</td>
								<td>1 Jun 2019</td>
								<td>$289.50</td>
								<td><span class="badge badge_warning py-1">Pending</span></td>
							</tr>
							<tr>
								<td><strong>#6792</strong></td>
								<td>
									<?= Html::img('@web/images/user/2.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Michael Sheen
								</td>
								<td>
									<?= Html::img('@web/images/product/product2.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded"']); ?> 
									iPhone 11 pro
								</td>
								<td>2 Jun 2019</td>
								<td>$389.50</td>
								<td><span class="badge badge_success py-1">Delivered</span>
								</td>
							</tr>
							<tr>
								<td><strong>#6793</strong></td>
								<td>
									<?= Html::img('@web/images/user/3.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Tom Hardy
								</td>
								<td>
									<?= Html::img('@web/images/product/product3.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded"']); ?> 
									HeadPhone
								</td>
								<td>3 Jun 2019</td>
								<td>$250.50</td>
								<td><span class="badge badge_danger py-1">Declined</span>
								</td>
							</tr>
							<tr>
								<td><strong>#6794</strong></td>
								<td>
									<?= Html::img('@web/images/user/4.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?>  
									Daniel Craig
								</td>
								<td>
									<?= Html::img('@web/images/product/product4.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded"']); ?> 
									Adidas shoes
								</td>
								<td>4 Jun 2019</td>
								<td>$500.50</td>
								<td><span class="badge badge_success py-1">Delivered</span>
								</td>
							</tr>
							<tr>
								<td><strong>#6795</strong></td>
								<td>
									<?= Html::img('@web/images/user/5.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Jude Law
								</td>
								<td>
									<?= Html::img('@web/images/product/product5.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded"']); ?> 
									Adidas shirts
								</td>
								<td>4 Jun 2019</td>
								<td>$279.50</td>
								<td><span class="badge badge_success py-1">Declined</span>
								</td>
							</tr>
							<tr>
								<td><strong>#6796</strong></td>
								<td>
									<?= Html::img('@web/images/user/6.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
									Idris Elba
								</td>
								<td>
									<?= Html::img('@web/images/product/product6.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded"']); ?> 
									Nike shirts
								</td>
								<td>5 Jun 2019</td>
								<td>$259.50</td>
								<td><span class="badge badge_danger py-1">Declined</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>