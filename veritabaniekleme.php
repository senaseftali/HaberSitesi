	
<?php
function rssoku10() 
{   
    $feed = file_get_contents("https://www.cnnturk.com/feed/rss/all/news");
    $xml= new SimpleXMLElement($feed);
    $sayac="1";
    // Okuma sınırı
    $limit="10";
    foreach ($xml -> channel -> item as $veri){	
        if ($sayac <= $limit){ 
        $desc= $veri -> description;
        $desc=substr($desc,0,149);
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
    
			
 
}

     
        }
    $sayac++;
  try {

       // $baglanti = new PDO("mysql:host=localhost;dbname=sitem", "root", "");
	      $baglanti=new  PDO("mysql:host=localhost;dbname=o121620151045",'o121620151045','IrWHE22fcL3j9');
        $baglanti->exec("SET NAMES utf8");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sorgu = $baglanti->prepare("INSERT INTO konular(konu_baslik,resim,link) VALUES(?, ?, ?)");
        $sorgu->bindParam(1,$baslik, PDO::PARAM_STR);
      $sorgu->bindParam(2,$resim, PDO::PARAM_STR);
	     $sorgu->bindParam(3,$link, PDO::PARAM_STR);
     if($sorgu){
	 $son_id=$baglanti->lastInsertId();}
        $sorgu->execute();

       

    } catch (PDOException $e) {
        die($e->getMessage());
    }
	   $baglanti = null; 
         

    }

rssoku10();
?>