<?php
require_once("model/AvocatModel.php");

function viewAvocatForm(){
    $result = selectSpecialities();
    require_once("views/AvocatInscription.php");
}
function viewAvocatHome(){
    require_once("views/AvocatHome.php");
}
function InsertAvocatAction(){
    insertAvocat();
}

function ViewHome(){
    $result = SelectAvocat();
    require_once("views/UtilisateurHome.php");
}
function viewAvocatProfile(){
    require_once("views/AvocatProfile.php");
}