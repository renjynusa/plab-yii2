<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<!-- Main Content Header -->
<div class="main-content-header">
    <h1>Inbox</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <span class="active">Inbox</span>
        </li>
    </ol>
</div>
<!-- End Main Content Header -->

<!-- Mailbox -->
<div class="mb-30 row">
    <div class="col-xl-2">
        <div class="inbox-main-sidebar">
            <div class="compose">
                <button type="button" class="btn btn-primary rounded btn-block" data-toggle="modal" data-target="#SendEmail">Compose</button>
            </div>

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" data-toggle="pill" href="#v-pills-inbox">
                    <i data-feather="inbox" class="icon wh-15 mt-minus-3 mr-1"></i>
                    Inbox <span class="fr">(5)</span>
                </a>
                <a class="nav-link" data-toggle="pill" href="#v-pills-sent">
                    <i data-feather="send" class="icon wh-15 mt-minus-3 mr-1"></i>
                    Sent <span class="fr">(3)</span>
                </a>
                <a class="nav-link" data-toggle="pill" href="#v-pills-drafts">
                    <i data-feather="file-text" class="icon wh-15 mt-minus-3 mr-1"></i>
                    Drafts <span class="fr">(2)</span>
                </a>
                <a class="nav-link" data-toggle="pill" href="#v-pills-starred">
                    <i data-feather="star" class="icon wh-15 mt-minus-3 mr-1"></i>
                    Starred <span class="fr">(2)</span>
                </a>
                <a class="nav-link" data-toggle="pill" href="#v-pills-spam">
                    <i data-feather="alert-octagon" class="icon wh-15 mt-minus-3 mr-1"></i>
                    Spam <span class="fr">(2)</span>
                </a>
                <a class="nav-link" data-toggle="pill" href="#v-pills-trash">
                    <i data-feather="trash-2" class="icon wh-15 mt-minus-3 mr-1"></i>
                    Trash <span class="fr">(2)</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-10">
        <div class="inbox-content-wrap tab-content">
            <div class="tab-pane fade show active" id="v-pills-inbox" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mail-item-nav">
                            <div class="nav flex-column nav-pills" role="tablist">
                                <a class="nav-link active" data-toggle="pill" href="#EmailOne">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Welcome to React World</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#EmailTwo">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Marco Gomez</div>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                        <span class="date">Mar 2, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#EmailThree">
                                    <?= Html::img('@web/images/user/3.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Brad Joe</div>
                                        <p>New order informations</p>
                                        <span class="date">Mar 3, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#EmailFour">
                                    <?= Html::img('@web/images/user/4.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Mitch Petty</div>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                        <span class="date">Mar 4, 2019</span>
                                    </div>
                                </a>
                                <a class="nav-link" data-toggle="pill" href="#EmailFive">
                                    <?= Html::img('@web/images/user/5.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">George Petty</div>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                        <span class="date">Mar 5, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="EmailOne" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Aaron Rossi</div>
                                            <p class="fs-11 m-0">Mar 1, 2019</p>
                                        </div>
                                    </div>
                                    <h6 class="mt-3 fw-600">Welcome to React World</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>
                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="EmailTwo" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Marco Gomez</div>
                                            <p class="fs-11 m-0">Mar 2, 2019</p>
                                        </div>
                                    </div>
                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks! <br>
                                        Marco Gomez
                                    </p>
                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="EmailThree" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/3.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Brad Joe</div>
                                            <p class="fs-11 m-0">Mar 3, 2019</p>
                                        </div>
                                    </div>
                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks! <br>
                                        Marco Gomez
                                    </p>
                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="EmailFour" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/4.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Mitch Petty</div>
                                            <p class="fs-11 m-0">Mar 4, 2019</p>
                                        </div>
                                    </div>
                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks! <br>
                                        Marco Gomez
                                    </p>
                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="EmailFive" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/5.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">George Petty</div>
                                            <p class="fs-11 m-0">Mar 5, 2019</p>
                                        </div>
                                    </div>
                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks! <br>
                                        Marco Gomez
                                    </p>
                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-sent" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mail-item-nav">
                            <div class="nav flex-column nav-pills" role="tablist">
                                <a class="nav-link active" data-toggle="pill" href="#SentEmailOne">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Welcome to React World</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#SentEmailTwo">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Marco Gomez</div>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                        <span class="date">Mar 2, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#SentEmailThree">
                                    <?= Html::img('@web/images/user/3.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Brad Joe</div>
                                        <p>New order informations</p>
                                        <span class="date">Mar 3, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="SentEmailOne" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Mitch Rossi</div>
                                            <p class="fs-11 m-0">Mar 1, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="SentEmailTwo" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Anis Mashku</div>
                                            <p class="fs-11 m-0">Mar 2, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="SentEmailThree" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Anis Mashku</div>
                                            <p class="fs-11 m-0">Mar 3, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-drafts" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mail-item-nav">
                            <div class="nav flex-column nav-pills" role="tablist">
                                <a class="nav-link active" data-toggle="pill" href="#draftsEmailOne">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Welcome to React World</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#draftsEmailTwo">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Marco Gomez</div>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                        <span class="date">Mar 2, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="draftsEmailOne" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Mitch Rossi</div>
                                            <p class="fs-11 m-0">Mar 1, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="draftsEmailTwo" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Anis Mashku</div>
                                            <p class="fs-11 m-0">Mar 2, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-starred" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mail-item-nav">
                            <div class="nav flex-column nav-pills" role="tablist">
                                <a class="nav-link active" data-toggle="pill" href="#StarredEmailOne">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Welcome to React World</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#StarredEmailTwo">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Marco Gomez</div>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                        <span class="date">Mar 2, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="StarredEmailOne" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Mitch Rossi</div>
                                            <p class="fs-11 m-0">Mar 1, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="StarredEmailTwo" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Anis Mashku</div>
                                            <p class="fs-11 m-0">Mar 2, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-spam" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mail-item-nav">
                            <div class="nav flex-column nav-pills" role="tablist">
                                <a class="nav-link active" data-toggle="pill" href="#SpamEmailOne">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Welcome to React World</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#SpamEmailTwo">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Marco Gomez</div>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                        <span class="date">Mar 2, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="SpamEmailOne" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Mitch Rossi</div>
                                            <p class="fs-11 m-0">Mar 1, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="SpamEmailTwo" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Anis Mashku</div>
                                            <p class="fs-11 m-0">Mar 2, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-trash" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mail-item-nav">
                            <div class="nav flex-column nav-pills" role="tablist">
                                <a class="nav-link active" data-toggle="pill" href="#TrashEmailOne">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Welcome to React World</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </a>

                                <a class="nav-link" data-toggle="pill" href="#TrashEmailTwo">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name">Marco Gomez</div>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                        <span class="date">Mar 2, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="TrashEmailOne" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Mitch Rossi</div>
                                            <p class="fs-11 m-0">Mar 1, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="TrashEmailTwo" role="tabpanel">
                                <div class="email-details-warp">
                                    <div class="d-flex">
                                        <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                        <div class="info">
                                            <div class="name line-height-1">Anis Mashku</div>
                                            <p class="fs-11 m-0">Mar 2, 2019</p>
                                        </div>
                                    </div>

                                    <h6 class="mt-3 fw-600">Lorem Ipsum is simply dummy</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <br>
                                    <p>
                                        Thanks!
                                        <br>
                                        Marco Gomez
                                    </p>

                                    <div class="inbox-topbar">
                                        <button type="button" class="btn btn-outline-primary mr-1" data-toggle="modal" data-target="#SendEmail">Replay</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
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
<!-- End Mailbox -->

<!-- Send Email Madal -->
<?= Yii::$app->view->renderFile('@app/views/app/partials/_send-email-madal.php'); ?>