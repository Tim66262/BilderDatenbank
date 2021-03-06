<?php
/*
 *  @autor Michael Abplanalp
 *  @version März 2018
 *  Dieses Modul beinhaltet Funktionen, welche die Anwendungslogik implementieren.
 */

/*
 * Beinhaltet die Anwendungslogik zum Login
 */
function login() {
  // Template abfüllen und Resultat zurückgeben
    if(isset($_POST['login'])){
        userLogin($_POST);
        setValues($_POST);
        
    }  
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" );
   
}

function access() {
    // Template abfüllen und Resultat zurückgeben
    if(isset($_POST['login'])){
        userLogin($_POST);
        setValues($_POST);
        
    }
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" );
    
}

function public_gallery() {
    // Template abfüllen und Resultat zurückgeben
    if(isset($_POST['login'])){
        userLogin($_POST);
        setValues($_POST);
        
    }
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" );
    
}

function myGalerie() {
    // Template abfüllen und Resultat zurückgeben
    if(isset($_POST['login'])){
        userLogin($_POST);
        setValues($_POST);

    }
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" );

}

function galerie() {
    // Template abfüllen und Resultat zurückgeben
    if(isset($_POST['login'])){
        userLogin($_POST);
        setValues($_POST);

    }
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" );

}
/*
 * Beinhaltet die Anwendungslogik zur Registration
 */

function registration() {
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" );
    $meldung = "";
    $email = "";
    $passwort = "";
    if (isset($_POST['email']) && isset($_POST['passwort'])) {
            $_SESSION['uid'] = $uid;
            $entryId=getMaxEntryId($uid);
            header("Location:index.php?function=entries_private&uid=$uid&eid=$entryId");

            $meldung = "Login-Daten nicht richtig... bitte nochmals versuchen oder registriere dich.";
            $email = $_POST['email'];
            $passwort = $_POST['passwort'];
    }

function registration() { 
    $fehlermeldung = "";
    if(isset($_POST['register'])){
        $fehlermeldung = checkRegisterInput();
        if(strlen($fehlermeldung) > 0){
            setValue("meldung", $fehlermeldung);
            setValues($_POST);
        }else{
          addUser($_POST);
        }
    }
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" ); 
}
function addGalerie() {
    $fehlermeldung = "";
    if(isset($_POST['register'])){
        $fehlermeldung = checkRegisterInput();
        if(strlen($fehlermeldung) > 0){
            setValue("meldung", $fehlermeldung);
            setValues($_POST);
        }else{
            addUser($_POST);
        }
    }
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" );
}
function addPicture() {
    $fehlermeldung = "";
    if(isset($_POST['register'])){
        $fehlermeldung = checkRegisterInput();
        if(strlen($fehlermeldung) > 0){
            setValue("meldung", $fehlermeldung);
            setValues($_POST);
        }else{
            addUser($_POST);
        }
    }
    setValue("phpmodule", $_SERVER['PHP_SELF']."?id=".getValue("func"));
    return runTemplate( "../templates/".getValue("func").".htm.php" );
}

function checkRegisterInput(){
    if(!checkEmpty(getPost('email'))&&!checkEmpty(getPost('password'))&&!checkEmpty(getPost('repassword'))&&!checkEmpty(getPost('nickname'))){
        $fehlermeldung =   "Bitte fuelle die felder aus!" ;
    }else if(!checkEmpty(getPost('email'))){
        $fehlermeldung =  "Email feld darf nicht leer sein" ;
    }
    else if(!checkEmpty(getPost('password',6))){
        $fehlermeldung =  "Passwort muss mindensten 6 zeichen enthalten" ;
    }else if(getPost('password')!=getPost('repassword')){
        $fehlermeldung =   "Passwort muss gleich sein!" ;
    }else if(!checkEmpty(getPost('password'))){
        $fehlermeldung =   "Passwort muss eigegeben werden!" ;
    }else if(!checkEmpty(getPost('repassword'))){
        $fehlermeldung =   "Passwort wiederhjolung muss eigegeben werden!" ;
    }else if(!checkEmpty(getPost('nickname'))){
        $fehlermeldung =  "Nickname darf nicht leer sein";
    }else if(selectAllEmails(getPost('email'))){
        $fehlermeldung =  "Die Email ist bereits vergegeben" ;
    } else{
        $fehlermeldung = '';
    }
    return $fehlermeldung; 
}

function ausloggen(){
    $_SESSION = array();
    session_destroy();
}
?>