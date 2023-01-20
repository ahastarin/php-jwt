<?php   
    ini_set('display_errors', '1');
    require_once __DIR__ . "/vendor/autoload.php";

    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;
    
    $jwt = $_COOKIE["X-USER-ID"];
    $key = 'asfsdfasfsd12-';   

    try {
        $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
    } catch (Exception $exception) {
        throw new Exception('user not login');
    }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>berhasil login</p>
    <a href="logout.php">logout</a>
</body>
</html>