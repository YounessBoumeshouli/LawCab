<?php
require_once("controller/controllerClient.php");
require_once("controller/controllerAvocat.php");
 $action = "action";

if (isset($_GET["action"])) {
    $action = $_GET["action"];
}else{
    $action = "home";
}
switch ($action) {
    case 'formClient':
        ViewForm();
        break;
    case 'ClientReservation':
        ClientReservation();
        break;
    case 'formAvocat':
        ViewForm();
        break;
    case 'viewAvocatForm':
        viewAvocatForm();
        break;
    case 'avocatInscription':
        InsertAvocatAction();
        break;
    case 'AvocatHome':
        viewAvocatHome();
        break;
    case 'AvocatProfile':
        viewAvocatProfile();
        break;
    default:
       ViewHome();
        break;
}
