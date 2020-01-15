<?php $dosya=fopen("bilgi.txt","a+");
$IP_Adresi=$_SERVER["REMOTE_ADDR"];
$Tarayici=$_SERVER["HTTP_USER_AGENT"];
$Tarih=time();
$kaydet=$IP_Adresi."\t".$Tarayici."\t".$Tarih."\n";
fwrite($dosya,$kaydet);
while($oku=fgets($dosya)){
echo $oku."<br/>";
}



?>