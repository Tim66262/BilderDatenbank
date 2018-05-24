<?php
/*
 *  @autor Michael Abplanalp
 *  @version März 2018
 *  Dieses Modul definert alle Konfigurationsparameter und stellt die DB-Verbindung her
 */

// Funktionen
setValue("cfg_func_list", array("public_gallery","access","login","registration"));
// Inhalt des Menus
setValue("cfg_menu_list", array("public_gallery"=>"Public Gallery","access"=>"Access Gallery","login"=>"Login","registration"=>"Registration"));
// Funktionen
setValue("cfg_func_auth_list", array("galerie","myGalerie","addGalerie","addPicture","ausloggen"));
// Inhalt des Menus
setValue("cfg_menu_auth_list", array("myGalerie"=>"Meine Galerie","addGalerie"=>"Galerie hinzufügen","addPicture"=>"Bild Hinzufügen","ausloggen"=>"Logout"));

// Datenbankverbindung herstellen
$db = mysqli_connect("127.0.0.1", "root", "gibbiX12345", "bilderdb");
if (!$db) die("Verbindungsfehler: ".mysqli_connect_error());
setValue("cfg_db", $db);
?>
