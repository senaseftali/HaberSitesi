<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php include("ip.php");?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OlayHaber</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/styles.css"/>
	<script type="text/javascript" src="Js/jquery.js"> </script>
		
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	

 <?php  include("veritabaniekleme.php"); ?>
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
 <div class="slider">
 
	
<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<?php
 //$baglanti = new PDO("mysql:host=localhost;dbname=sitem", "root", "");
 $baglanti= new PDO("mysql:host=localhost;dbname=o121620151045",'o121620151045','IrWHE22fcL3j9');
        $baglanti->exec("SET NAMES utf8");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	   $query = $baglanti->query("SELECT * FROM konular", PDO::FETCH_ASSOC);
 

?>
	<div id="wowslider-container1">
	<div class="ws_images">
	<ul>
	<?php  
	if ( $query->rowCount() ){ 	 

    foreach( $query as $row ){ 

     
?>
		<li> <a href="<?php echo $row['link'];?> " target="_blank"><img src="<?php echo $row['resim'];?>" alt="<?php echo $row['konu_baslik']?>" title="<?php echo $row['konu_baslik']?>" id="wows1_0"/></a></li>
	
			<?php }
	}?>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="                                       "><span><img src="" alt="                                       "/>1</span></a>
		<a href="#" title="                                         "><span><img src="" alt="                                         "/>2</span></a>
		<a href="#" title="                                 "><span><img src="" alt="                                 "/>3</span></a>
		<a href="#" title="                                   "><span><img src="" alt="                                   "/>4</span></a>
		<a href="#" title="                             "><span><img src="" alt="                             "/>5</span></a>
		<a href="#" title="                                     "><span><img src="" alt="                                     "/>6</span></a>
		<a href="#" title="                             "><span><img src="" alt="                             "/>7</span></a>
		<a href="#" title="                             "><span><img src="" alt="                             "/>8</span></a>
		<a href="#" title="                                "><span><img src="" alt="                                "/>9</span></a>
		<a href="#" title="                               "><span><img src="" alt="                               "/>10</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href=""></a> </div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	
	
	  <div class="kckhaber">
	  <br />
	  	 <div class="siyaset" > 
		 
	<h2>Türkiye</h2> 
	<hr />
	 	 <?php include("bot/turkiye.php") ?>

	  </div>
	  <br />
	  <div class="ekonomi" ><h2>Ekonomi</h2> 
	<hr />
	 <?php include("bot/ekonomi.php") ?>
</div>


	  <div  class="spor" > <br />
	<h2>Spor</h2> 
	<hr />
	 <?php include("bot/spor.php") ?>
	 	</div>
	
	 <div class="magazin" ><br /><h2>Magazin</h2> 
	<hr />
		  <?php include("bot/magazin.php") ?>
</div>
	
	 <br />
	 <hr  width="90%" >
	 <div class="altkisim" >
	<div class="konular2"  >  
     <?php   include("bot/sondakikaminik.php") ?>  
	
	</div>
	 <hr   width="90%" >
	<div class="althaber2">
		 <?php   include("bot/bilim.php") ?>   
	</div>
	 <hr  width="90%" >
		<div  class="althaber3">
		 <?php   include("bot/yasam.php") ?>  
	
	</div>
	 <hr  width="90%" >
	<div  class="althaber4">
		<?php   include("bot/saglik.php") ?>  
	
	</div>
	 <hr  width="90%" >
	<div  class="althaber5">
		  <?php   include("bot/kultursanat.php") ?> 
	
		
	</div>
	</div>
<footer>
	  <div class="footer">
	  <nav>
	  <ul>
<li><a href= "index.php">Anasayfa</a></li>
<li ><a href= "siyaset.php">Gündem</a></li>
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
