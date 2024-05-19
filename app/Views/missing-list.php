<?= view('admin/includes/header', ['title' => ' Job List']) ?>

        <div class="content-body">
            <div class="container">
                <div class="row">

                <?php foreach($missing as $m) : ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="<?=base_url().$m['image']?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$m['name']?></h5>
                                    <p class="card-text"><?=substr($m['description'],0,20)?></p>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <?php if(!isset($f)) : if(empty($m['status'])):?>
                                            <a href="#" class="btn btn-danger">Missing </a>
                                            <?php else :?>
                                                <a href="#" class="btn btn-success">Found </a>
                                                <?php endif; endif;?>
                                        
                                    </div>
                                    <div class="col-md-3"><a href="/detail/<?=$url."/".$m['id']?>" class="btn btn-primary">More </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    

                </div>
            </div>
        </div>
        <?= view('admin/includes/footer') ?>
