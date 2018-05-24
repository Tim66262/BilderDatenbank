<?php
/*
 *  @autor Michael Abplanalp
 *  @version Februar 2018
 *  Dieses Modul beinhaltet sämtliche Datenbankfunktionen.
 *  Die Funktionen formulieren die SQL-Anweisungen und rufen dann die Funktionen
 *  sqlQuery() und sqlSelect() aus dem Modul basic_functions.php auf.
 */
 function addUser($postpass) {
       $sql = "insert into benutzer (nickname, email, passwort)
          values ('".$postpass['nickname']."','".$postpass['email']."','".md5($postpass['password'])."')";        
         sqlQuery($sql);
         setValue("meldung", "Dein registrierung war erfolgreich!!!! Logen Sie sich jetzt ein und genissen sie unser Bilder!" );
         redirect('login');
 }
 //reine DB Comunication
 function userLogin($postpass){
     $sql = "SELECT * FROM benutzer WHERE email = '". $postpass['email'] . "'
    AND passwort =  '" . md5($postpass['password']) . "'";
     $login = sqlSelect($sql);
    // $msg = "eingelogt";
     if(empty($login)){
         setValue("meldung","Email oder Password sind nicht korrekt, bitte versuchen sie es nochmal!") ;
     } else {
         
         setValue("meldung", "" );
         setValue("bid", $login[0]['ID']);
         //session_start();
         $_SESSION['bid'] = $login[0]['ID'];
         //echo '<script type="text/javascript">alert("Tada")</script>';
     }
 }
 
 function selectAllEmails($email){
     $sql="SELECT email FROM benutzer WHERE email ='" . $email . "'";
     if(sqlSelect($sql) == ""){
         return false;
     }
     else{
         return true;
     }
 }
 
 
?>