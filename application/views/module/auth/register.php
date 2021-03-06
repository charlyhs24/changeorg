<div class="container">
<div class="col-md-4  col-centered text-center">
    <h3><strong>Masuk</strong></h3>
    <p>Sudah memiliki akun? <a class="text-primary-link" href="<?= site_url();?>AuthController">Masuk</a></p>
    <a href="#" class="btn btn-primary btn-block"><i class="fab fa-google"></i> Masuk dengan akun Google</a>
    <a href="#" class="btn btn-primary-facebook btn-block"><i class="fab fa-facebook"></i> Masuk dengan akun Facebook</a><br>
    <h6 class="text-center"><strong>Atau</strong></h6><br>
    <form action="<?= base_url();?>AuthController/signup" method="post">
        <input type="text" name="nama_depan" class="form-control" placeholder="Nama depan"><span class="text-danger"><?php echo form_error('nama_depan'); ?></span>
        <input type="text" name="nama_belakang" class="form-control" placeholder="Nama belakang"><span class="text-danger"><?php echo form_error('nama_belakang'); ?></span>
        <input type="email" name="email" class="form-control" placeholder="Email"><span class="text-danger"><?php echo form_error('email'); ?></span>
        <input type="password" name="password" class="form-control" placeholder="Sandi"><span class="text-danger"><?php echo form_error('password'); ?></span>
        <div class="text-right">
            <span><a href="#" class="text-primary-link">Lupa kata sandi?</a></span>
        </div><br>
        <button type="submit" class="btn btn-primary-changeorg btn-block"><strong>Daftar</strong></button>
    </form>
</div>
</div>