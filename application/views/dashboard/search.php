<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar');?>

  <div id="page">
    
    <div class="container">

      <div class="jumbotron">

        <h1>Pencarian</h1>

        <ol class="breadcrumb" style="background:transparent; color: #fff">
          <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="<?php echo base_url('/'); ?>">Home</a></li>
          <li class="breadcrumb-item">Pencarian</li>
        </ol>
      </div>

      <div class="line"></div>
      
      <div class="row">
        <div class="container">
            <div class="col-md-12">
                <?php 
                $total = $q->num_rows();
                ?>
                <p>Ditemukan sejumlah <mark><b><?= $total ?> data</b></mark>dalam kata kunci <mark><b><?php echo isset($_GET['q']) ? $_GET['q'] : 'none' ?></b></mark>.</p>
                
                <ul class="timeline">
                    <?php foreach($q->result_array() as $data){ ?>
                    <li>
                        <span><?php echo $data['nm_penyakit']; ?></span>
                        <p>Tindakan pertama kali yang perlu Anda lakukan adalah: <?php echo $data['solusi']; ?></p>
                    </li>
                    <?php } ?>
                </ul>
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