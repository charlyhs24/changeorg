<div class="container">
    <h3>Temukan Petisi Anda</h3>
    <ul class="nav">
        <li class="nav-item ">
            <a class="nav-link active" data-toggle="tab" href="#petisi_tampilan">Petisi Tampilan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#petisi_populer">Populer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#petisi_terbaru">Terbaru</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " data-toggle="tab" href="#">Kemenangan</a>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div id="petisi_tampilan" class="tab-pane fade main">
        <div class="container">
            <?php 
            foreach ($petition as $petitions) {
            ?>
            <div class="card-progress">
                <a href="" class="pda">
                    <div class="row">
                        <div class="col-sm-3">
                            <img width="150" height="150" src="<?= base_url();?>/public/asset/media/petition/<?= $petitions->url_media; ?>" class="rounded" >
                        </div>
                        <div class="col-sm-9">
                            <h6><?= $petitions->judul; ?></h6>
                            <p><?= substr($petitions->isi,0,100);?>..</p>
                            <div class="progress">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: <?= $petitions->jumlah_ttd;?>px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small">
                                <span>
                                    <strong><?= $petitions->jumlah_ttd; ?> orang menandatangani</strong>
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

    <?php 
        $this->load->view('module/petition/telusuri-terbaru');
        $this->load->view('module/petition/telusuri-populer');
    ?>
</div>
<script src="<?php echo base_url();?>public/asset/javascript/module/petition/telusuri.js"></script>