<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Anasayfa</h1>
        </div><!-- /.col -->
        
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <?php
              $blog=$VT->VeriGetir("bloglar","WHERE durum=?",array(1),"ORDER BY ID ASC");
              $say=count($blog);
              ?>

              <h3><?=$say?></h3>
              <p>Blog Yazısı</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $yorum=$VT->VeriGetir("yorumlar","WHERE onay=?",array(1),"ORDER BY ID ASC");
              $sayi=count($yorum);
              ?>
              <h3><?=$sayi?></h3>
              <p>Yapılan Yorum</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>