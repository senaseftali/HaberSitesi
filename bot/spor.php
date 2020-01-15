 <?php
function rssoku2() 
{   
    $feed = file_get_contents("https://www.cnnturk.com/feed/rss/spor/news<>");
    $xml= new SimpleXMLElement($feed);
    $sayac="1";
    // Okuma sınırı
    $limit="1";
    foreach ($xml -> channel -> item as $veri){	
        if ($sayac <= $limit){ 
        $desc= $veri -> description;
        $desc=substr($desc,0,150);
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
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
        <title></title>
				
        
			<script type='text/javascript'>
$(document).ready(function() {
$('.spor').load('bot/spor.php');
var refreshId = setInterval(function() {
$('.spor').load('bot/spor.php?randval='+ Math.random());
}, 10000); // 10 saniyede bir verileri çek
});

</script>
		  </head>
        <body>
       <div class='konular'>
       <div class='baslik'> <span>$baslik</span>   </div>
		<span><img src='".$resim."' alt=\"$title\" height='150' width='250'></span>
		<p>$aciklama<a href='$link' target='_blank'>devamını oku</a></p>  
		</div>
	 <div style='float:right;' class='spor'> 
	 </div>
       </div>
          </body>
        </html>
     
        ";
         
        }
    $sayac++;
    }
}
rssoku2();
?>