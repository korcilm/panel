 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?=SITE?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="<?=SITE?>" class="d-block"><?=$_SESSION["adsoyad"]?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                SAYFA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php 
              $moduller=$VT->VeriGetir("moduller","WHERE durum=?",array(1),"ORDER BY ID ASC");
              if ($moduller!=false) {
                for($i=0 ; $i<count($moduller); $i++){
                 ?>
                 <li class="nav-item bg-white">
                  <a href="<?=SITE?>liste/<?=$moduller[$i]["tablo"]?>" class="nav-link">
                    <i class="fas fa-book  nav-icon"></i>
                    <p><?=$moduller[$i]["baslik"]?></p>
                  </a>
                </li>

                <?php 
              }
            }
            ?>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>yorum" class="nav-link">
            <i class="nav-icon far fa-comments"></i>
            <p>
                Yorum Onay
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>profil" class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
            <p>
               Profil Ayarları
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>hakkimda" class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
            <p>
               Hakkımda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>seo-ayarlari" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              SEO Ayarları
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>site-ayarlari" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Site Ayarları
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>iletisim-ayarlari" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p>
              İletişim Ayarları
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>cikis" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Çıkış Yap
            </p>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
