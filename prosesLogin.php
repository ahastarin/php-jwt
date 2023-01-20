<?php
require_once __DIR__ . "/vendor/autoload.php";

use Firebase\JWT\JWT;

// valid email & password
$email = "ahastarin@gmail.com";
$password = "password";

if(isset($_POST["submit"])){
    if($_POST["email"] === $email && $_POST["password"] === $password){
        $key = 'asfsdfasfsd12-';   

        $payload = [
            "name" => "Ahastarin",
            "role" => "Backend Developer"
        ];

        $jwt = JWT::encode($payload, $key, 'HS256');

        setcookie('X-USER-ID', $jwt, ['samesite' => 'none']);

        echo "<script>
            window.location.href='berhasilLogin.php';
        </script>";

    } else {
        echo "<script>
                alert('email / password salah');
                window.location.href = 'login.php';
            </script>";
    }
}
// signature key








