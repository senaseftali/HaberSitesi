
 <?php
if (isset($_POST['name'], $_POST['email'],$_POST['konu'],$_POST['message'])) {

    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
   
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
	 $konu = trim(filter_input(INPUT_POST, 'konu', FILTER_SANITIZE_STRING));
	  $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    if (empty($name)  || empty($email)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }

    try {

       // $baglanti = new PDO("mysql:host=localhost;dbname=sitem", "root", "");
	   $baglanti = new PDO("mysql:host=localhost;dbname=o121620151045",'o121620151045','IrWHE22fcL3j9');
        $baglanti->exec("SET NAMES utf8");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sorgu = $baglanti->prepare("INSERT INTO kayit(kisi_adi,kisi_eposta,kisi_konu,kisi_mesaj) VALUES(?, ?, ?, ?)");
        $sorgu->bindParam(1, $name, PDO::PARAM_STR);
        $sorgu->bindParam(2, $email, PDO::PARAM_STR);
		$sorgu->bindParam(3, $konu, PDO::PARAM_STR);
		$sorgu->bindParam(4, $message, PDO::PARAM_STR);
		

        $sorgu->execute();

        echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";

    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $baglanti = null;
}

?>


