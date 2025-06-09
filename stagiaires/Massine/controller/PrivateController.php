<?php
# controller/PublicController.
if(isset($_GET["pageChanger"])){
    if($_GET["pageChanger"]==="deconnexion"){
        $disconnect = disconnectUser();
        if($disconnect){
            header("Location : ./");
            exit();
        }
    }elseif($_GET['pageChanger']==="admin") {
    require "../view/admin.html.php";
    # code...
}
}