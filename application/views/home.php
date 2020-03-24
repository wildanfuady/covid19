<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar');?>

  <div id="page">
    
    <div class="container">

      <div class="jumbotron">

        <h2>Lifetime: Pantau Informasi Penyebaran Virus Corona di Indonesia</h2>

        <p>Situs organisasi kesehatan dunia, WHO, telah menetapkan virus corona atau covid19 sebagai pandemi. Lindungi keluarga, rekan-rekan, saudara juga diri Anda dari penyebaran virus corona.</p>

        <p>Sumber data : Kementerian Kesehatan & Johns Hopkins University. Update terakhir : <?php echo date('d-m-Y H:i:s'); ?> WIB</p>

      </div>
      
      <div class="line"></div>

      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <div class="card bg-danger img-card box-primary-shadow">
            <div class="card-body">
              <div class="d-flex">
                <?php
                  $json_positif=file_get_contents('https://api.kawalcorona.com/positif');
                  $obj_positif = json_decode($json_positif);
                ?>
                <div class="text-white">
                  <p class="text-white mb-0">TOTAL POSITIF</p>
                  <h2 class="mb-0 number-font"><?= $obj_positif->value ?></h2>
                  <p class="text-white mb-0">ORANG</p>
                </div>
                <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
              </div>
            </div>
          </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <div class="card bg-success img-card box-secondary-shadow">
            <div class="card-body">
              <div class="d-flex">
                <?php
                  $json_sembuh=file_get_contents('https://api.kawalcorona.com/sembuh');
                  $obj_sembuh = json_decode($json_sembuh);
                ?>
                <div class="text-white">
                  <p class="text-white mb-0">TOTAL SEMBUH</p>
                  <h2 class="mb-0 number-font"><?= $obj_sembuh->value ?></h2>
                  <p class="text-white mb-0">ORANG</p>
                </div>
                <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
              </div>
            </div>
          </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <div class="card  bg-secondary img-card box-success-shadow">
            <div class="card-body">
              <div class="d-flex">
                <?php
                  $json_meninggal=file_get_contents('https://api.kawalcorona.com/meninggal');
                  $obj_meninggal = json_decode($json_meninggal);
                ?>
                <div class="text-white">
                  <p class="text-white mb-0">TOTAL MENINGGAL</p>
                  <h2 class="mb-0 number-font"><?= $obj_meninggal->value ?></h2>
                  <p class="text-white mb-0">ORANG</p>
                </div>
                <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
              </div>
            </div>
          </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <div class="card bg-info img-card box-success-shadow">
            <div class="card-body">
              <div class="d-flex">
                <div class="text-white">
                  <h5 class="mb-0 number-font">INDONESIA</h5>
                  <?php
                    $json=file_get_contents('https://api.kawalcorona.com/indonesia');
                    $obj = json_decode($json);
                    foreach ($obj as $data){ ?>
                  <p class="text-white mb-0"><b> <?= $data->positif ?></b> POSITIF, <b><?= $data->sembuh ?></b> SEMBUH,<br> <b><?= $data->meninggal ?></b> MENINGGAL</p>
                    <?php } ?>
                </div>
                
                <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/indonesia-PZq.png" width="50" height="50" alt="Positif"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
              Statistik Kasus Virus Corona Berdasarkan Propinsi
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Propinsi</th>
                      <th>Kasus Positif</th>
                      <th>Kasus Sembuh</th>
                      <th>Kasus Meninggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $json=file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
                    $obj = json_decode($json);
                    $no = 1;
                    foreach ($obj as $data){ ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data->attributes->Provinsi ?></td>
                      <td><?= number_format($data->attributes->Kasus_Posi) ?></td>
                      <td><?= number_format($data->attributes->Kasus_Semb) ?></td>
                      <td><?= number_format($data->attributes->Kasus_Meni) ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
      
      <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
              Statistik Kasus Virus Corona Global
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table2">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Negara</th>
                      <th>Kasus Positif</th>
                      <th>Kasus Sembuh</th>
                      <th>Kasus Meninggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $json=file_get_contents('https://api.kawalcorona.com/');
                    $obj = json_decode($json);
                    $no = 1;
                    foreach ($obj as $data){ ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data->attributes->Country_Region ?></td>
                      <td><?= number_format($data->attributes->Confirmed) ?></td>
                      <td><?= number_format($data->attributes->Recovered) ?></td>
                      <td><?= number_format($data->attributes->Deaths) ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>

      <div class="line"></div>

      <div class="row mt-3 mb-3">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3 ">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center  mb-4 text-primary"><img src="https://kawalcorona.com/uploads/unnamed-9mT.png" width="50" height="50" alt="Logo Daerah"></div>
                <div class="item-box-wrap">
                  <a href="tel:0215210411"><h5 class="mb-2">021-5210-411</h5></a>
                  <p class="text-muted mb-0">Kementrian Kesehatan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center text-danger-gradient mb-4"><img src="https://kawalcorona.com/uploads/unnamed-9mT.png" width="50" height="50" alt="Logo Daerah"></div>
                <div class="item-box-wrap">
                  <a href="tel:081212123119"><h5 class="mb-2">0812-1212-3119</h5></a>
                  <p class="text-muted mb-0">Kementrian Kesehatan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center text-success mb-4"><img src="https://kawalcorona.com/uploads/logo-dki.png" width="44" height="50" alt="Logo Daerah"> </div>
                <div class="item-box-wrap">
                  <a href="tel:112"><h5 class="mb-2">112</h5></a>
                  <p class="text-muted mb-0">Pemprov DKI Jakarta</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class="text-center text-warning-gradient mb-4"><img src="https://kawalcorona.com/uploads/logo-dki.png" width="44" height="50" alt="Logo Daerah"> </div>
                <div class="item-box-wrap">
                  <a href="tel:+6281388376955"><h5 class="mb-2">0813-8837-6955</h5></a>
                  <p class="text-muted mb-0">Pemprov DKI Jakarta</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3 mb-3">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3 ">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center  mb-4 text-primary"><img src="https://kawalcorona.com/uploads/jatengnew.png" width="45" height="50" alt="Logo Daerah"></div>
                <div class="item-box-wrap">
                  <a href="tel:0243580713"><h5 class="mb-2">024-358-0713</h5></a>
                  <p class="text-muted mb-0">Pemprov Jawa Tengah</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center text-danger-gradient mb-4"><img src="https://kawalcorona.com/uploads/jatengnew.png" width="45" height="50" alt="Logo Daerah"></div>
                <div class="item-box-wrap">
                  <a href="tel:082313600560"><h5 class="mb-2">0823-1360-0560</h5></a>
                  <p class="text-muted mb-0">Pemprov Jawa Tengah</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center text-success mb-4"><img src="https://kawalcorona.com/uploads/jatim.png" width="35" height="50" alt="Logo Daerah"> </div>
                <div class="item-box-wrap">
                  <a href="tel:0318430313"><h5 class="mb-2">031-843-0313</h5></a>
                  <p class="text-muted mb-0">Pemprov Jawa Timur</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class="text-center text-warning-gradient mb-4"><img src="https://kawalcorona.com/uploads/jatim.png" width="35" height="50" alt="Logo Daerah"> </div>
                <div class="item-box-wrap">
                  <a href="tel:081334367800"><h5 class="mb-2">0813-3436-7800</h5></a>
                  <p class="text-muted mb-0">Pemprov Jawa Timur</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3 mb-3">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3 ">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center  mb-4 text-primary"><img src="https://kawalcorona.com/uploads/jabar.png" width="43" height="50" alt="Logo Daerah"></div>
                <div class="item-box-wrap">
                  <a href="tel:119"><h5 class="mb-2">119</h5></a>
                  <p class="text-muted mb-0">Pemprov Jawa Barat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center text-danger-gradient mb-4"><img src="https://kawalcorona.com/uploads/jabar.png" width="43" height="50" alt="Logo Daerah"></div>
                <div class="item-box-wrap">
                  <a href="tel:08112093306"><h5 class="mb-2">0811-209-3306</h5></a>
                  <p class="text-muted mb-0">Pemprov Jawa Barat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class=" text-center text-success mb-4"><img src="https://kawalcorona.com/uploads/yogya.jpg" width="39" height="50" alt="Logo Daerah"> </div>
                <div class="item-box-wrap">
                  <a href="tel:0274555585"><h5 class="mb-2">0274-555-585</h5></a>
                  <p class="text-muted mb-0">Pemprov D.I Yogyakarta</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
          <div class="card service">
            <div class="card-body">
              <div class="item-box text-center">
                <div class="text-center text-warning-gradient mb-4"><img src="https://kawalcorona.com/uploads/yogya.jpg" width="39" height="50" alt="Logo Daerah"> </div>
                <div class="item-box-wrap">
                  <a href="tel:08112764800"><h5 class="mb-2">0811-2764-800</h5></a>
                  <p class="text-muted mb-0">Pemprov D.I Yogyakarta</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          &copy; 2020 - <a href="https://ilmucoding.com">Ilmu Coding | Content by <a href="https://kawalcorona.com">Kawal Corona</a> 
        </div>
      </div>

    </div>
  </div>

<?php $this->load->view('partials/footer');?>