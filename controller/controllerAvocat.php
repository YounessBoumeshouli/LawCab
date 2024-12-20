<?php
require_once("model/AvocatModel.php");

function viewAvocatForm(){
    $result = selectSpecialities();
    require_once("views/AvocatInscription.php");
}
function viewAvocatHome(){
    $result = reservationsAvocat();
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
    $result = AvocatInformations();
    $result1 = afficherDisponibility();
    require_once("views/AvocatProfile.php");
}
function updateDisponibility(){
    updateDis();
}