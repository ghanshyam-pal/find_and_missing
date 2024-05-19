<?= view('admin/includes/header', ['title' => 'Dashboard','nav_heading'=>'Dashboard']) ?>



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

														<img src="<?=base_url()?>adminmaster/img/hotel.png" alt="#">

													</span>

                                                    <h4 class="mb-0"><a href="<?=base_url()?>missing-list">Missing List</a></h4>

                                                    <span class="text-primary mb-3 d-block"><?=$miss_count?>+</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">

                                        <div class="card">

                                            <div class="jobs2 card-body">

                                                <div class="text-center">

                                                    <span>

														<img src="<?=base_url()?>adminmaster/img/candidate.png" alt="#">

													</span>

                                                    <h4 class="mb-0"><a href="<?=base_url()?>found-list">Found List</a></h4>

                                                    <span class="text-primary mb-3 d-block"><?=$found_count?>+</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">

                                        <div class="card">

                                            <div class="jobs2 card-body">

                                                <div class="text-center">

                                                    <span>

														<img src="<?=base_url()?>adminmaster/img/packages.png" alt="#">

													</span>

                                                    <h4 class="mb-0"><a href="<?=base_url()?>add-missing">Add Missing</a></h4>

                                                    <span class="text-primary mb-3 d-block"></span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">

                                        <div class="card">

                                            <div class="jobs2 card-body">

                                                <div class="text-center">

                                                    <span>

														<img src="<?=base_url()?>adminmaster/img/newjobs.png" alt="#">

													</span>

                                                    <h4 class="mb-0"><a href="<?=base_url()?>add-found">Add Found</a></h4>

                                                    <span class="text-primary mb-3 d-block"></span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <!-- <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">

                                        <div class="card">

                                            <div class="jobs2 card-body">

                                                <div class="text-center">

                                                    <span>

														<img src="<?=base_url()?>adminmaster/img/interviews.png" alt="#">

													</span>

                                                    <h4 class="mb-0"><a href="javascript:void(0);">Interview</a></h4>

                                                    <span class="text-primary mb-3 d-block">221+</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div> -->





                                </div>

                            </div>



                        </div>

                    </div>



                </div>

            </div>

        </div>

















        <?= view('admin/includes/footer') ?> 