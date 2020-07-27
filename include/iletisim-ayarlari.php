
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">İletişim Ayarları</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
            <li class="breadcrumb-item active">İletişim Ayarları</li>
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
        if (!empty($_POST["telefon"]) && !empty($_POST["mail"]) && !empty($_POST["adres"]) && !empty($_POST["github"]) && !empty($_POST["linkedin"]) && !empty($_POST["medium"]) && !empty($_POST["twitter"]))
        {


          $telefon=$VT->filter($_POST["telefon"]);
          $mail=$VT->filter($_POST["mail"]);
          $adres=$VT->filter($_POST["adres"]);
          $github=$VT->filter($_POST["github"]);
          $linkedin=$VT->filter($_POST["linkedin"]);
          $medium=$VT->filter($_POST["medium"]);
          $twitter=$VT->filter($_POST["twitter"]);

          

          $guncelle=$VT->SorguCalistir("UPDATE ayarlar","SET telefon=?, mail=?, adres=?, github=?, linkedin=?, medium=?, twitter=? WHERE ID=?",array($telefon,$mail,$adres,$github,$linkedin,$medium,$twitter,1),1);

          if ($guncelle!=false)
          {
           ?>
           <div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
           <meta http-equiv="refresh" content="2;url=<?=SITE?>iletisim-ayarlari">
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
                <label>Telefon</label>
                <input type="text" class="form-control" placeholder="Telefon ..." name="telefon" value="<?=$sitetelefon?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>E-mail</label>
                <input type="text" class="form-control" placeholder="Mail ..." name="mail" value="<?=$sitemail?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Adres</label>
                <input type="text" class="form-control" placeholder="Adres ..." name="adres" value="<?=$siteadres?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Github</label>
                <input type="text" class="form-control" placeholder="Github ..." name="github" value="<?=$sitegithub?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Linkedin</label>
                <input type="text" class="form-control" placeholder="Linkedin ..." name="linkedin" value="<?=$sitelinkedin?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Medium</label>
                <input type="text" class="form-control" placeholder="Medium ..." name="medium" value="<?=$sitemedium?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Twitter</label>
                <input type="text" class="form-control" placeholder="Twitter ..." name="twitter" value="<?=$sitetwitter?>">
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


