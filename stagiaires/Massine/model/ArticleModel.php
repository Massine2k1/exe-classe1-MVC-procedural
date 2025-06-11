<?php
# model/ArticleModel.php
function addArticle(PDO $conn, array $datas, int $iduser): bool

{
    $sql = "INSERT INTO `article` (`title`,`slug`,`articletext`,`articledatecreated`, `articlepublished`,`user_iduser`) VALUES (?,?,?,?,?,?);";
    $query = $conn->prepare($sql);

    if (isset($datas['articlePublished'])) {
        $isPublished = 1;
        $datePublished = $datas['articledatepublished'];

        if (empty($datePublished)) {
            $datePublished = date("Y-m-d H:i:s");
        } else {
            $datetime = strtotime($datePublished);
            $datePublished = date("Y-m-s H:i:s", $datetime);
        }
    } else {
        $isPublished = 0;
        $datePublished = null;
    }


    $title = htmlspecialchars(strip_tags(trim($datas['articletitle'])));
    $text = htmlspecialchars(strip_tags(trim($datas['articletext'])));
    $slug = $title;

    if (empty($title) || empty($text)) return false;

    try {
        $query->execute([$title, $slug, $text, $datePublished, $isPublished, $iduser]);
        return true;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

function getArticlePublished(PDO $conn): array

{
    $sql = "
            SELECT a.`idarticle`, a.`title`, LEFT(a.`articletext`,290) AS article_text , a.`articledatecreated`, a.`articledatepublished`,a.`articlepublished`,
        u.login, u.username
        FROM article a
        INNER JOIN `user` u
        	ON u.iduser=a.user_iduser
        WHERE a.`articlepublished`=1
        ORDER BY a.`articledatepublished` DESC;
    ";

    try {
        $query = $conn->query($sql);
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}
