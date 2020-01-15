

<?php 

   include("baglan.php");
   
   sleep(1);

  $value = $_POST["value"];
  
  if(!$value){
	  
	
	  
  }else {
	  
	   $query = $db->query("SELECT * FROM konular", PDO::FETCH_ASSOC);
	$query= $db->prepare("select * from konular where konu_baslik like ?");
	  $query->execute(array("%".$value."%"));
 if ( $query->rowCount() ){ 	 

    foreach( $query as $row ){ 
          echo  "<a href=".$row['link']." target=\"_blank\" >".$row['konu_baslik']."</a><br />";
	  
     }

		   
	   }else {
		   
		   echo " sonuc bulunamadı";
		   
	   }
	  
  }


?>