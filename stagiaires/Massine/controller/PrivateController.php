<?php
# controller/PublicController.
if (isset($_GET["pageChanger"])) {
    if ($_GET["pageChanger"] === "deconnexion") {
        $disconnect = disconnectUser();
        if ($disconnect) {
            header("Location:./");
            exit();
        }
    } elseif ($_GET['pageChanger'] === "admin") {
        if (isset($_POST['articletitle'])) {
            $insert = addArticle($db, $_POST, $_SESSION['iduser']);
            if ($insert) {
                header('Location:./?pageChanger=admin');
                exit();
            }
            $error = "Article non inséré <a href='#' onclick='history.go(-1)'>retour au formulaire</a>";
            
        }
        $article = getArticlePublished($db);
        require "../view/admin.html.php";
        # code...
    }
}
