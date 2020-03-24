<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar');?>

  <div id="page">
    
    <div class="container">

      <div class="jumbotron">

        <h2>Detail Gejala Penyakit <?php echo $detail_penyakit['nm_penyakit']; ?> Pada Ayam</h2>

        <ol class="breadcrumb" style="background:transparent; color: #fff">
          <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="<?php echo base_url('/'); ?>">Home</a></li>
          <li class="breadcrumb-item" style="color: #fff"><a href="<?php echo base_url('daftar-penyakit'); ?>">Penyakit</a></li>
          <li class="breadcrumb-item">Gejala</li>
        </ol>
      </div>

      <div class="line"></div>
      
      <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hovered table-striped">
                        <thead style="background: #7386D5; color: #fff;">
                            <tr>
                                <th width="10px">No</th>
                                <th>Kode Gejala</th>
                                <th>Nama Gejala</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($detail_gejala_penyakit->result_array() as $item) { 
                              $total = $detail_gejala_penyakit->num_rows(); ?>
                            <tr>
                                <td width="10px"><?php echo $no++; ?></td>
                                <td><?php echo $item['kd_gejala']; ?></td>
                                <td><?php echo $item['nm_gejala']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="title-2">Solusi</h3>
                <p><?php echo $detail_penyakit['solusi']; ?></p>
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