<?= view('admin/includes/header', ['title' => 'Profile Overview','nav_heading'=>'Profile Overview']) ?>



        <div class="content-body">

            <div class="mt-4 editb">

                <!-- <a href="<?=base_url()."candidate/profile"?>" class="btn btn-primary me-3 btn-sm"><i class="fas fa-edit me-2"></i>Edit Profile</a> -->

            </div>

            <div class="card3">

                <h3 class="text-center mb-3 mt-3">Profile Overview</h3>

                <div class="card-header border-0 flex-wrap align-items-start">

                    <div class="col-md-12">

                        <div class="user d-sm-flex d-block pe-md-5 pe-0 mb-3">

                            <img src="<?= base_url().$candidate['image']?>" alt="">

                            <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">

                                <h5 class="mb-2 font-w600"><a href="javascript:void(0);" class="text-black"><?=$candidate['name']?></a></h5>

                                <ul class="mb-2">

                                    <li><b>City:</b> <?=$candidate['city']?></li>

                                    <li><b>State :</b> <?=$candidate['state']?></li>
                                    <li><b> Phone :</b> <?=$candidate['phone']?></li>

                                    <li><b>Address:</b> <?=$candidate['address']?></li>

                                    

                                </ul>



                            </div>

                        </div>

                        <h6 class="mb-2"><b>Description:</b></h6>

                        <p><?=$candidate['description']?>

                        </p>

                    </div>

                    <div class="col-md-4 col-12 text-end">



                    </div>

                </div>

                <?php if(!empty($found)) :?>

                <h3 class="text-center mb-3 mt-3">Found Overview</h3>

                <div class="card-header border-0 flex-wrap align-items-start">

                    <div class="col-md-12">

                        <div class="user d-sm-flex d-block pe-md-5 pe-0 mb-3">

                            <img src="<?= base_url().$found['image']?>" alt="">

                            <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">

                                <h5 class="mb-2 font-w600"><a href="javascript:void(0);" class="text-black"><?=$found['name']?></a></h5>

                                <ul class="mb-2">

                                    <li><b>City:</b> <?=$found['city']?></li>

                                    <li><b>State :</b> <?=$found['state']?></li>
                                    <li><b> Phone :</b> <?=$found['phone']?></li>

                                    <li><b>Address:</b> <?=$found['address']?></li>

                                    

                                </ul>



                            </div>

                        </div>

                        <h6 class="mb-2"><b>Description:</b></h6>

                        <p><?=$candidate['description']?>

                        </p>

                    </div>

                    <div class="col-md-4 col-12 text-end">



                    </div>

                </div>
                <?php endif ?>






               



            </div>

        </div>



    </div>

    </div>

  <?= view('admin/includes/footer')?>