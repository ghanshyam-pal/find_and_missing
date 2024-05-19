<?= view('hotlair/includes/header', ['title' => 'Hotlair Dashboard','nav_heading'=>' Dashboard']) ?>

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Boxed" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="jobs2 card-body">
                                                <div class="text-center">
                                                    <span>
														<img src="<?= base_url()."hotlair-admin/"?>img/hotel.png" alt="#">
													</span>
                                                    <h4 class="mb-0"><a href="<?= base_url()?>hotlair/job-list">Job List</a></h4>
                                                    <!-- <span class="text-primary mb-3 d-block">60+</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="jobs2 card-body">
                                                <div class="text-center">
                                                    <span>
														<img src="<?= base_url()."hotlair-admin/"?>img/candidate.png" alt="#">
													</span>
                                                    <h4 class="mb-0"><a href="<?= base_url()?>hotlair/profile">Profile</a></h4>
                                                    <!-- <span class="text-primary mb-3 d-block">120+</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="jobs2 card-body">
                                                <div class="text-center">
                                                    <span>
														<img src="<?= base_url()."hotlair-admin/"?>img/packages.png" alt="#">
													</span>
                                                    <h4 class="mb-0"><a href="<?= base_url()?>hotlair/subscription">Subscription</a></h4>
                                                    <!-- <span class="text-primary mb-3 d-block">18+</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="jobs2 card-body">
                                                <div class="text-center">
                                                    <span>
														<img src="<?= base_url()."hotlair-admin/"?>img/newjobs.png" alt="#">
													</span>
                                                    <h4 class="mb-0"><a href="<?= base_url()?>hotlair/new-job">New Jobs</a></h4>
                                                    <!-- <span class="text-primary mb-3 d-block">400+</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="jobs2 card-body">
                                                <div class="text-center">
                                                    <span>
														<img src="<?= base_url()."hotlair-admin/"?>img/interviews.png" alt="#">
													</span>
                                                    <h4 class="mb-0"><a href="<?= base_url()?>hotlair/">Interview</a></h4>
                                                    <!-- <span class="text-primary mb-3 d-block">221+</span> -->
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
        </div>



<?=view('hotlair/includes/footer.php') ?>
