<?php

function InsertClient(){
    $pdo = Connexion();  
    
  
    $nom = $_POST["nom"];
   
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $numerotelephone = $_POST["numerotelephone"];
   
    $role = "Client";
    

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    

    $query = "INSERT INTO public.user (  full_name, age, email, role, motdepasse,numerotelephone) 
              VALUES (  :nom, :age, :email, :role, :password,:numerotelephone)";
    
    $stmt = $pdo->prepare($query);
    

    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':age', $age, PDO::PARAM_INT);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':role', $role, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    $stmt->bindParam(':numerotelephone', $numerotelephone, PDO::PARAM_STR);
    
    try {
        $stmt->execute();
        echo "Clinet added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
function AuthAction() {
    $pdo = Connexion();  
    $matricule = NULL;
    $prm = PDO::PARAM_NULL;
    $nom = $_POST["nom"];
    $role = "Client";
    $password = $_POST["password"];
    $return = false;
    if (isset($_POST["matricule"]) && !empty($_POST["matricule"])) {
        $role = "Avocat";
        $matricule = $_POST["matricule"];
        $prm = PDO::PARAM_STR;
        $return = true;
    }

    $query = "SELECT * FROM public.user
              WHERE (:matricule::TEXT IS NULL OR matricule = :matricule)
                AND full_name = :nom
                AND role = :role";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':matricule', $matricule, $prm);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':role', $role, PDO::PARAM_STR);

    try {
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($res)) {
            echo "No user found with the provided credentials.";
            header("Location: index.php?action=formClient");
            exit();
        }

        $hashedPassword = $res[0]["motdepasse"];
        if (password_verify($password, $hashedPassword)) {
            echo "Password correct.";
            setcookie('idClient', $res[0]["id"], time() + 3600, "/");
            if($res[0]["role"]=="Avocat"){
                setcookie('idAvocat', $res[0]["matricule"], time() + 3600, "/"); 
            }
           return $return;
        } else {
            echo "Password incorrect.";
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function SelectOneAvocat(){
    $pdo = Connexion();  
    $idAvocat = $_GET["idAvocat"];
    $stmt = $pdo->prepare("SELECT * from public.user where id=:id ");
    $stmt->bindParam(':id',$idAvocat,PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
    return $result;
}
