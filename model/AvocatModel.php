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
    $stmt->bindParam(':idspecialite', $idspécialité, PDO::PARAM_INT);  // Ensure the column name matches
    
    try {
        $stmt->execute();
        echo "Avocat added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


function SelectAvocat(){
    $pdo = Connexion();  
    $stmt = $pdo->query("select * from public.user");
    return $stmt;
    
}
function selectSpecialities(){
    $pdo = Connexion();
    $stmt = $pdo->query("select * from public.specialite");
    return $stmt;
}
function refuseReservation(){
}
function confirmReervation(){

}
function AnnulerReservation(){

}
function ajouterUnAvis(){

}