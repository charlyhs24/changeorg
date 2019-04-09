<div class="container">
    <div class="petition-create">
        <div class="number-form col-sm-6 text-center">
            <ul>
                <li class="nav ">
                    <a href="#petisi_judul" id="step1" data-toggle="tab" class="btn btn-outline-primary btn-lg rounded-circle">1</a>
                </li>
                <li class="nav ">
                    <a href="#petisi_kepada" id="step2" data-toggle="tab" class="btn btn-outline-primary btn-lg rounded-circle">2</a>
                </li>
                <li class="nav ">
                    <a href="#petisi_isi" id="step3" data-toggle="tab" class="btn btn-outline-primary btn-lg rounded-circle">3</a>
                </li>
                <li class="nav ">
                    <a href="#petisi_media" id="step4" data-toggle="tab" class="btn btn-outline-primary btn-lg rounded-circle">4</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <!-- judul petisi -->
            <div id="petisi_judul" class="tab-pane fade col-sm-8 form center-content">
                <h3>Tulis Judul Petisimu</h3>
                <p class="text-justify">Ini hal pertama yang akan dilihat orang. Raih perhatian mereka dengan judul singkat dan fokus kepada perubahan yang diminta.</p>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="apa yang ingin kamu mencapai?" required>
                <div class="text-right">
                    <small>90</small><br>
                    <a href="#petisi_kepada" data-toggle="tab"><button class="btn btn-primary" id="btn-form-judul">Lanjut</button></a>
                </div><br>
                <div class="alert alert-secondary">
                    <strong>Jaga agar tetap singkat dan tidak berbelit-belit</strong>
                    <p>Contoh: "Sediakan telur organik di restoran Anda"</p>
                    <p>Bukan: "Jual produk yang bersih dan sehat agar pelanggan puas dengan kualitas makanan restoran Anda"</p>
                    <strong>Fokus pada solusi</strong>
                    <p>Contoh: "Tingkatkan upah minimum di propinsi kami menjadi Rp1.500.000/bulan"</p>
                    <p>Bukan: "Hentikan meningkatnya kesenjangan pendapatan di propinsi kami"</p>
                    <strong>Komunikasikan kedaruratan</strong>
                    <p>Contoh: "Setujui penurunan harga obat untuk anak saya, sebelum terlambat"</p>
                </div>
            </div>
            <!-- kepada siapa petisi diberikan -->
            <div id="petisi_kepada" class="tab-pane fade col-sm-8 form center-content">
                <h3>Tentukan pengambil keputusan</h3>
                <p class="text-justify">Ini adalah orang, organisasi atau kelompok, yang bisa membuat keputusan untuk menyelesaikan masalahmu. Change.org akan mengirim kepada mereka update tentang petisimu dan kami akan mendorong respon.</p>
                <input type="text" class="form-control" name="kepada" id="kepada" placeholder="Siapa yang punya kewenangan pada perubahan ini?" required><br>
                <div class="text-right">
                    <a href="#petisi_isi" data-toggle="tab"><button class="btn btn-primary" id="btn-form-kepada">Lanjut</button></a>
                </div><br>
                <div class="alert alert-secondary">
                    <strong>Pilih seseorang yang bisa memberikan perubahan yang kamu inginkan</strong>
                    <p>Mungkin kamu perlu melakukan pencarian untuk menemukan orang yang tepat yang bisa membuat atau mempengaruhi keputusan.</p>

                    <strong>Jangan langsung ke yang paling atas</strong>
                    <p>Kamu mungkin bisa melihat hasil yang lebih cepat jika memilih orang yang lebih lokal yang tidak sering dipetisi seperti figur-figur ternama.</p>

                    <strong>Pilih seseorang yang bisa bekerja denganmu</strong>
                    <p>Petisi paling mungkin menang jika bisa mendapatkan sebuah kesepakatan dengan pengambil keputusanmu.</p>
                </div>
            </div>
            <!-- isi dari petisi -->
            <div id="petisi_isi" class="tab-pane fade col-sm-8 form center-content">
                <h3>Jelaskan masalah yang ingin kamu selesaikan</h3>
                <p class="text-justify">Jelasakan masalah yang kamu ingin selesaikan dan bagaimana perubahan ini berdampak bagimu, keluargamu, atau komunitasmu.</p>
                <textarea class="form-control" name="isi" id="isi" cols="30" rows="5" required></textarea><br>
                <div class="text-right">
                    <a href="#petisi_media" data-toggle="tab"><button class="btn btn-primary" id="btn-form-isi">Lanjut</button></a>
                </div><br>
                <div class="alert alert-secondary">
                    <strong>Deskripsikan orang-orang yang terlibat dan masalah yang mereka hadapi</strong>
                    <p>Pembaca semakin mungkin mengambil tindakan jika mereka mengerti siapa yang terkena dampaknya.</p>
                    <strong>Deskripsikan solusinya</strong>
                    <p>Jelaskan apa yang perlu terjadi dan siapa yang bisa membuat perubahannya. Buat supaya jelas apa yang terjadi kalau kamu berhasil ataupun gagal.</p>

                    <strong>Buatlah secara personal</strong>
                    <p>Pembaca semakin mungkin menandatangani dan mendukung petisimu jika jelas terlihat mengapa kamu peduli.</p>

                    <strong>Hargai orang lain</strong>
                    <p>Jangan mem-bully, menggunakan ujaran kebencian, mengancam dengan kekerasan, atau mengada-ada.</p>
                </div>
            </div>
        
            <!-- foto/video dari petisi -->
            <div id="petisi_media" class="tab-pane fade col-sm-8 form center-content">
                <form id="form-submit" action="#" enctype="multipart/form-data" method="post">
                    <h3>Tambah foto atau video</h3>
                    <p class="text-justify">Petisi yang berisi foto dapatkan 6 kali lebih banyak tanda tangan dari petisi yang tidak. Tentukan foto yang menunjukkan emosi dari petisimu.</p>
                    <label class="fileContainer text-center">
                        Click here to trigger the file uploader!
                        <input type="file" name="userfile" size="20" required/>                      
                    </label>
                    <br>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="btn-form-kepada">Lanjut</button>
                    </div>
                </form>
                <br>
                <div class="alert alert-secondary">
                    <strong>Tentukan foto yang menunjukkan emosi dari petisi Anda</strong>
                    <p>Foto berisi orang atau hewan bekerja dengan baik.</p>

                    <strong>Coba mengunggah foto dengan resolusi 1600 x 900 atau lebih besar</strong>
                    <p>Foto yang besar terlihat baik di segala ukuran monitor.</p>

                    <strong>Jaga agar "ramah" pada semua jenis audiens</strong>
                    <p>Pastikan fotomu tidak mengandung kekerasan berlebihan atau konten pornografi.</p>
                </div>
            </div> 
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>public/asset/javascript/module/petition/create.js"></script>