<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar');?>

  <div id="page">
    
    <div class="container">

      <div class="jumbotron">

        <h2>Daftar Penyakit Ayam</h2>

        <ol class="breadcrumb" style="background:transparent; color: #fff">
          <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="<?php echo base_url('/'); ?>">Home</a></li>
          <li class="breadcrumb-item" style="color: #fff">Penyakit</li>
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
                                <th>Nama Penyakit</th>
                                <th>Nama Latin</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($daftar_penyakit as $item) { ?>
                            <tr>
                                <td width="10px"><?php echo $no++; ?></td>
                                <td><?php echo $item['nm_penyakit']; ?></td>
                                <td><?php echo $item['nm_latin']; ?></td>
                                <td width="150px" class="text-center">
                                    <a href="<?php echo base_url('daftar-penyakit/'.$item['kd_penyakit']); ?>" class="btn btn-secondary btn-sm"><i class="fa fa-list"></i> Detail</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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