<?php 
@session_start();
@ob_start();
error_reporting(0);
define('DATA', 'data/');
define('SAYFA', 'include/');
define('SINIF', 'class/');
include_once(DATA."baglanti.php");
define('SITE', $siteurl);

?>
<!-- alert uyarı bolmesi -->



<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Yorum Onay</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
						<li class="breadcrumb-item active">Yorum Onay</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	
	<section class="content">
		<div class="container-fluid">

			<div class="card">
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th  width="5%">#</th>
								<th  width="15%">İsim</th>
								<th  width="15%">Tarihi</th>
								<th  width="15%">Hangi Yazım</th>
								<th  width="15%">Yorum</th>
								<th  width="15%">Onay</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$yorum=$VT->VeriGetir("yorumlar","WHERE onay=?",array(0),"ORDER BY ID DESC");
							if ($yorum!=false) {

								for ($i=0; $i < count($yorum) ; $i++) { 
									?>	
									<tr>
										<td><center><?=$yorum[$i]["ID"]?></center></td>
										<td><?=$yorum[$i]["kullaniciadi"]?></td>
										<td><center><?php 

										$date = $yorum[$i]["tarih"];
										$date = date('d.m.Y  H:i', strtotime($date)); 
										echo $date;

										?></center></td>
										<td><?php

										$blogID=$yorum[$i]["blogID"];
										$blog=$VT->VeriGetir("bloglar","WHERE ID=?",array($blogID),"");
										echo $blog[0]["baslik"];
										?></td>
										<td><?=$yorum[$i]["yorum"]?></td>
										<td>
											<center>
												<a href="islem.php?yorum_id=<?php echo $yorum[$i]["ID"]; ?> && onay=<?php echo $yorum[$i]["onay"]+1; ?>" title="Onayla" class="btn btn-success">Onayla</a>
												<a href="islem.php?yorumsil_id=<?php echo $yorum[$i]["ID"]; ?>" title="Sil" class="btn btn-danger">Sil</a>
											</center>
										</td>
									</tr>

									<?php 
								}
							}
							?>

						</tbody>
						<tfoot>
							<tr>
								<th  width="5%">#</th>
								<th  width="15%">İsim</th>
								<th  width="15%">Tarihi</th>
								<th  width="15%">Hangi Yazım</th>
								<th  width="15%">Yorum</th>
								<th  width="15%">Onay</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.card-body -->
			</div>

		</div><!-- /.container-fluid -->
	</section>
</div>
