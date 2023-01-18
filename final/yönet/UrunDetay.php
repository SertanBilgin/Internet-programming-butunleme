<?php
    include "ust.php";
    if(!isset($_GET['id']))

    $_GET['id']=0;

    $Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
    $Urun->execute(array(intval($_GET['id'])));

    $Urun=$Urun->fetch();
 ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ürünler</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürün Detayı </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <?php 
                 if(isset($_GET['Durum']))
                        {
                           if($_GET['Durum']) 
                          {
                            ?>
                         <div class="alert alert-success alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Güncelleme Yapıldı</strong>
                           </div>
                            <?php
                          }
                            else
                             
                            {
                              ?>
                           <div class="alert alert-danger  alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <strong>Güncelleme Yapılamadı!!!</strong>
                             </div>
                              <?php
                            }

                        }
                      ?>

                    <form action ="urun_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>                      
                        <span class="section"><?php echo $Urun['urun_adi'] ?></span>

                      <input type="hidden" name="urun_id" value="<?php echo $Urun['urun_id'] ?>">
                      
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_adi">Ürünün Adı
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_adi" value="<?php echo $Urun['urun_adi'] ?>" class="form-control col-md-7 col-xs-12" name="urun_adi" placeholder="Ürünün Adını Giriniz" type="text">
                          </div>
                        </div>
                         
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_aciklama">Açıklaması
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_aciklama" value="<?php echo $Urun['urun_aciklama'] ?>" class="form-control col-md-7 col-xs-12" name="urun_aciklama" placeholder="Ürünün Açıklamasını Giriniz" type="text">
                          </div>
                        </div>
                        
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_fiyat">Fiyatı
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_fiyat" value="<?php echo $Urun['urun_fiyat'] ?>" class="form-control col-md-7 col-xs-12" name="urun_fiyat" placeholder="Ürünün Fiyatını Giriniz" type="text">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_indirim">İndirim oranı
                          </label>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_indirim" value="<?php echo $Urun['urun_indirim'] ?>" class="form-control col-md-7 col-xs-12" name="urun_indirim" placeholder="İndirim oranını Giriniz" type="text">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_stok">Stok
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_stok" value="<?php echo $Urun['urun_stok'] ?>" class="form-control col-md-7 col-xs-12" name="urun_stok" placeholder="Ürünün Stoğunu Giriniz" type="text">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_vitrin">Vitrin Durumu
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_vitrin" value="<?php echo $Urun['urun_vitrin'] ?>" class="form-control col-md-7 col-xs-12" name="urun_vitrin" placeholder="Vitrin Durumunu Giriniz" type="text">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_kategori_id">Kategorisi
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_kategori_id" value="<?php echo $Urun['urun_kategori_id'] ?>" class="form-control col-md-7 col-xs-12" name="urun_kategori_id" placeholder="Ürünün Kategorisini  Giriniz" type="text">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_renk">Ürün Renk
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                        
                            <input id="urun_renk" value="<?php echo $Urun['urun_renk'] ?>" class="form-control col-md-7 col-xs-12" name="urun_renk" placeholder="Ürünün Rengini Giriniz" type="text">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_beden">Beden
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_beden" value="<?php echo $Urun['urun_beden'] ?>" class="form-control col-md-7 col-xs-12" name="urun_beden" placeholder="Ürünün Bedenini Giriniz" type="text">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_marka">Marka
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="urun_marka" value="<?php echo $Urun['urun_marka'] ?>" class="form-control col-md-7 col-xs-12" name="urun_marka" placeholder="Ürünün Markasını Giriniz" type="text">
                          </div>
                        </div>

                   
  
                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success"><?php echo($_GET['id']>0?'Güncelle':'Ekle') ?></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php
            include "Alt.php";
        ?>
