<div class="col-md-8">
    <div class="alert alert-secondary rounded">
        <div class="row">
            <div class="col-sm-1">
                <br>
                <i class="h3 far fa-edit"></i>
            </div>
            <div class="col-sm-8">
                <small><strong>Mulai sebuah petisi</strong></small><br>
                <small>Penggagas petisi ini bangun dan melakukan sesuatu. Apakah kamu ingin melakukan hal yang sama?</small>
            </div>
            <div class="col-sm-3"><br>
                <p><a href="<?= site_url();?>petitionController/create" class="btn bg-white"><strong>Mulai petisi</strong></a></p>
            </div>
        </div>
    </div>
</div>
<h5>Alasan menandatangani</h5><br>
<?php
    foreach ($komentar as $komentars) {
?>
<div class="card-komentar col-md-8">
    <div class="row">
        <div class="col-sm-2">
            <img width="50" height="50" src="https://via.placeholder.com/110X110" class="rounded-circle">
        </div>
        <div class="col-sm-10">
            <strong><?= $komentars->nama_depan, $komentars->nama_belakang ?></strong>
            <small>created at <span><?= $komentars->created_at ?></span></small>
            <p><?= $komentars->komentar ?></p>
        </div>
    </div>
    <hr>
</div>
<?php
    }
?>