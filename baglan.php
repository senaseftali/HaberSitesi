<?php 

try {//$db= new PDO("mysql:host=localhost;dbname=sitem",'root','');
db= new PDO("mysql:host=localhost;dbname=o121620151045",'o121620151045','IrWHE22fcL3j9');
      $db->exec("SET NAMES utf8");
}
catch (PDOExpception $e){
echo $e->getMessage();
}




?>