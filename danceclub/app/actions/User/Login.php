<?php
if($action==="login"){
    //tableau qui donne les condition a verifier pour chaque champ
    $errors = Form($_POST,[
        "email"=> ["required"],
        "password"=> ["required"],]);


    if(empty($errors)) {

        $data = formValidation($_POST);

        if (filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {

            $logedUser = getOneUserByEmail($data["email"]);

            if( $logedUser){
                    
                        if(password_verify($data["password"],$logedUser[0]['password'])){
                            $_SESSION['user'] = $logedUser[0];
                            header("Location: index.php?logged");
                        }else{
                            $errors[] = "mot de passe incorrecte";
                        }

            }else{
                $errors[] = "pas de compte existent";

            }

        }else{
            $errors['email'] = "email non valide";
        }
    }

}
   


?>
