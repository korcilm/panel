<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Profil Ayarları</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
						<li class="breadcrumb-item active">Profil Ayarları</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- /.content-header -->

			<?php 
			$admin_id=$_SESSION["ID"];
			$query=$VT->VeriGetir("kullanicilar"," WHERE ID=?",array($admin_id));
			if ($query!=false) {

				$kullanici=$query[0]["kullanici"];
				$sifre=$query[0]["sifre"];

			}
			if (isset($_POST["kullanici-adi"]))
			{
				if (!empty($_POST["kullanici"])) {

					$admin_kadi =$VT->filter($_POST["kullanici"]);

					$guncelle=$VT->SorguCalistir("UPDATE kullanicilar ","SET kullanici=? WHERE ID=?",array($admin_kadi,$admin_id),1);

					if ($guncelle!=false)
					{
						?>
						<div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
						<meta http-equiv="refresh" content="2;url=<?=SITE?>profil">
						<?php 
					}
					else
					{
						?>
						<div class="alert alert-danger">İşleminiz sırasında bir sorunla karşılaşıldı. Lütfen daha sonra tekrar deneyin.</div>
						<?php 
					}
				}
				else{
					?>
					<div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>
					<?php 
				}

			}

			if (isset($_POST["sifre-degistir"]))
			{
				if (!empty($_POST["sifre"]) && !empty($_POST["yeni_sifre"])) {

					$admin_sifre=md5($_POST["sifre"]);

					$yeni_sifre=md5($_POST['yeni_sifre']);

					if ($admin_sifre==$sifre) {

						$guncelle=$VT->SorguCalistir("UPDATE kullanicilar ","SET sifre=? WHERE ID=?",array($yeni_sifre,$admin_id),1);

						if ($guncelle!=false)
						{
							?>
							<div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
							<meta http-equiv="refresh" content="2;url=<?=SITE?>profil">
							<?php 
						}
						else
						{
							?>
							<div class="alert alert-danger">İşleminiz sırasında bir sorunla karşılaşıldı. Lütfen daha sonra tekrar deneyin.</div>
							<?php 
						}
					}

					
				}
				else{
					?>
					<div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>
					<?php 
				}

			}

			?>
			<form action="#" method="post" enctype="multipart/form-data">
				<div class="col-md-8">
					<div class="card-body card card-primary">
						<div class="row">

							<div class="col-md-12">
								<div class="form-group">
									<label>Kullanıcı Adı</label>
									<input type="text" name="kullanici" class="form-control"  value="<?=$kullanici?>">
								</div>
							</div>


							<div class="col-md-12">
								<div class="form-group">
									<button type="submit" name="kullanici-adi" class="btn btn-block btn-primary">GÜNCELLE</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</form>

			<!-- /.content-header -->
			<form action="#" method="POST" enctype="multipart/form-data">
				<div class="col-md-8">
					<div class="card-body card card-primary">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label> Şifre</label>
									<input type="text" name="sifre" class="form-control" required="" placeholder="Şuanki şifrenizi giriniz">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label>Yeni Şifre</label>
									<input type="text" name="yeni_sifre" class="form-control" required="" placeholder="Yeni şifrenizi giriniz">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<button type="submit" name="sifre-degistir" class="btn btn-block btn-primary">GÜNCELLE</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div><!-- /.container-fluid -->
	</section>
</div>
</div>

<!-- /.content -->
</div>
