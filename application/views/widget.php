<!DOCTYPE html>
<html>
<title>Update Status Penyebaran Virus Corona di Indonesia</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
var d = new Date();
var month = new Array();
  month[0] = "Januari";
  month[1] = "Februari";
  month[2] = "Maret";
  month[3] = "April";
  month[4] = "Mei";
  month[5] = "Juni";
  month[6] = "Juli";
  month[7] = "Agustus";
  month[8] = "September";
  month[9] = "Oktober";
  month[10] = "November";
  month[11] = "Desember";
  
$("#date").html(d.getDate() + " " + month[d.getMonth()] + " " + d.getFullYear());
    $.ajax({url: "https://api.kawalcorona.com/indonesia/", success: function(result){
     $("#positif").html(result[0].positif);
     $("#sembuh").html(result[0].sembuh);
     $("#meninggal").html(result[0].meninggal);
     var tingkat_kematian = parseInt((result[0].meninggal / result[0].positif) * 100);
     $("#total").html(tingkat_kematian + "%");

    }});
});
</script>
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
	<div class="col-6 col-md-3 mb-3">
	<div class="card bg-danger" id="show">
		<div class="card-body">
			<div class="d-flex">
				<div class="text-white">
					<p class="text-white mb-0 text">POSITIF</p>
					<h2 class="mb-0 number-font" id="positif">0</h2>
				</div>
				<div class="ml-auto"> 
					<img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50" height="50" alt="Positif"> 
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
					<h2 class="mb-0 number-font" id="sembuh">0</h2>
				</div>
				<div class="ml-auto"> 
					<img src="https://kawalcorona.com/uploads/happy-ipM.png" width="50" height="50" alt="Sembuh"> 
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
					<h2 class="mb-0 number-font" id="meninggal">0</h2>
				</div>
				<div class="ml-auto"> 
					<img src="https://kawalcorona.com/uploads/emoji-LWx.png" width="50" height="50" alt="Meninggal"> 
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
					<h2 class="mb-0 number-font" id="total">0<span>%</span></h2>
				</div>
				<div class="ml-auto"> 
					<img src="https://kawalcorona.com/uploads/indonesia-PZq.png" width="50" height="50" alt="Meninggal"> 
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</div>
</body>
</html>
