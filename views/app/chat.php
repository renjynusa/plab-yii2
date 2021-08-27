<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<!-- Main Content Header -->
<div class="main-content-header">
    <h1>Chats</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <span class="active">Chat</span>
        </li>
    </ol>
</div>
<!-- End Main Content Header -->

<!-- Chat box -->
<div class="mb-30 row">
    <div class="col-xl-12">
        <div class="inbox-content-wrap tab-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="mail-item-nav">
                        <form class="search-contact">
                            <input placeholder="Search..." type="text" class="form-control">
                        </form>

                        <div class="flex-column nav nav-pills" role="tablist">
                            <a class="nav-link active" data-toggle="pill" href="#chatOne">
                                <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status online"></span>
                                <div class="info">
                                    <div class="name">Aaron Rossi</div>
                                    <p>Welcome to React World</p>
                                    <span class="date">Mar 1, 2019</span>
                                </div>
                            </a>

                            <a class="nav-link" data-toggle="pill" href="#chatTwo">
                                <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status online"></span>
                                <div class="info">
                                    <div class="name">Marco Gomez</div>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                    <span class="date">Mar 2, 2019</span>
                                </div>
                            </a>

                            <a class="nav-link" data-toggle="pill" href="#chatThree">
                                <?= Html::img('@web/images/user/3.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status online"></span>
                                <div class="info">
                                    <div class="name">Brad Joe</div>
                                    <p>New order informations</p>
                                    <span class="date">Mar 3, 2019</span>
                                </div>
                            </a>

                            <a class="nav-link" data-toggle="pill" href="#chatFour">
                                <?= Html::img('@web/images/user/4.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status online"></span>
                                <div class="info">
                                    <div class="name">Mitch Petty</div>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                    <span class="date">Mar 4, 2019</span>
                                </div>
                            </a>

                            <a class="nav-link" data-toggle="pill" href="#chatFive">
                                <?= Html::img('@web/images/user/5.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status away"></span>
                                <div class="info">
                                    <div class="name">George Petty</div>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                    <span class="date">Mar 5, 2019</span>
                                </div>
                            </a>

                            <a class="nav-link" data-toggle="pill" href="#chatSix">
                                <?= Html::img('@web/images/user/6.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status away"></span>
                                <div class="info">
                                    <div class="name">Petty Rossi</div>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                    <span class="date">Mar 6, 2019</span>
                                </div>
                            </a>

                            <a class="nav-link" data-toggle="pill" href="#chatSeven">
                                <?= Html::img('@web/images/user/7.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status ofline"></span>
                                <div class="info">
                                    <div class="name">George Petty</div>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                    <span class="date">Mar 7, 2019</span>
                                </div>
                            </a>

                            <a class="nav-link" data-toggle="pill" href="#chatEight">
                                <?= Html::img('@web/images/user/8.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status ofline"></span>
                                <div class="info">
                                    <div class="name">Mitch Rossi</div>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                    <span class="date">Mar 8, 2019</span>
                                </div>
                            </a>

                            <a class="nav-link" data-toggle="pill" href="#chatNine">
                                <?= Html::img('@web/images/user/4.jpg', ['alt' => 'User', 'class' => 'wh-30 rounded-circle']); ?>
                                <span class="status ofline"></span>
                                <div class="info">
                                    <div class="name">Brad Joe</div>
                                    <p>New order informations</p>
                                    <span class="date">Mar 9, 2019</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="chatOne" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">Aaron Rossi</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea> 
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chatTwo" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">Marco Gomez</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea>
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chatThree" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/3.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">Brad Joe</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea>
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chatFour" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/4.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">Mitch Petty</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea>
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chatFive" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/5.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">George Petty</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea>
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chatSix" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/6.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">Petty Rossi</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea>
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chatSeven" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/7.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">George Petty</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea>
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chatEihgt" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/8.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">Mitch Rossi</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea>
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chatNine" role="tabpanel">
                            <div class="email-details-warp chat-details-warp">
                                <div class="d-flex">
                                    <?= Html::img('@web/images/user/4.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="info">
                                        <div class="name mt-2 fs-15">Brad Joe</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-right">
                                    <?= Html::img('@web/images/user/1.jpg', ['alt' => 'User', 'class' => 'wh-40 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Aaron Rossi</div>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>

                                <div class="chat-list-left">
                                    <?= Html::img('@web/images/user/2.jpg', ['alt' => 'User', 'class' => 'wh-30 mr-2 rounded-circle']); ?>
                                    <div class="chat-details">
                                        <div class="name">Marco Gomez</div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><span class="date">Mar 1, 2019</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-box">
                                <form>
                                    <textarea class="form-control" rows="3" placeholder="Type a message here"></textarea>
									<ul class="list-inline d-flex align-items-center mb-0">
										<li class="list-inline-item mr-3">
											<a class="text-gray" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Emoji">
												<i data-feather="smile" class="wh-20 primary-color"></i>
											</a>
										</li> 

										<li class="list-inline-item mr-3">
											<a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Attachment">
												<i data-feather="paperclip" class="wh-20 primary-color"></i>
											</a>
										</li>    

										<li class="list-inline-item">
											<button class="btn btn-primary">
												<span class="mr-1">Send</span>
												<i data-feather="send" class="wh-15"></i>
											</button>
										</li>
									</ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Chat box -->