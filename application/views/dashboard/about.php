<?php $this->load->view('partials/header');?>
<?php $this->load->view('partials/sidebar');?>

  <div id="page">
    
    <div class="container">

      <div class="jumbotron">

        <h1>Tentang Aplikasi</h1>

        <ol class="breadcrumb" style="background:transparent; color: #fff">
          <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="<?php echo base_url('/'); ?>">Home</a></li>
          <li class="breadcrumb-item">About</li>
        </ol>
      </div>

      <div class="line"></div>
      
      <div class="row">
        <div class="container">
            <div class="col-md-12">
                <p>WPakryam merupakan sistem pakar berbasis pengetahuan yang dapat melakukan diagnosa dan memberikan solusi atas penyakit ayam berdasarkan gejala-gejalanya.</p>
                <p>Sistem ini terdiri dari beberapa menu, diantaranya:</p>
                <p>1. Menu User</p>
                <p>Digunakan untuk melakukan diagnosa penyakit ayam. Pemakai akan menjawab pertanyaan yang di berikan oleh sistem dan sistem akan merekam data tersebut, kemudian sistem akan menyimpulkan penyakit yang diderita berdasarkan pertanyaan-pertanyaan yang dijawab tersebut diatas.</p>
                <p>2. Menu Admin atau Pakar</p>
                <p>Digunakan untuk merubah pengetahuan, yaitu menambah penyakit, gejala-gejala penyakit, dan basis aturan. Untuk mengolah data harus login dahulu sebagi admin.</p>
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