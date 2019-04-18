<?php
$userdata = $this->session->userdata('user_auth');
?>
<div class="card-profile col-md-6 col-centered">
    <?php
        if ($this->session->flashdata('error')) {

    ?>
        <div class="alert alert-danger">
            <p><?= $this->session->flashdata('error'); ?></p>
        </div>
    <?php
        }
    ?>
    <form action="<?= site_url();?>userController/updateProfile" enctype="multipart/form-data" method="post">
        <div class="user-media">
            <label for="">Foto Profile</label>
            <input name="file_profile" class="form-control" id="upload" type="file" placeholder="Silahkan upload foto anda">
        </div>
        <label for="">Nama depan</label>
        <input type="text" class="form-control" name="nama_depan" value="<?= $userdata->nama_depan; ?>">
        <label for="">Nama belakang</label>
        <input type="text" class="form-control" name="nama_belakang" value="<?= $userdata->nama_belakang; ?>">
        <label for="">Tentang saya</label>
        <textarea name="tentang_saya" class="form-control" cols="30" rows="5" placeholder="Silahkan menulis deskripsi tentang kamu yang singkat" ><?= $userdata->tentang_saya ?></textarea>
        <label for="">Kota</label>
        <input type="text" name="kota" class="form-control" placeholder="Kota" value="<?= $userdata->kota; ?>"><br>
        <select class="form-control" name="negara" id="">
            <option value="indonesia">Indonesia</option>
        </select>
        <label for="">Twitter</label>
        <input type="text" name="twitter" class="form-control" value="<?= $userdata->twitter; ?>" placeholder="nama pengguna">
        <label for="">Tautan singkat profil</label>
        <input type="text" name="tautan_singkat" class="form-control" placeholder="Buat tautan singkat ke profil mu" value="<?= $userdata->tautan_singkat; ?>">
        <p><strong>Informasi pribadi</strong>(hanya terlihat oleh kamu dan tim Change.org)</p>
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $userdata->alamat; ?>"><br>
        <div class="row">
            <div class="col-md-6">
                <label for="">Kode pos</label>
                <input type="text" name="kode_pos" class="form-control" placeholder="Kode pos" value="<?= $userdata->kode_pos; ?>">
            </div>
            <div class="col-md-6">
                <label for="">Bahasa</label>
                <select name="bahasa" class="form-control" id="">
                    <option value="indonesia">Indonesia</option>
                </select>
            </div>
        </div>
        <label for="">Nomor telepon (tidak wajib)<br>
                      Jika kamu tertarik, tolong berikan nomor telepon kepada kami untuk menghubungi Anda mengenai kampanye, sebab, program keanggotaan, atau upaya terkait Change.org lainnya.</label>
        <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor telepon" value="<?= $userdata->nomor_telepon;?>"><br>
        <div class="tex-left">
            <button type="submit" class="btn btn-primary-changeorg"><strong>Simpan</strong></button>
            <span><a class="text-primary-link" href="#">Batalkan</a></span>
        </div>
    </form>
</div>