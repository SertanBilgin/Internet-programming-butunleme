<?php
        include "Ust.php";
       
       $gelen = $_POST["arama"];
if($gelen == null){
header("location:index.php");
}
$cek = $db->query("select * from urun where urun_adi like '%$gelen%' ",PDO::FETCH_ASSOC);
if($cek->rowCount()){
foreach($cek as $kayit){
echo '
<div class="post excerpt ">
<header>
<div class="bubble"><a href="#">'.$kayit['urun_gosterilme'].'</a></div>
<h2 class="title">
<a href="detay.php?id='.$kayit['urun_id'].'" rel="bookmark">'.$kayit['urun_adi'].'</a>
</h2>
<div class="post-info">
<br><br>
<time> <b>Görüntülenme Sayisi :</b> '.$kayit['urun_gosterilme'].'</time>
<span class="thecategory"><a href="sayfa.php?al='.$kayit['urun_kategori_id'].'"><b>Kategori :</b>'.$kayit["urun_kategori_id"].' | </a></span>
</div>
</header><!--.header-->
<div class="post-content image-caption-format-1">
<a href="#" rel="nofollow" id="featured-thumbnail">
<div class="featured-thumbnail"><img src="https://reimg-teknosa-cloud-prod.mncdn.com/mnresize/600/600/productimage/785353658/785353658_0_MC/55939854.png'.$kayit['urun_fiyat'].'" class="oval" height="150px" width="150px"></div> </a>
<p>'.$kayit['urun_aciklama'].'</p>
<p class="more"><a href="UrunDetay.php?id='.$kayit["urun_id"].'">Detaylı Bilgi İçin Tıklayınız</a>
</p>
</div>
';
}
}
include "alt.php    "
?>