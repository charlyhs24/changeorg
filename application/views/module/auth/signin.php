<div class="container">
<div class="col-md-4  col-centered text-center">
    <h3><strong>Masuk</strong></h3>
    <p>Tidak memiliki akun? <a class="text-primary-link" href="<?= site_url();?>AuthController/register">Daftar</a></p>
    <a href="#" class="btn btn-primary btn-block"><i class="fab fa-google"></i> Masuk dengan akun Google</a>
    <a href="#" class="btn btn-primary-facebook btn-block"><i class="fab fa-facebook"></i> Masuk dengan akun Facebook</a><br>
    <form action="<?= base_url();?>AuthController/do_login" method="post">
    
        <input type="email" name="email" class="form-control" placeholder="Email"><span class="text-danger"><?php echo form_error('email'); ?></span>
        <input type="password" name="password" class="form-control" placeholder="Sandi"><span class="text-danger"><?php echo form_error('password'); ?></span>
        <div class="text-right">
            <span><a href="#" class="text-primary-link">Lupa kata sandi?</a></span>
        </div><br>
        <button type="submit" class="btn btn-primary-changeorg btn-block"><strong>Masuk</strong></button>
    </form><br>
    <?php
    if ($this->session->flashdata('auth')) {
    ?>
        <div class="alert alert-danger">
            <h4>Invalid Credentials</h4>
            <p><?= $this->session->flashdata('auth'); ?></p>
        </div>
    <?php
        }
    ?>  
</div>
</div>