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

/*
 * Beinhaltet die Anwendungslogik zur Registration
 */
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