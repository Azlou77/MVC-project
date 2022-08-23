<?php
/*
define("WEBROOT",str_replace("index.php", "",$_SERVER["SCRIPT_NAME"]));
define("ROOT",str_replace("index.php", "",$_SERVER["SCRIPT_FILENAME"]));
require (ROOT. "core/model.php");
require (ROOT. "core/controller.php");
$params = explode ("/", $_GET["p"]);
print_r($params);
echo ROOT;
*/
/*
require "Personnage.php";
$cesar= new Personnage("Cesar");

$cesar->regenerer(5);
$cesar->nom="Cesar"; remplace by the constructor


$octave= new Personnage("Octave");
$cesar->attaque($octave);
if($octave->mort()){
    echo "Octave est mort";
}else {
    echo "Octave a survecu avec " . $octave->vie;
}

$octave->vie=0;
var_dump($octave->mort());
$octave->regenerer();
$octave->nom="Octave"; remplace by the constructor
var_dump($cesar->atk);
var_dump($cesar->crier());
var_dump($cesar);
var_dump($octave);

$cesar->setNom ("Caesar");
echo $cesar->getVie();
echo $cesar->getAtk();
echo $cesar->getNom();// access Nom  if private class
*/
require "form.php";
$form= new Form($_POST);
?>
/*
$form = new Form(array("username"=>"Roger"));
var_dump($form);
die();
echo $form->input ("username");
echo $form->input("password");
echo $form->submit();

$form = new Form();
echo $form->input ("age");
echo $form->input ("sexe");
*/

<form action="#" method="post">
    <?php
    echo $form=input("username");
    echo $form=input("password");
    echo $form=inputsubmit();
?>
</form>