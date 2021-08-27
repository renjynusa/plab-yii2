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
            <span class="active">Projects</span>
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
					<p class="mb-10 line-height-1">Projects</p>
					<h3 class="mb-0 fs-25">8,467</h3>
				</div>
				<div class="avatar avatar-blue radius-0">
					<i data-feather="grid"></i>
				</div>
			</div>

			<div class="mt-15">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Monthly Goal</span>
					</div>
					<span class="fw-600">70%</span>
				</div>

				<div class="progress progress-sm mt-1">
					<div class="progress-bar bg-primary" style="width: 70%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-two mb-30">
			<div class="media align-items-center justify-content-between">
				<div class="ml-0">
					<p class="mb-10 line-height-1">Tasks</p>
					<h3 class="mb-0 fs-25">15,435</h3>
				</div>
				<div class="avatar avatar-cyan radius-0">
					<i data-feather="file-text"></i>
				</div>
			</div>

			<div class="mt-15">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Monthly Goal</span>
					</div>
					<span class="fw-600">60%</span>
				</div>

				<div class="progress progress-sm mt-1">
					<div class="progress-bar bg-success" style="width: 60%"></div>
				</div>
			</div>
		</div>
	</div>
	 
	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-two mb-30">
			<div class="media align-items-center justify-content-between">
				<div class="ml-0">
					<p class="mb-10 line-height-1">New Client</p>
					<h3 class="mb-0 fs-25">10,000</h3>
				</div>
				<div class="avatar avatar-gold radius-0">
					<i data-feather="user"></i>
				</div>
			</div>

			<div class="mt-15">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Monthly Goal</span>
					</div>
					<span class="fw-600">50%</span>
				</div>

				<div class="progress progress-sm mt-1">
					<div class="progress-bar bg-warning" style="width: 50%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-two mb-30">
			<div class="media align-items-center justify-content-between">
				<div class="ml-0">
					<p class="mb-10 line-height-1">Members</p>
					<h3 class="mb-0 fs-25">5,523</h3>
				</div>
				<div class="avatar avatar-purple radius-0">
					<i data-feather="users"></i>
				</div>
			</div>

			<div class="mt-15">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Monthly Goal</span>
					</div>
					<span class="fw-600">45%</span>
				</div>

				<div class="progress progress-sm mt-1">
					<div class="progress-bar bg-purple" style="width: 45%"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Stats Card -->

<!-- Projects List & Monthly hours Target -->
<div class="row">
	<div class="col-lg-12 col-xl-8">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<a href="#" class="btn btn-primary float-right">View all</a>
					<h5 class="card-title">Projects List</h5>
				</div>

				<div class="table-responsive">
					<table class="table table-hover text-vertical-middle mb-0">
						<thead class="bort-none borpt-0">
							<tr>
								<th>Project</th>
								<th>Tasks</th>
								<th>Members</th>
								<th>Date</th>
								<th>Status</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/projects/1.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-2']); ?> 
										<strong>Admin App Design</strong>
									</div>
								</td>
								<td>UI/UX Design</td>
								<td>
									<span class="badge badge-cyan">Ready</span>
								</td>
								<td>10 Nov 2019</td>
								<td>
									<span class="badge badge-cyan">
										<span class="fw-600">100%</span>
										<i class="icofont-check-circled"></i>
									</span>
								</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/projects/2.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-2']); ?>
										<strong>Laravel Admin Template</strong>
									</div>
								</td>
								<td>Backend Development</td>
								<td>
									<span class="badge badge-cyan">Ready</span>
								</td>
								<td>15 Nov 2019</td>
								<td>
									<span class="badge badge-cyan">
										<span class="fw-600">100%</span>
										<i class="icofont-check-circled"></i>
									</span>
								</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/projects/3.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-2']); ?>
										<strong>Adani App Studio</strong>
									</div>
								</td>
								<td>Development</td>
								<td>
									<span class="badge badge_warning">In Progress</span>
								</td>
								<td>10 Nov 2019</td>
								<td>
									<span class="badge badge_warning">
										<span class="fw-600">70%</span>
										<i class="icofont-check-circled"></i>
									</span>
								</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/projects/4.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-2']); ?>
										<strong>IT Company</strong>
									</div>
								</td>
								<td>Web Design</td>
								<td>
									<span class="badge badge_warning">In Progress</span>
								</td>
								<td>20 Nov 2019</td>
								<td>
									<span class="badge badge_warning">
										<span class="fw-600">60%</span>
										<i class="icofont-check-circled"></i>
									</span>
								</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/projects/5.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-2']); ?>
										<strong>Admin Master</strong>
									</div>
								</td>
								<td>UI/UX Design</td>
								<td>
									<span class="badge badge-cyan">Ready</span>
								</td>
								<td>25 Nov 2019</td>
								<td>
									<span class="badge badge-cyan">
										<span class="fw-600">100%</span>
										<i class="icofont-check-circled"></i>
									</span>
								</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/projects/6.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-2']); ?>
										<strong>React Admin</strong>
									</div>
								</td>
								<td>Development</td>
								<td>
									<span class="badge badge-red">Declined</span>
								</td>
								<td>26 Nov 2019</td>
								<td>
									<span class="badge badge-red">
										<span class="fw-600">0%</span>
										<i class="icofont-close-line-circled"></i>
									</span>
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
					<h5 class="card-title">Monthly hours Target</h5>
				</div>
				
				<!-- File path: assets/js/custom-chart.js -->
				<div id="monthly-hours-target" class="mh-100"></div>
				<p class="m-0 text-center fw-600">70% of Your Goal</p>
			</div>
		</div>
	</div>
