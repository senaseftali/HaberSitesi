

	 <?php
function rssoku9() 
{   
    $feed = file_get_contents("https://www.cnnturk.com/feed/rss/dunya/news");
    $xml= new SimpleXMLElement($feed);
    $sayac="1";
    // Okuma sınırı
    $limit="5";
    foreach ($xml -> channel -> item as $veri){	
        if ($sayac <= $limit){ 
        $desc= $veri -> description;
		 $desc=substr($desc,0,90);
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
 

$resim = str_replace("file://","http://",$image);




echo "
    <html>
        <head>
		
        <title></title>

		  </head>
        <body>
       <div class='konular2'>
		<span><img src='".$resim."' alt=\"title\" height='100' width='200'></span>
		<a href='$link'  target='_blank'><p >$baslik</p> </a> 
		</div>
       </div>
          </body>
        </html>
     
        ";
         
        }
    $sayac++;
    }
}
rssoku9();
?>


