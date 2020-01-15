<!DOCTYPE HTML>
<html lang="en-US">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<p></p>
	  <br />
<div class="usthr">
	 <hr width='70%'  align='left'></div>
	  	 <div class="siyaset"> 
	 <p> 
	  <?php include( "bot/magazin2.php") ?> </p> 
	 </div>
	 <br />
	 <br />
	  <div class="kckhaber">
	  <h4>
	
	 </h4>
	  </div>
	

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