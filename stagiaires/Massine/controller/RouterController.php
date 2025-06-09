<?php
# controller/PrivateController.php
require "../model/ArticleModel.php";
require "../model/UserModel.php";


if(!isset($_GET["pageChanger"])){
  require "../view/homepage.html.php";  
}elseif ($_GET["pageChanger"]==="about") {
    require "../view/about.html.php";
}

if(isset($_SESSION["username"])){
    require "PrivateController.php";
}else{
    require "PublicController.php";
}
