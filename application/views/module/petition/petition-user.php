<div class="container">
    <div class="profile text-center">
        <h1><?php $userdata = $this->session->userdata('user_auth'); echo $userdata->nama_depan, $userdata->nama_belakang; ?></h1>
        <p><span><i class="fas fa-map-marker-alt"></i> <?= $userdata->negara; ?></span></p>
        <a href="#" class="btn btn-profile btn-sm mbtn">Edit Profile</a>
    </div>
    <nav class="nav">
        <a class="nav-link active" href="#petition_user" data-toggle="tab" >Telah memulai (<?= count($petitionUser); ?>)</a>
        <a class="nav-link" href="#petition_ttd" data-toggle="tab" >Telah Menandatangani (<?= count($ttdUser);?>)</a>
    </nav>
    <div class="tab-content">
        <?php
            foreach ($petitionUser as $petitionUsers) {

        ?>
        <div id="petition_user"class="tab-pane fade card-mypetition">
            <a href="#" >
                <span class="small">mempetisi <?= $petitionUsers->kepada; ?></span><br>
                <h6><?= $petitionUsers->judul; ?></h6>
                <p><?= substr($petitionUsers->isi,0,100);?><div class=""></div></p>
                <div class="row pdcard">
                    <div class="col-sm-6">
                        <p class="small">
                            <span>
                                <strong><?= $userdata->nama_depan, $userdata->nama_belakang; ?></strong>
                            </span>
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <span class="fas fa-users"></span><?= $petitionUsers->jumlah_ttd; ?>pendukung
                    </div>
                </div>
            </a>
        </div>
        <?php
            }
        ?>
        <div id="petition_ttd"class="tab-pane fade card-mypetition">
            <a href="#" >
                <span class="">mempetisi jokowi</span>
                <h6>Judul Petisi</h6>
                <p>isi petisimu</p>
                <div class="row ">
                    <div class="col-sm-6">
                        <p>
                            <span>
                                <strong>Charly Situmorang</strong>
                            </span>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <span class="fas fa-users text-right"></span>103.608 pendukung
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>public/asset/javascript/module/user/user.js"></script>