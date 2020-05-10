<!DOCTYPE html>
<html>
<title>Update Status Penyebaran Virus Corona di Indonesia</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Favicon -->
<link rel="icon" href="<?php echo base_url('themes/img/bat.svg'); ?>" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<head>
<style>
.title {
    text-align: center;
    text-transform: uppercase;
    font-family: arial;
    font-size:1em;
}

.number-font{
	font-size: 50px;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: .25rem;
}
.bg-danger {
    background-color: #dc3545!important;
}
.bg-success {
    background-color: #28a745!important;
}
.bg-secondary {
    background-color: #6c757d!important;
}
.text{
	font-size: 16px;
}
#total span{
	font-size: 20px;
}
</style>
</head>
<body>
<div class="container text-center">
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12">
	<div class="title">
		<h1>covid-19 indonesia</h1>
		<h3><span id="date"></span></h3>
	</div>
	</div>
	<?php
	$json=file_get_contents('https://api.kawalcorona.com/indonesia');
	$obj = json_decode($json);
	foreach ($obj as $data){
	$ganti_angka_positif = str_replace(",", "", $data->positif);
	$ganti_angka_meninggal = str_replace(",", "", $data->meninggal);
	$kematian = ($ganti_angka_meninggal / $ganti_angka_positif) * 100;
	$total = number_format($kematian, 0, 0, ".");
	?>
	<div class="col-6 col-md-3 mb-3">
	<div class="card bg-danger" id="show">
		<div class="card-body">
			<div class="d-flex">
				<div class="text-white">
					<p class="text-white mb-0 text">POSITIF</p>
					<h2 class="mb-0 number-font" id="positif"><?= $data->positif ?></h2>
				</div>
				<div class="ml-auto"> 
					<img src="<?php echo base_url(); ?>themes/img/sad-u6e.png" width="50" height="50" alt="Positif"> 
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col-6 col-md-3 mb-3">
	<div class="card bg-success" id="show">
		<div class="card-body">
			<div class="d-flex">
				<div class="text-white">
					<p class="text-white mb-0 text">SEMBUH</p>
					<h2 class="mb-0 number-font" id="sembuh"><?= $data->sembuh ?></h2>
				</div>
				<div class="ml-auto"> 
					<img src="<?php echo base_url(); ?>themes/img/happy-ipM.png" width="50" height="50" alt="Sembuh"> 
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col-6 col-md-3 mb-3">
	<div class="card bg-secondary" id="show">
		<div class="card-body">
			<div class="d-flex">
				<div class="text-white">
					<p class="text-white mb-0 text">MENINGGAL</p>
					<h2 class="mb-0 number-font" id="meninggal"><?= $data->meninggal ?></h2>
				</div>
				<div class="ml-auto"> 
					<img src="<?php echo base_url(); ?>themes/img/emoji-LWx.png" width="50" height="50" alt="Meninggal"> 
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col-6 col-md-3 mb-3">
	<div class="card bg-info" id="show">
		<div class="card-body">
			<div class="d-flex">
				<div class="text-white">
					<p class="text-white mb-0 text">KEMATIAN</p>
					<h2 class="mb-0 number-font" id="total"><?php echo $total; ?><span>%</span></h2>
				</div>
				<div class="ml-auto"> 
					<img src="<?php echo base_url(); ?>themes/img/indonesia-PZq.png" width="50" height="50" alt="Meninggal"> 
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php } ?>
</div>
</div>
</body>
</html>
