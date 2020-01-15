<!DOCTYPE HTML>
<html lang="en-US">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OlayHaber</title>
	<link rel="stylesheet" type="text/css" href="Css/hakkimizda.css"/>
	<script type="text/javascript" src="Js/jquery.js"> </script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="Js/jquery.validate.js"></script>
<script src="Js/jquery.placeholder.js"></script>
<script src="Js/jquery.form.js"></script>
<link rel="stylesheet" type="text/css" href="Css/iletisim.css"/>
<script>
$(function(){
$('#contact').validate({
submitHandler: function(form) {
    $(form).ajaxSubmit({
    url: 'process.php',
    success: function() {
    $('#contact-form').append("<h3  class='thanks' style='margin-left:500px; color:#296829; margin-top:15px;'>Mesajınız ilgili birime ulaşmıştır.En kısa zamanda size geri döneceğiz.</h3>")
	 $('.thanks').hide(7000);
    }
    });
    }
});         
});
</script>
 <script type="text/javascript">  
  
    $(function(){
         	  
	   $("#sonuc").hide();
	   
	   $("input[name=ara]").keyup(function(){
		   
		   var value  = $(this).val(); 
		   var konu   = "value="+value;
		   
		   $.ajax({
			   
			   type: "post",
               url:   "ajax.php",
               data: konu, 
			   beforeSend: function(){
				   
				  $("#sonuc").fadeIn().html('<img  src="http://i.hizliresim.com/Eg605Z.gif"  width="20" height="20" />'); 
				   
			   },
			   
               success: function(sonuc){
				   
				  $("#sonuc").show().html(sonuc); 
				   
			   }			   
			   
			   
		   });
		   
		   
		   
	   });
	   
	   
		
		
	});
  
  
  </script>	
</head>
<body bgcolor="#F9F9F9">
<?php    $ip=$_SERVER['REMOTE_ADDR'];?>
<div class="ustserit">
</div>

<div class="logo">
 <?php include("baglan.php");?>
<img src="Images/logo4.png"   width="210" height="125px" alt="" /></div>
<div class="soslogo">
<div class="facebook"><img src="Images/facebook.png" alt="" /></div>
<div class="twitter"><img src="Images/twitter.png" alt="" /></div>
<div class="Instagram"><img src="Images/Instagram.png" alt="" /></div>
<div class="Instagram"><img src="Images/Instagram.png" alt="" /></div>
<div class="google"><img src="Images/google.png" alt="" /></div>
<div class="youtube"><img src="Images/youtube.png" alt="" /></div>
</div>

<header>
<ul>
<li><a rel="" href= "index.php">Anasayfa</a></li>
<li ><a  href="siyaset.php">Gündem</a></li>
<li><a  href= "ekonomi.php">Ekonomi</a></li>
<li><a  href= "spor.php">Spor</a></li>
<li><a  href= "magazin.php">Magazin</a></li>
<li><a href= "hakkimizda.php">Hakkımızda</a></li>
<li><a  href= "iletisim.php">İletişim</a></li>
 <form >
<li style="margin-top:25px; padding-left:10px;"><input type="search" name="ara" style="background:#ededed url(Images/ara.png) no-repeat 9px center; " size="10px;" placeholder="ARA"></li> </form>
	
</ul>
</header>
 <div id="sonuc">  </div>	
<p></p>
<br />
<h1 style="margin-top:80px; margin-left:10px; color:#D60919; font-size:30px;">İletişim</h1>
<p>Bize ulaştırmak istediğiniz mesajı yandaki kutuya yazıp <br /> "Mesajı Gönder" butonuna basınız. Yazacağınız mesaj <br />sistemimiz tarafından ilgili kişiye yönlendirilecektir.</p>
<h5>YASAL BİLDİRİMLER İÇİN</h5>
Muhatap	: 	Mesul Müdür Sena Şeftali</br>
Adres	: 	Örnek Mah. Hasan Çelebi Sk. No:23 Ataşehir/İSTANBUL
<div class="konum">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.2820887901403!2d29.08378605127272!3d40.99719858280947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac7d0d85cedf5%3A0x550c8e2e35971df5!2zw5ZybmVrIE1haGFsbGVzaSwgSGFzYW4gw4dlbGViaSBTay4gTm86MjMsIDM0NzA0IEF0YcWfZWhpci_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1514380985397" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>

<div id="contact-form">	

<form id="contact" method="post" action="">
<fieldset>	

<label for="name">*Ad Soyad</label>
<input type="text" name="name" placeholder="Tam Adınız Soyadınız" title="Lütfen ad soyad girin" class="required">

<label for="email">*E-Posta</label>
<input type="email" name="email" placeholder="e-posta adresi" title="Lütfen e-posta adresinizi girin" class="required ">

<label for="phone">Telefon</label>
<input type="tel" name="phone" placeholder="örn: (555) 555-5555">

<label for="website" >*Konu</label>
<input type="konu" name="konu" placeholder="Konu giriniz" title="Lütfen konu girin" class="required ">


<label for="message">*Mesajınız</label>
<textarea name="message" placeholder="Mesaj yazınız" title="Lütfen mesaj girin" class="required" ></textarea>

<input  type="submit" name="submit" class="button" id="submit" value="Mesajı Gönder" />
<label for="uyari" style="float:right "> * Zorunlu Alandır</label>
</fieldset>
</form>
</div>

<script src="js/modernizr-min.js"></script>
<script>
if (!Modernizr.input.placeholder){
	$('input[placeholder], textarea[placeholder]').placeholder();
}
</script>
 

	<br />
	<br />
	<br />

	  <footer >
	  <div class="footer" >
	  <nav>
	  <ul>
<li><a href= "indeks.php">Anasayfa</a></li>
<li ><a href="siyaset.php">Gündem</a></li>
<li><a href= "ekonomi.php">Ekonomi</a></li>
<li><a href= "spor.php">Spor</a></li>
<li><a href= "magazin.php">Magazin</a></li>
<li><a href= "hakkimizda.php">Hakkımızda</a></li>
<li><a href= "iletisim.php">İletişim</a></li>
</ul>
	  </nav>
	  <p>Copyright ©Sena Şeftali</p>
	  </div>
	  </footer>

</body>
</html>