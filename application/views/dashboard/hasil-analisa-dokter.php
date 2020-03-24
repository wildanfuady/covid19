<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar');?>

  <div id="page">
    
    <div class="container">

      <div class="jumbotron">

        <h2>Hasil Analisa Dokter</h2>

        <ol class="breadcrumb" style="background:transparent; color: #fff">
          <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="<?php echo base_url('/'); ?>">Home</a></li>
          <li class="breadcrumb-item">Hasil Analisa Dokter</li>
        </ol>
      </div>

      <div class="line"></div>
      
      <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="<?php echo base_url('assets/img/doctor.svg'); ?>" alt="WPakryam Logo" class="brand-image img-circle" style="width:80%">
                </div>
                <div class="col-md-8">
                    <h4>Penyakit yang mungkin diderita ayam Anda:</h4>
                    <ul class="timeline">
                        <?php
                        foreach($hasil as $data){ ?>
                        <li>
                            <span><?php echo $data['nm_penyakit']; ?></span>
                            <p>Tindakan pertama kali yang perlu Anda lakukan adalah: <?php echo $data['solusi']; ?></p>
                        </li>
                        <?php } ?>
                    </ul>
                    Jika sakit masih berlanjut <b>segera bawa ke dokter hewan</b> terdekat.
                </div>
            </div>
        </div>
      </div>

      <div class="line"></div>

      <div class="row">
        <div class="col-md-12 text-center">
            Copyright &copy; 2020 - WPakryam: Sistem Informasi Pakar Penyakit Ayam
        </div>
      </div>

    </div>
  </div>

<?php $this->load->view('partials/footer');?>