<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>OlayHaber</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/hakkimizda.css"/>
	<script type="text/javascript" src="Js/jquery.js"> </script>
	
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
<div class="ustserit">
</div>
<div class="logo">
<img src="Images/logo4.png"   width="210" height="125px" alt="" /></div>
<div class="soslogo">
<div class="facebook"><a href="https://tr-tr.facebook.com/"  target="_blank"><img src="Images/facebook.png" alt="" /></a></div>
<div class="twitter"><a href="https://twitter.com/login?lang=tr"  target="_blank"><img src="Images/twitter.png" alt="" /></a></div>
<div class="Instagram"><a href="https://www.instagram.com/?hl=tr"  target="_blank"><img src="Images/Instagram.png" alt="" /></a></div>

<div class="google"><a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"  target="_blank"><img src="Images/google.png" alt="" /></a></div>
<div class="youtube"><a href="https://www.youtube.com/?hl=tr&gl=TR"  target="_blank"><img src="Images/youtube.png" alt="" /></a></div>
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
<p><br /></p>

<br /> 
<br />
<p> </p>


  <h2 style="color:#D60919; margin-bottom:0px; margin-left:500px;  margin-top:20px;">HAKKIMIZDA</h2>
 OlayHaber.org; Güncel, Politika, Spor, Magazin, Kültür ve Sanat
	Dış Haberler ve diğer tüm kategorilerde güncel haber sunmak ve internet 
	kullanıcısının habere ulaşmasını</br> kolaylaştırmak  için oluşturulmuş geniş kapsamlı 
	bir haber portalıdır.

<h2 style="color:#D60919; margin-left:500px;">İLKELERİMİZ</h2> 

<h3 style="margin-left:0px; margin-bottom:0px;">Tarafsız Habercilik</h3>itemizde yayınlanan haberlere konu olan olaylara veya haberlerde adı geçen kişilere 
tam bir tarafsızlık içinde yaklaşmaktayız. Biz haberi okura ulaştıran "aracı" olarak, hiç <br /> bir haberin anlamını 
değiştirmemeyi ve hiç bir haberi manipüle etmemeyi ilke edinmiş bulunuyoruz.
<br />
 <h3 style="margin-left:0px; margin-bottom:0px;">Mimiksiz Habercilik </h3>Okurlarımıza sunduğumuz haberlerin içeriğinin "iyi haber / kötü haber", "müjdeli haber / kara haber" olması ile
ilgilenmiyoruz. Haberi sunarken, okura "şimdi sevinmelisin" <br />veya "şimdi üzülmesin" havası ile sunmuyor; yalnızca gerçeği, yalnızca olanları, 
 aktarıyoruz. Bir haberin okurda ne tür duygular uyandıracağı okurun karar vereceği bir konudur.
 <br />

<h3 style="margin-left:0px; margin-bottom:0px;">Açıklık</h3>Herhangi bir gerçeğin ve herhangi bir olayın kenara itilmemesi, bilinçli veya bilinçsiz bir şekilde minik puntolarla bir kenara <br />
 atılarak gözden saklanmaması gerektiğini savunuyoruz. Her ne olduysa ve her ne olay haber niteliği taşıyorsa bizim konumuzdur ve okurun bunu bilmeye <br />
 öğrenmeye hakkı vardır. Hiç bir haberi saklamayacağız, küçültmeyeceğiz, gözden kaçırmayacağız. 
 <br />

<h3 style="margin-left:0px; margin-bottom:0px;">Hüküm Veren Değil, Postacı Habercilik </h3> Bizler, haberi aktaran kişiler olarak görevimizin; okurları yönlendirmek veya habere konu olay ile ilgili <br />
girişimlerde bulunmak olmadığını düşünüyoruz. Daha açık bir ifade ile, ne Türkiye'yi yöneten herhangi bir kişi veya kurumu etkilemeyi, ne de halkı <br />
 haberin gücünü kullanarak yönlendirmeyi düşünmüyoruz. Bizler postacıyız. Görevimiz postayı alıcısına zamanında ulaştırmaktır.  <br />
 Bunun dışında "halkı aydınlatmak", "halka yol göstermek", "hükumeti yola getirmek", "toplumu düzeltmek" gibi görevlerimiz yoktur.
<br />

	  <footer >
	  <div class="footer">
	  <nav>
	  <ul>
<li><a href= "index.php">Anasayfa</a></li>
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