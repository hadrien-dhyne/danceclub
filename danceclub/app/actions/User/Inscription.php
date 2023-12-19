<?php
if($action==="inscription"){
    //tableau qui donne les condition a verifier pour chaque champ
    $errors = Form($_POST,[
        "nom"=> ["required"],
        "prenom"=> ["required"],
        "dateDeNaissance"=> ["required"],
        "email"=> ["required"],
        "username"=> ["required"],
        "mdp"=> ["required"],
        "mdpverif"=> ["required"],
    ]);
    
    if(empty($errors)) {
        $data = formValidation($_POST);
        // check si c'est un email valide
        if (filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                    // verifier si l'email est pris
            $user = getOneUserByEmail($data['email']);
            if(!$user) {
                // verifier si les mot de passe sont correspondent
                if($data["mdp"]===$data["mdpverif"]){
                    $data['mdp'] = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
                    addUser($data);
                    $_SESSION['user'] = $data;
                    header("location: index.php?logged");
                }
                else{
                    $errors['mdp'] = "les mots de passe doivent etre identique";
                }
            } else {
                $errors['email'] = "Adresse email déjà prise";
            }

        }else{
            $errors['email'] = "email non valide";
        }
    } 

}
?>