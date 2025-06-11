 <?php
# controller/PublicController.php
if(isset($_GET["pageChanger"]) && $_GET["pageChanger"]==="connexion"){
    if(isset($_POST["userlogin"],$_POST["password"])){
        $connect = connectUser($db,$_POST['userlogin'],$_POST['password']);

        if($connect===true){
            header("Location: ./");
            exit();
        }else{
            $error = "Login et/ou mot de passe incorrectes !";
        }
    }
    
    require "../view/connexion.html.php";
}