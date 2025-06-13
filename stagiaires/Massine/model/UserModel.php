<?php

function connectUser(PDO $connection, string $userLogin, string $userPassword): bool
{
    $userLogin = trim($userLogin);
    $userPassword = trim($userPassword);

    $sql = "SELECT * FROM user WHERE login = ?";
    $query = $connection->prepare($sql);

    try {
        $query->execute([$userLogin]);

        if ($query->rowCount() === 0) return false;
        $user = $query->fetch();
        $query->closeCursor();
        if (password_verify($userPassword, $user['userpwd'])) {
            session_regenerate_id(true);
            $_SESSION = $user;
            unset($_SESSION['userpwd']);
            $_SESSION['connectTime'] = time();
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

function registerUser(PDO $connection, array $datas): bool

{
    $sql = "INSERT INTO user (login,username,userpwd,usermail,uniqid,active,dateinscription) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $query = $connection->prepare($sql);

    $login = htmlspecialchars(strip_tags(trim($datas['login'])));
    $username= htmlspecialchars(strip_tags(trim($datas['username'])));
    
    $hashedPwd = password_hash(trim($datas['userpwd']),PASSWORD_DEFAULT);
    
    $usermail = filter_var($datas['email'], FILTER_VALIDATE_EMAIL);
    $uniqid = uniqid('mvc', true);
    $actif = 1;
    $dateinscription = date('Y-m-d H:i:s');

    try{
        $query->execute([$login,$username,$hashedPwd,$usermail,$uniqid,$actif,$dateinscription]);
        return true;
    }catch(Exception $e){
        die($e->getMessage());
    }
}

function disconnectUser(): bool
{
    session_unset();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    session_destroy();
    return true;
}
