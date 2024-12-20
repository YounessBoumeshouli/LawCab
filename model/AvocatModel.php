<?php
session_start();
function Connexion(){
    
    $dsn = "pgsql:host=localhost;port=5432;dbname=LawCab;";
$user = "postgres";
$password = "Youness";

try {
    $pdo = new PDO($dsn, $user, $password);
   
    return $pdo;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
}
function insertAvocat() {
    $pdo = Connexion();  
    
  
    $nom = $_POST["nom"];
    $matricule = $_POST["matricule"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $numerotelephone = $_POST["numerotelephone"];
    $idspécialité = $_POST["idspecialite"]; 
    $role = "Avocat";
    

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    

    $query = "INSERT INTO public.user ( matricule, full_name, age, email, role, motdepasse,numerotelephone, idspecialite) 
              VALUES ( :matricule, :nom, :age, :email, :role, :password,:numerotelephone, :idspecialite)";
    
    $stmt = $pdo->prepare($query);
    

    $stmt->bindParam(':matricule', $matricule, PDO::PARAM_STR);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':age', $age, PDO::PARAM_INT);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':role', $role, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    $stmt->bindParam(':numerotelephone', $numerotelephone, PDO::PARAM_STR);
    $stmt->bindParam(':idspecialite', $idspécialité, PDO::PARAM_INT);  
    try {
        $stmt->execute();
        echo "Avocat added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


function SelectAvocat(){
    $pdo = Connexion();  
    $stmt = $pdo->query("select * from public.user where role = 'Avocat' ");
    return $stmt;
}
function selectSpecialities(){
    $pdo = Connexion();
    $stmt = $pdo->query("select * from public.specialite");
    return $stmt;
}
function reservationsAvocat(){
    $pdo = Connexion();
  if($_COOKIE["idAvocat"]){
    $mat = $_COOKIE['idAvocat'];
    $stmt = $pdo->prepare("select * from public.reservations where idavocat = :idAvocat");
    $stmt->bindParam(':idAvocat',$mat,PDO::PARAM_STR);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
   
  }
}
function refuseReservation(){
}
function confirmReervation(){

}
function AnnulerReservation(){

}
function ajouterUnAvis(){

}
function AvocatInformations(){
    $pdo = Connexion();  
    if($_COOKIE["idAvocat"]){
        $mat = $_COOKIE['idAvocat'];
        $stmt = $pdo->prepare("select * from public.user u left join public.specialite s on s.idsp = u.idspecialite  where  u.matricule=:matricule");
        $stmt->bindParam(':matricule',$mat,PDO::PARAM_STR);
        $stmt->execute();
       
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
      }
}
function afficherDisponibility(){
    $pdo = Connexion();  
    if($_COOKIE["idAvocat"]){
        $mat = $_COOKIE['idAvocat'];
        $stmt = $pdo->prepare("select * from public.disponibility d where d.idavocat = :idavocat");
        $stmt->bindParam(':idavocat',$mat,PDO::PARAM_STR);
        $stmt->execute();
        
        var_dump($result);
        return $stmt;
      }
}
function updateDis() {
    $pdo = Connexion();
    
    if ($_COOKIE["idAvocat"]) {
        $mat = $_COOKIE['idAvocat'];
        isset($_POST["selectedDates"]) ? $dates = $_POST["selectedDates"] : header("location:index.php?action=AvocatProfile");

        $date = explode(",", $dates);
        $selecedDates = [];

        sort($date);

        echo 'Sorted dates:<br>';
        foreach ($date as $d) {
            echo $d . "<br>";
        }

        echo 'Selected dates:<br>';
        $selecedDates[] = $date[0];
        $j = 1;

        for ($i = 1; $i < count($date) - 1; $i++) {
            if (($date[$i] - $date[$i - 1] > 1) || ($date[$i + 1] - $date[$i] > 1)) {
                $selecedDates[$j] = $date[$i];
                $j++;
            }
        }
        $selecedDates[$j] = $date[count($date) - 1];

        foreach ($selecedDates as $sDate) {
            echo $sDate . "S<br>";
        }

        $year = date('Y');
        $month = date('m');

        for ($i = 0; $i < count($selecedDates); $i += 2) {
            $datedebut = $year . "-" . $month . "-" . $selecedDates[$i];
            $datefin = $year . "-" . $month . "-" . $selecedDates[$i + 1];

            $query = "INSERT INTO public.disponibility (idavocat, datedebut, datefin)
                      VALUES (:idavocat, :datedebut, :datefin)";
            $stmt = $pdo->prepare($query); 
            $stmt->bindParam(':idavocat', $mat, PDO::PARAM_STR);
            $stmt->bindParam(':datedebut', $datedebut, PDO::PARAM_STR);
            $stmt->bindParam(':datefin', $datefin, PDO::PARAM_STR);
            $stmt->execute();
        }
    }
}
