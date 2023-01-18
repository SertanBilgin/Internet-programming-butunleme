<?php include"Ust.php";?> 



<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="index.php">Urun</a></li>
				<li class="active">Sepetim</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			
		</div>
	</div>
</section> <!--/#cart_items-->


<section id="do_action">
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col"> </th>
								<th scope="col"> Adı</th>
								<th></th>
								<th scope="col" >Adet</th>
								<th scope="col" class="text-right">Fiyat</th>
								<th> </th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$urun_id=$kullanicicek['urun_id'];
							$sepetsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
							$sepetsor->execute(array(
								'urun_id' => $urun_id
							));

							while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {
								$urun_id=$sepetcek['urun_id'];
								$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
								$urunsor->execute(array(
									'urun_id' => $urun_id
								));

								$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

								$toplamfiyat+=$uruncek['urun_fiyat']*$sepetcek['urun_stok'];

							

								



								?>
								
								<tr>
									
									<td><?php echo $uruncek['urun_adi'] ?></td>
									<td></td>
									<td><?php echo $sepetcek['urun_stok'] ?></td>
									<td class="text-right"><?php echo $uruncek['urun_fiyat'] ?></td>
								</tr>


							<?php }




							?>


							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><strong>Toplam</strong></td>
								<td class="text-right"><strong><?php echo $toplamfiyat; ?> ₺</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col mb-2">
				<div class="row">
					<div class="col-sm-12  col-md-6">
						<a href="index"></a><button class="btn btn-block btn-light btn-sm">Alışverişe Devam Et</button>
					</div>
					<div class="col-sm-12 col-md-6 text-right">
						<a href="odeme"><button class="btn btn-lg btn-block btn-success text-uppercase btn-sm">Sepeti Onayla</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include"alt.php"; ?>