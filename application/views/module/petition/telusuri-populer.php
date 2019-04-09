<div id="petisi_populer" class="tab-pane fade main ">
    <div class="container">
    <?php 
    foreach ($populer as $populers) {
    ?>
    <div class="card-progress">
        <a href="" class="pda">
            <div class="row">
                <div class="col-sm-3">
                    <img width="150" height="150" src="<?= base_url();?>/public/asset/media/petition/<?= $populers->url_media; ?>" class="rounded" >
                </div>
                <div class="col-sm-9">
                    <h6><?= $populers->judul; ?></h6>
                    <p><?= substr($populers->isi,0,100);?>..</p>
                    <div class="progress">
                        <div class="progress-bar bg-orange" role="progressbar" style="width: <?= $populers->jumlah_ttd;?>px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="small">
                        <span>
                            <strong><?= $populers->jumlah_ttd; ?> orang menandatangani</strong>
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