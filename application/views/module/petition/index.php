<div class="container">
    <div class="landing-page text-center">
        <h1>Wadah dunia untuk perubahan</h1>
        <p>264.194.220 orang berpartisipasi dalam perubahan. <a href="">Kemenangan setiap harinya</a></p>
        <a href="<?= site_url();?>petitionController/create" class="btn btn-danger">Mulai Petisi</a>
    </div>
    <?php 
        if ($this->session->flashdata('signature-success')) {
    ?>
        <script>
            swal("Tanda Tangan Berhasil","<?php echo $this->session->flashdata('signature-success');?>", "success")
        </script>

    <?php
        }
    ?>
    <?php
    $this->load->view('module/petition/carousel');
    foreach ($petitions as $petition) {
    ?>
    <div class="card-component">
        <a href="<?= base_url('petitionController/show/'.$petition->id_petisi); ?>" class="link-block pbs phm">
            <div class="row">
                <div class="col-sm-9">
                    <p>Mempetisi Kepada, <?= $petition->kepada; ?></p>
                    <h4><?= $petition->judul; ?></h4>
                    <p id="description"><?= substr($petition->isi,0,150); ?></p>
                    <img src="https://via.placeholder.com/30x30" class="rounded-circle" alt="">
                    <strong><?=  $petition->nama_depan, $petition->nama_belakang ?></strong>
                </div>
                <div class="col-sm-3">
                    <img src="<?= base_url();?>/public/asset/media/petition/<?= $petition->url_media; ?>" class="petisi-media rounded" >
                    <div class="user-media">
                        <span class="fas fa-users"></span> <?= $petition->jumlah_ttd; ?> pendukung
                    </div>
                </div>

            </div>
        </a>
    </div><br>

    <?php 
    }
    ?>
</div>
<script src="<?php echo base_url();?>public/asset/javascript/module/petition/index.js"></script>