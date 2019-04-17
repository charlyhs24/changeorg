<div id="petisi_terbaru"class="tab-pane fade main ">
    <div class="container">
    <?php 
    foreach ($terbaru as $terbarus) {
    ?>
    <div class="card-progress">
        <a href="<?= base_url('petitionController/show/'.$terbarus->id_petisi); ?>" class="pda">
            <div class="row">
                <div class="col-sm-3">
                    <img width="150" height="150" src="<?= base_url();?>/public/asset/media/petition/<?= $terbarus->url_media; ?>" class="rounded" >
                </div>
                <div class="col-sm-9">
                    <h6><?= $terbarus->judul; ?></h6>
                    <p><?= substr($terbarus->isi,0,100);?>..</p>
                    <div class="progress">
                        <div class="progress-bar bg-orange" role="progressbar" style="width: <?= $terbarus->jumlah_ttd;?>px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="small">
                        <span>
                            <strong><?= $terbarus->jumlah_ttd; ?> orang menandatangani</strong>
                            dari tujuan 150.000 tanda tangan
                        </span>
                    </p>
                </div>
            </div>
        </a>
    </div><br>
    <?php
    }
    ?>
    </div>
</div>