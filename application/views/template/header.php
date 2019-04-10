<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/asset/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?><?php echo $link; ?>">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light nav-big">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url();?>">change.org</a>
 
          <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url();?>petitionController/create">Mulai Petisi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url();?>petitionController/petitionUser">Petisi Saya</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url();?>petitionController/petitionTelusuri">Telusuri</a>
                </li>

          </ul>
          <ul class="my-2 my-lg-0 navbar-nav">
              <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
              </li>
              <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
              </li>
              <li class="nav-item active">
                    <!-- <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a> -->
                    <li class="nav-item dropdown active">
                    <!-- <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a> -->
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Pengaturan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Nama Akun</a>
                        <a class="dropdown-item red" href="#">Keluar</a>
                    </div>
                </li>
              </li>
          </ul>
        <!-- </div> -->
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light bg-light nav-small">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url();?>petitionController/show">change.org</a>
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars" ></i>                        
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Petisi Saya</a>
                        <a class="dropdown-item" href="#">Pengaturan</a>
                        <a class="dropdown-item" href="<?= site_url();?>petitionController/create">Mulai Petisi</a>
                        <a class="dropdown-item" href="#">Telusuri</a>
                        <a class="dropdown-item" href="#">Cari</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Nama Akun</a>
                        <a class="dropdown-item red" href="#">Keluar</a>
                    </div>
                </li>
            </ul>
        </div>
      </nav>





