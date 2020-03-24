<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar');?>

  <div id="page">
    
    <div class="container">

      <div class="jumbotron">

        <h2>Konsultasi Dokter</h2>

        <ol class="breadcrumb" style="background:transparent; color: #fff">
          <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="<?php echo base_url('/'); ?>">Home</a></li>
          <li class="breadcrumb-item" style="color: #fff">Konsultasi Dokter</li>
        </ol>

      </div>
      
      <div class="line"></div>
      
      <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="form-group">
                    <p>Apakah Anda sudah membaca daftar pertolongan pertama pada ayam? Klik <a href="<?php echo base_url('daftar-pertolongan'); ?>" style="color:#7386D5"><b>di sini</b></a> jika belum.</p>
                </div>
                <?php echo form_open('analisa'); ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hovered table-striped">
                        <thead style="background: #7386D5; color: #fff;">
                            <tr>
                                <th width="10px">No</th>
                                <th>Masalah</th>
                                <th>Ya</th>
                                <th>Tidak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach($gejala as $key => $data) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td>Apakah ayam Anda mengalami <?php echo $data['nm_gejala']; ?>?</td>
                                <td><input type="radio" name="gejala<?php echo $key;?>" value="Ya"></td>
                                <td><input type="radio" name="gejala<?php echo $key;?>" value="Tidak"></td>
                                <input type="hidden" name="kode<?php echo $key;?>" value="<?php echo $data['kd_gejala']; ?>">
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary float-right">Analisa Penyakit</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
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