 <?php
# controller/PublicController.php
if(isset($_GET["pageChanger"]) && $_GET["pageChanger"]==="connexion"){
    if(isset($_POST["userlogin"],$_POST["password"])){
        $connect = connectUser($db,$_POST['userlogin'],$_POST['password']);

        if($connect===true){
            header("Location: ./");
            exit();
        }else{
            $errorConnect = "Login et/ou mot de passe incorrectes !";
        }
    }
    
    require "../view/connexion.html.php";

}elseif(isset($_GET["pageChanger"]) && $_GET["pageChanger"]==="inscription"){
    if(isset($_POST['login'],$_POST['username'],$_POST['userpwd'],$_POST['email'])){
        $register = registerUser($db, $_POST);

        if($register){
            $connect = connectUser($db,$_POST['login'],$_POST['userpwd']);
            if($connect){
                header('Location: ./');
                exit();
            }

        }else{
            $errorRegister = "Veuillez compléter chaque entrée du formulaire";
        }
    }

    require "../view/inscription.html.php";
    

}