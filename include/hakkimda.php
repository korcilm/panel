
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Hakkımda</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
            <li class="breadcrumb-item active">Hakkımda</li>
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
      $hakkimda=$VT->VeriGetir("hakkimda","WHERE ID=?",array(1),"");
      if ($hakkimda!=false) {

          $adsoyad=$hakkimda[0]["adsoyad"];
          $bilgi=$hakkimda[0]["bilgi"];
          $metin=stripslashes($hakkimda[0]["metin"]);
        
      }

      if ($_POST)
      {
        if (!empty($_POST["adsoyad"]) && !empty($_POST["bilgi"]) && !empty($_POST["metin"]))
        {


          $adsoyad=$VT->filter($_POST["adsoyad"]);
          $bilgi=$VT->filter($_POST["bilgi"]);
          $metin=$VT->filter($_POST["metin"],true);
          

          

          $guncelle=$VT->SorguCalistir("UPDATE hakkimda","SET adsoyad=?, bilgi=?, metin=? WHERE ID=?",array($adsoyad,$bilgi,$metin,1),1);

          if ($guncelle!=false)
          {
           ?>
           <div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
           <meta http-equiv="refresh" content="2;url=<?=SITE?>hakkimda">
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

    ?>
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="col-md-8">
        <div class="card-body card card-primary">
          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label>Ad Soyad</label>
                <input type="text" class="form-control" placeholder="Adınız ve soyadınız ..." name="adsoyad" value="<?=$adsoyad?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Bilgi</label>
                <input type="text" class="form-control" placeholder="Bilgi ..." name="bilgi" value="<?=$bilgi?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Metin</label>
                <textarea class="textarea" placeholder="Metin alanıdır." name="metin" 
                style="width: 100%; height: 350px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                <?=$metin?>
              </textarea>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" class="btn btn-block btn-primary">GÜNCELLE</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>


</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


