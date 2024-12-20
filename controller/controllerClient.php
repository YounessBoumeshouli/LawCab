<?php
require_once("model/ClientModel.php");
require_once("model/AvocatModel.php");



function ViewForm(){
    require_once("views/UtilisateurForm.php");
}
function ClientReservation(){
    $result = SelectOneAvocat();
    require_once("views/ClientReservation.php");
}
function ClientInscriptionForm(){
    require_once("views/ClientInscriptionForm.php");
}
function ClientInscription(){
    InsertClient();
    ViewForm();
}
function Authentification(){
   $result =  AuthAction();
   if($result){
    header("location:index.php?action=AvocatHome");
   }else{
    header("location:index.php?action=ClientHome");
}}
function ClientHome(){
    $result = SelectAvocat();
    require_once("views/ClientHome.php");
}