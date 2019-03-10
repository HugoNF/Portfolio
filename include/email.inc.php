<?php
if(isset($_POST['contact'])){
    $tabErreur = array();
    $email=$_POST["email"];
    $message=$_POST["message"];
    $nom=$_POST["name"];
    $prenom=$_POST["surname"];


    if($email == ""){
        array_push($tabErreur,"Entrez votre email");
    }
    if($nom == ""){
        array_push($tabErreur,"Entrez votre nom");
    }
    if($prenom == ""){
        array_push($tabErreur,"Entrez votre prenom");
    }
    if($message == ""){
        array_push($tabErreur,"Entrez votre message");
    }

    if(count($tabErreur)!=0) {
        $message = "<ul>";
        for ($i = 0; $i < count($tabErreur); $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);
        include("include/formEmail.php");
    }else {
        //$to      = '16978@csmrouen.net';


        $headers = 'From: me@example.com' . "\r\n" .
            'Reply-To: 16978@csmrouen.net' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($prenom, $nom, $email, $message, $headers);

    }
} else {
    include("include/formEmail.php");
}