</div>

<!-- Team Members & Assigned tasks-->
<div class="row">
	<div class="col-lg-12 col-xl-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<a href="#" class="btn btn-primary float-right">View all</a>
					<h5 class="card-title">Team Members</h5>
				</div>

				<div class="table-responsive">
					<table class="table table-hover text-vertical-middle mb-0">
						<thead class="bort-none borpt-0">
							<tr>
								<th>Name</th>
								<th>Designation</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/7.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Colin Firth</strong>
									</div>
								</td>
								<td>UI/UX Designer</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/6.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Michael Sheen</strong>
									</div>
								</td>
								<td>Backend Developer</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/5.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Tom Hardy</strong>
									</div>
								</td>
								<td>Web Developer</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/4.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Daniel Craig</strong>
									</div>
								</td>
								<td>SQA Engineer</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/3.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Ralph Fiennes</strong>
									</div>
								</td>
								<td>Full Stack Developer</td>
							</tr>

							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/2.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Henry Cavill</strong>
									</div>
								</td>
								<td>Mobile Developer</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-xl-8">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<a href="#" class="btn btn-primary float-right">View all</a>
					<h5 class="card-title">Assigned Tasks</h5>
				</div>

				<div class="table-responsive">
					<table class="table table-hover text-vertical-middle mb-0">
						<thead class="bort-none borpt-0">
							<tr>
								<th>Member Name</th>
								<th>Tasks</th>
								<th>Project Due Date</th>
								<th>Status</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/1.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Colin Firth</strong>
									</div>
								</td>
								<td>UI/UX Design</td>
								<td>10 Nov 2019</td>
								<td>
									<span class="badge badge-cyan">
										<span class="fw-600">Completed</span>
										<i class="icofont-check-circled"></i>
									</span>
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
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/2.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Michael Sheen</strong>
									</div>
								</td>
								<td>Backend Development</td>
								<td>15 Nov 2019</td>
								<td>
									<span class="badge badge-cyan">
										<span class="fw-600">Completed</span>
										<i class="icofont-check-circled"></i>
									</span>
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
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/3.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Tom Hardy</strong>
									</div>
								</td>
								<td>Development</td>
								<td>20 Nov 2019</td>
								<td>
									<span class="badge badge_warning">
										<span class="fw-600">70% Completed</span>
									</span>
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
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/4.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Daniel Craig</strong>
									</div>
								</td>
								<td>Web Design</td>
								<td>22 Nov 2019</td>
								<td>
									<span class="badge badge_warning">
										<span class="fw-600">60% Completed</span>
									</span>
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
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/6.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Ralph Fiennes</strong>
									</div>
								</td>
								<td>UI/UX Design</td>
								<td>20 Nov 2019</td>
								<td>
									<span class="badge badge-cyan">
										<span class="fw-600">Completed</span>
										<i class="icofont-check-circled"></i>
									</span>
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
									<div class="media align-items-center">
										<?= Html::img('@web/images/user/5.jpg', ['alt' => 'Image', 'class' => 'rounded wh-30 mr-2']); ?>
										<strong>Jude Law</strong>
									</div>
								</td>
								<td>Development</td>
								<td>20 Nov 2019</td>
								<td>
									<span class="badge badge-red">
										<span class="fw-600">Declined</span>
									</span>
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
</div>

