
<?php 
 $site=$VT->VeriGetir("site","WHERE site_id=?",array(1),"","");
      if ($site!=false) {
        $site_title=$site[0]["site_title"];
        $site_keyw=$site[0]["site_keyw"];
        $site_desc=$site[0]["site_desc"];
        $site_url=$site[0]["site_url"];
        $site_footer=$site[0]["site_footer"];

      }
 ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Site Ayarları</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
            <li class="breadcrumb-item active">Site Ayarları</li>
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

      if ($_POST)
      {
        if (!empty($_POST["site_title"]) && !empty($_POST["site_keyw"]) && !empty($_POST["site_desc"]) && !empty($_POST["site_url"]) && !empty($_POST["site_footer"]))
        {


          $site_title=$VT->filter($_POST["site_title"]);
          $site_keyw=$VT->filter($_POST["site_keyw"]);
          $site_desc=$VT->filter($_POST["site_desc"]);
          $site_url=$VT->filter($_POST["site_url"]);
          $site_footer=$VT->filter($_POST["site_footer"]);


          $guncelle=$VT->SorguCalistir("UPDATE site ","SET site_title=?, site_keyw=?, site_desc=?, site_url=?, site_footer=? WHERE site_id=?",array($site_title,$site_keyw,$site_desc,$site_url,$site_footer,1),1);

          if ($guncelle!=false)
          {
           ?>
           <div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
           <meta http-equiv="refresh" content="2;url=<?=SITE?>site-ayarlari">
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
                <label>Site Başlık</label>
                <input type="text" class="form-control" placeholder="Site Başlık ..." name="site_title" value="<?=$site_title?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Anahtar</label>
                <input type="text" class="form-control" placeholder="Anahtar ..." name="site_keyw" value="<?=$site_keyw?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Description ..." name="site_desc" value="<?=$site_desc?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>URL</label>
                <input type="text" class="form-control" placeholder="URL ..." name="site_url" value="<?=$site_url?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Footer</label>
                <input type="text" class="form-control" placeholder="Footer ..." name="site_footer" value="<?=$site_footer?>">
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


