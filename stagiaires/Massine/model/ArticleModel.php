<?php
# model/ArticleModel.php
function addArticle(PDO $conn, array $datas,int $iduser): bool

{
    $sql = "INSERT INTO `article` (`title`,`articletext`,`articledatecreated`, `articlepublished`,`user_iduser`) VALUES (?,?,?,?,?);";
    $query = $conn->prepare($sql);
    

}

