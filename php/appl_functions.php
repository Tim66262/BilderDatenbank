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
}
?>