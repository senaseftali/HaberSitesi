<?php
function rssoku1() 
{   
    $feed = file_get_contents("https://www.cnnturk.com/feed/rss/magazin/news");
    $xml= new SimpleXMLElement($feed);
    $sayac="1";
    // Okuma sınırı
    $limit="30";
    foreach ($xml -> channel -> item as $veri){	
        if ($sayac <= $limit){ 
        $desc= $veri -> description;
        $desc=substr($desc,0,400);
        $link = $veri -> link;
        $title= $veri -> title;
		$image= $veri -> image;
$baslik = str_replace("ÄŸ", "ğ", $title); 
$baslik = str_replace("Äz", "Ğ", $baslik); 
$baslik = str_replace("Ã¼", "ü", $baslik); 
$baslik = str_replace("Ãœ", "Ü", $baslik); 
$baslik = str_replace("ÅŸ", "ş", $baslik); 
$baslik = str_replace("Åz", "Ş", $baslik); 
$baslik = str_replace("Ä°", "İ", $baslik); 
$baslik = str_replace("Ä±", "ı", $baslik); 
$baslik = str_replace("Ã¶", "ö", $baslik); 
$baslik = str_replace("Ã–", "Ö", $baslik); 
$baslik = str_replace("Ã§", "ç", $baslik); 
$baslik = str_replace("Ã‡", "Ç", $baslik); 
$baslik = str_replace("â€“", "-", $baslik);
$baslik = str_replace("â€˜ ", "'", $baslik);
$baslik = str_replace("â€²", "'", $baslik);
$baslik = str_replace("?", "ş", $baslik);
$baslik = str_replace("?", "ü", $baslik);
 
$aciklama = str_replace("ÄŸ", "ğ", $desc); 
$aciklama = str_replace("Äz", "Ğ", $aciklama); 
$aciklama = str_replace("Ã¼", "ü", $aciklama); 
$aciklama = str_replace("Ãœ", "Ü", $aciklama); 
$aciklama = str_replace("ÅŸ", "ş", $aciklama); 
$aciklama = str_replace("Åz", "Ş", $aciklama); 
$aciklama = str_replace("Ä°", "İ", $aciklama); 
$aciklama = str_replace("Ä±", "ı", $aciklama); 
$aciklama = str_replace("Ã¶", "ö", $aciklama); 
$aciklama = str_replace("Ã–", "Ö", $aciklama); 
$aciklama = str_replace("Ã§", "ç", $aciklama); 
$aciklama = str_replace("Ã‡", "Ç", $aciklama); 
$aciklama = str_replace("â€“", "-", $aciklama);
$aciklama = str_replace("â€˜ ", "'", $aciklama);
$aciklama = str_replace("â€²", "'", $aciklama);        
$aciklama = str_replace("?", "ş", $aciklama); 
$aciklama = str_replace("?", "ü", $aciklama); 

$resim = str_replace("file://","http://",$image);

echo "
    <html>
        <head>
		
        <title></title>
		<style >
		.konular { 
	width:800px;
	
}
.konular hr{margin-top:0px;}
.konular  h2 { 
 color:#D60919;
	font-weight:bold;
	font-size:20px;
margin-top:0px;
margin-bottom:0px;
margin-left:30px;
	text-decoration:none}
.konular img {cursor:pointer;
	float:left;
	padding:3px;
	margin-left:30px;
	margin-top:0px;
}
.konular p{  width:900px;
font-size:20px;
 padding-top:0px; }
 
.konular a{ color:#D60919;}
 
		</style>
		  </head>
        <body>
		
       <div class='konular'>
	  
       <div class='baslik' > <h2> $baslik</h2>   </div>
		<span><img src='".$resim."' alt=\"$title\" height='300' width='500'></span>
		<p>$aciklama  <a href='$link' target='_blank'>devamını oku</a></p>  
	    	<br /> 
		<br />
		<br />
		<br />
		<hr width='120%'  align='left' >
	
		</div>
	 <div style='float:right;' class='konular'> 
	 </div>
       </div>
          </body>
        </html>
     
        ";
         
        }
    $sayac++;
    }
}
rssoku1();
?>