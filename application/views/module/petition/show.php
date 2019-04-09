<div class="container">
    <div class="title-petition">
        <h2 class="text-center"><?= $petitions->judul ?></h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="petition-image">
                <img src="<?= base_url();?>/public/asset/media/petition/<?= $petitions->url_media; ?>" alt="">
            </div>
            <p>
                <img src="https://via.placeholder.com/30X30" class="rounded-circle">
                <small><strong> <?= $petitions->nama_depan ?> memulai petisi ini kepada <?= $petitions->kepada ?></strong></small>
            </p>
            <p class="justify">
                <?php
                    echo $petitions->isi;
                ?>
            </p>
        </div>
        <div class="col-md-4">
            <p>
                <strong><?= $petitions->jumlah_ttd;?> telah menandatangani.</strong>Mari kita ke 150.000.
            </p>
            <div class="progress">
                <div class="progress-bar bg-orange" role="progressbar" style="width: <?= $petitions->jumlah_ttd;?>px" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="user-signature">
                <div class="user-info">
                    <img src="https://via.placeholder.com/30X30" class="rounded-circle">
                    <small><strong> Charly Situmorang</strong> <?= $petitions->negara ?></small>   
                    <!-- sementara belum menggunakan session login -->
                </div>
                <form action="" method="post">
                    <textarea class="form-control form-control-sm" name="komentar" cols="10" rows="3" placeholder="Saya menandatangani ini karena… (tidak wajib)"></textarea>
                    <p>
                        <small>
                            <input type="checkbox"> Tunjukkan tanda tangan dan komentar saya di petisi ini
                        </small>
                    </p>
                    <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-lock"></i> Tanda tangani petisi ini
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>