<!-- Team Members & Assigned tasks-->
<div class="row">
	<div class="col-lg-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<a href="#" class="btn btn-primary float-right">View all</a>
					<h5 class="card-title">Upcoming Meeting</h5>
				</div>

				<div class="d-flex mb-20">
					<div class="text-center">
						<div class="avatar avatar-blue wh-50 rounded">
							<span class="line-height-1 pt-12">
								17 <br> <span class="fs-11">May</span>
							</span>
						</div>
					</div>

					<div class="ml-3">
						<h6 class="mb-1 mt-1 fs-15">Project Meeting</h6>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</div>

				<div class="d-flex mb-20">
					<div class="text-center">
						<div class="avatar avatar-cyan wh-50 rounded">
							<span class="line-height-1 pt-12">
								20 <br> <span class="fs-11">May</span>
							</span>
						</div>
					</div>

					<div class="ml-3">
						<h6 class="mb-1 mt-1 fs-15">Designer Discussion</h6>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</div>

				<div class="d-flex mb-20">
					<div class="text-center">
						<div class="avatar avatar-gold wh-50 rounded">
							<span class="line-height-1 pt-12">
								22 <br> <span class="fs-11">May</span>
							</span>
						</div>
					</div>

					<div class="ml-3">
						<h6 class="mb-1 mt-1 fs-15">Development Discussion</h6>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</div>

				<div class="d-flex">
					<div class="text-center">
						<div class="avatar avatar-red wh-50 rounded">
							<span class="line-height-1 pt-12">
								25 <br> <span class="fs-11">May</span>
							</span>
						</div>
					</div>

					<div class="ml-3">
						<h6 class="mb-0 mt-2 fs-15">Development Plan Discussion</h6>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<a href="#" class="btn btn-primary float-right">View all</a>
					<h5 class="card-title">Activity</h5>
				</div>

				<div class="height-265">
					<div class="timeline">
						<div class="timeline-list">
							<i class="icofont-check timeline-icon primary-color"></i>
							<h6 class="mb-1 fs-15">Colin Firth</h6>
							<p>Finished the project. Lorem ipsum dolor sit amet.</p>

							<span class="fs-13 mt-2">
								<i class="icofont-wall-clock"></i>
								<span class="m-l-5">9:00 AM</span>
							</span>
						</div>

						<div class="timeline-list">
							<i class="icofont-check timeline-icon primary-color"></i>
							<h6 class="mb-1 fs-15">Michael Sheen</h6>
							<p>Great work!. Lorem ipsum dolor sit amet.</p>

							<span class="fs-13 mt-2">
								<i class="icofont-wall-clock"></i>
								<span class="m-l-5">9:10 AM</span>
							</span>
						</div>
						
						<div class="timeline-list">
							<i class="icofont-check timeline-icon primary-color"></i>
							<h6 class="mb-1 fs-15">Tom Hardy</h6>
							<p>Hello Jems, Lorem ipsum dolor sit amet.</p>

							<span class="fs-13 mt-2">
								<i class="icofont-wall-clock"></i>
								<span class="m-l-5">9:30 AM</span>
							</span>
						</div>

						<div class="timeline-list">
							<i class="icofont-check timeline-icon primary-color"></i>
							<h6 class="mb-1 fs-15">Daniel Craig</h6>
							<p>Finished the project, Lorem ipsum dolor sit amet.</p>

							<span class="fs-13 mt-2">
								<i class="icofont-wall-clock"></i>
								<span class="m-l-5">10:30 AM</span>
							</span>
						</div>

						<div class="timeline-list">
							<i class="icofont-check timeline-icon primary-color"></i>
							<h6 class="mb-1 fs-15">Michael Sheen</h6>
							<p>Great work!. Lorem ipsum dolor sit amet.</p>

							<span class="fs-13 mt-2">
								<i class="icofont-wall-clock"></i>
								<span class="m-l-5">9:10 AM</span>
							</span>
						</div>

						<div class="timeline-list">
							<i class="icofont-check timeline-icon primary-color"></i>
							<h6 class="mb-1 fs-15">Colin Firth</h6>
							<p>Finished the project. Lorem ipsum dolor sit amet.</p>

							<span class="fs-13 mt-2">
								<i class="icofont-wall-clock"></i>
								<span class="m-l-5">9:00 AM</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<a href="#" class="btn btn-primary float-right">View all</a>
					<h5 class="card-title">Project issues</h5>
				</div>

				<div class="d-flex mb-20">
					<div class="text-center">
						<div class="avatar avatar-blue wh-50 rounded">
							<span class="fw-600 pt-3">20</span>
						</div>
					</div>

					<div class="ml-3">
						<h6 class="mb-1 mt-1 fs-15">Errors</h6>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</div>

				<div class="d-flex mb-20">
					<div class="text-center">
						<div class="avatar avatar-cyan wh-50 rounded">
							<span class="fw-600 pt-3">25</span>
						</div>
					</div>

					<div class="ml-3">
						<h6 class="mb-1 mt-1 fs-15">Design Issue</h6>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</div>

				<div class="d-flex mb-20">
					<div class="text-center">
						<div class="avatar avatar-gold wh-50 rounded">
							<span class="fw-600 pt-3">5</span>
						</div>
					</div>

					<div class="ml-3">
						<h6 class="mb-1 mt-1 fs-15">Development Issue</h6>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</div>

				<div class="d-flex">
					<div class="text-center">
						<div class="avatar avatar-red wh-50 rounded">
							<span class="fw-600 pt-3">25</span>
						</div>
					</div>

					<div class="ml-3">
						<h6 class="mb-0 mt-2 fs-15">Coding Issue</h6>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

