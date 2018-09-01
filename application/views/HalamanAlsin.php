<!DOCTYPE <html>
<html>
	<head>
		<!-- <title>Balittas</title>
		<meta charset="utf-8">		
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">		
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	</head>	
	<body>
		
		<br>
		<!-- CONTENT -->
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-lg-9">
					<ul class="breadcrumb" style="margin: -6px 0px -10px -15px;">
					  	<li><a href="<?php echo base_url() ?>">Beranda</a></li>
					  	<li><a href="<?php echo base_url("produk/$url") ?>">Produk</a></li>
						<li class="active">Alat dan Mesin</li> 
					</ul>
					<h3 class="text-left" style="color:black; font-family: helmet"><?php echo $kategori; ?></h3>
					<hr style="border-color: grey;margin-top: -10px;">
					<!-- <hr style="border-color: grey;margin-top: 10px;"> -->
					<div class="row" style="margin-top: -7px;">
						<?php
							$ganjil = true; $namaAlsin = "";						
							foreach ($dataAlsin as $alsin) { 
								if (strlen($alsin->nama_leaflet) > 15) {
									$namaAlsin = substr($alsin->nama_leaflet, 0, 15)." ...";
								} else {
									$namaAlsin = $alsin->nama_leaflet;
								}
								if ($ganjil) {
								
						?>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnailLeaflet text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
								<img class="leafletImg" src="<?php echo base_url() ?>assets/leaflet/<?php echo $alsin->file; ?>" alt="" style="width:100%;border-radius: 3px;">
						<?php 	
									$ganjil = false; 
								} else { 
						?>
								<img class="leafletImg" src="<?php echo base_url() ?>assets/leaflet/<?php echo $alsin->file; ?>" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);" title="<?php echo $alsin->nama_leaflet; ?>"><?php echo strtoupper($namaAlsin); ?></h4>
							</div>						
						</div>
						<?php 	
									$ganjil = true; 
								} 
							} 
						?>
						
					</div>
					<ul class="paginationKu pagerCustom" >
						<?php foreach ($links as $link) {
							echo "<li>". $link."</li>";
						} ?>
					</ul>
					<br>
				</div>

				<div class="col-sm-3 col-lg-3">
					<br>
					<h3 class="text-left" style="color:black;font-family: helmet">Pencarian</h3>
					<hr style="border-color: grey;margin-top: -10px;">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9); border-radius: 5px;margin-top: -7px;margin-bottom: -8px;">
						<form method="get" action="<?php echo base_url('pencarian'); ?>" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group" style="z-index: 0">
							    <input type="text" class="form-control" placeholder="Cari" name="keyword" required>
							    <div class="input-group-btn">
							      <button class="btn btn-success" type="submit" style="color: #5cb85c;">
							        <i class="glyphicon glyphicon-search" style="color: white;"></i>.
							      </button>
							    </div>
							 </div>
						</form>						
					</div>
					<h3 class="text-left" style="color:black;font-family: Monion pro">Varietas Terbaru</h3>
					<hr style="border-color: grey;margin-top:  -10px; margin-bottom: 13px;">
					<?php 
						foreach ($varietas as $varietasSide) {
							$namaVarietas = ""; $narasi = "";
							if (strlen($varietasSide->nama_varietas) > 30) {
								$namaVarietas = substr($varietasSide->nama_varietas, 0, 30)." ...";
							} else {
								$namaVarietas = $varietasSide->nama_varietas;
							}
					 ?>
					<div style="margin-top: -5px;">
						<a href="<?php echo base_url('varietas/detailvarietas/').urlencode(strtolower($varietasSide->nama_varietas)); ?>" style="color:black;text-decoration-line: none;">
							<p style="color:rgb(242,97,5);font-size: 15px;margin-bottom: 5px;" title="<?php echo $varietasSide->nama_varietas; ?>"><?php echo $namaVarietas; ?></p>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-lg-6">
									<img src="<?php echo base_url() ?>assets/varietas/<?php echo $varietasSide->file_gambar; ?>" alt="" style="width: 135px;">	
								</div>
								<div class="col-xs-6 col-sm-6 col-lg-6">
								<?php 
									if (!empty($varietasSide->narasi)) {
										$narasi = substr($varietasSide->narasi, 0, 48)." [..]";
									} else {
										$narasi = "(Belum ada deskripsi mengenai varietas terkait!)";
									}
								 ?>
									<p style=" font-style: italic; font-size: 14px;"><?php echo $narasi; ?></p>					
								</div>		
							</div>
						</a>
					</div>
					<hr style="margin-top: 10px;margin-bottom: 10px;">
					<?php 
						}
					 ?>
				</div>
			</div>
		</div>
		<!-- END OF CONTENT -->

		<!-- MODALS -->
		<div id="myModal" class="modalLeaflet">
		  <span class="closeModal" style="margin-top: 50px; margin-left: 15px;">&times;</span>
		  <img class="modalLeaflet-content" id="imgModal">
		</div>
		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var max = document.getElementsByClassName("leafletImg");
		for (var i = 0; i < max.length; i++) {
			var img = document.getElementsByClassName("leafletImg")[i];
			var modalImg = document.getElementById("imgModal");
			img.onclick = function(){
			    modal.style.display = "block";
			    modalImg.src = this.src;
			}
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("closeModal")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		    modal.style.display = "none";
		}
		</script>
		<!-- END OF MODALS -->

	</body>
	<br>
	
	
</html>

