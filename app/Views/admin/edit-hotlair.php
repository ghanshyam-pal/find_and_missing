

        <div class="content-body">

            <div class="container-fluid">

                <!-- row -->

                <div class="row">

                    <div class="col-xl-3 col-lg-4">

                        <div class="clearfix">

                            <div class="card card-bx author-profile m-b30">

                                <div class="card-body">

                                    <div class="p-5">

                                        <div class="author-profile">

                                            <div class="author-media">

                                                <img src="<?=base_url()?><?= $hotlair['image_url'] ?? "hotlair-admin/img/hotel-icon.png"?>" alt="">

                                                <div class="upload-link" title="" data-bs-toggle="tooltip" data-placement="right" data-original-title="update">

                                                    <input type="file" name="image" class="update-flie" accept="image/png, image/gif, image/jpeg">

                                                    <i class="fa fa-camera"></i>

                                                </div>

                                            </div>

                                        </div>

                                        <div id="image-error"></div>

                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>

                    <div class="col-xl-9 col-lg-8">

                        <div class="card  card-bx m-b30">

                            <div class="card-header">

                                <h2 class="title">Profile</h2>

                            </div>

                            <form class="profile-form">

                                <div class="card-body">

                                <input type="hidden" class="form-control" name="id" value="<?=$hotlair['id']?? ""?>"  >

                                    <div class="row">

                                        <div class="col-sm-6 m-b30">

                                            <label class="form-label">Name</label>

                                            <input type="text" class="form-control" name="name" value="<?=$hotlair['name'] ?? ""?>" >

                                        </div>



                                        <div class="col-sm-6 m-b30">

                                            <label class="form-label">phone</label>

                                            <input type="text" class="form-control" name="phone" value="<?=$hotlair['phone'] ?? ""?>">

                                        </div>

                                        <!-- <div class="col-sm-6 m-b30">

                                            <label class="form-label">Email adress</label>

                                            <input type="text" class="form-control" name="email" value="<?=$hotlair['email'] ?? ""?>">

                                        </div> -->

                                        <!-- <div class="col-sm-6 m-b30">

                                            <label class="form-label">Hotel Name</label>

                                            <input type="text" class="form-control" name="hotelName" value="<?=$hotlair['hotel_name'] ?? ""?>">

                                        </div> -->

                                        <div class="col-sm-6 m-b30">

                                            <label class="form-label">City</label>

                                            <input type="text" class="form-control" name="city" value="<?=$hotlair['city'] ?? ""?>" >

                                        </div>

                                        <div class="col-sm-6 m-b30">

                                            <div class="example">

                                                <label class="form-label">State Name</label>

                                                <input class="form-control " name="state"  type="text" value="<?=$hotlair['state'] ?? ""?>">

                                            </div>

                                        </div>

                                        <!-- <div class="col-sm-6 m-b30">

                                            <label class="form-label ">Country</label>

                                            <input type="text" class="form-control" name="country" value="<?=$hotlair['country'] ?? ""?>">

                                        </div> -->
                                        <div class="col-sm-6 m-b30">

                                            <label class="form-label">Last Seen </label>

                                            <input type="date" name="mobile" class="form-control" value="<?=$hotlair['mobile'] ?? ""?>">

                                        </div>

                                        <div class="col-sm-12 m-b30">

                                            <label class="form-label">Address</label>

                                            <input class="form-control " name="address" type="text" value="<?=$hotlair['address'] ?? ""?>">

                                        </div>



                                        <div class="col-sm-12 m-b30">

                                            <label class="form-label">Description</label>

                                            <textarea class="form-control solid" name="description" rows="5" aria-label=""><?=$hotlair['description'] ?? ""?></textarea>

                                        </div>

                                    </div>

                                </div>

                                <div class="card-footer text-right">

                                    <button id="edit-hotlair" class="btn btn-primary">Submit</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <script>
         var submit_to = "<?= base_url().$submit_to ?>" ;
         
         </script>

