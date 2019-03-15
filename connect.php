<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<?php

use Doctrine\DBAL\Driver\PDOException;

//connexion 

$port = 3307;
$user = "root";
$password = "";
$db = "filetransfer";

$dbh = dbConnect($user, $password, $port, $db);
createAccount($dbh);

function dbConnect(string $user, string $password, int $port, string $db): PDO
{
    $dbh = null;
    try {
        $dbh = new PDO("mysql:host=localhost;port=$port;dbname=$db", $user, $password, null);
        $dbh->exec("SET NAMES 'UTF8'");
    } catch (PDOException $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
    }
    return $dbh;
}


function createAccount(PDO $dbh)
{
    $login_name = $_POST['userName'] ?? '';
    $login_password = $_POST['passUser'] ?? '';
    $login_password_confirm = $_POST['passUser_confirmed'] ?? '';

    // on check si le login name et login pass ne sont pas vide :
    if ($login_name != "" && $login_password != "") {
        $sql_check_user = "SELECT username FROM user where username ='$login_name'";
        $stmt = $dbh->query($sql_check_user);

        if ($login_password == $login_password_confirm) {
            //on check que le tuple est vide
            if ($stmt->rowCount() == 0) {
                //on prépare la requête 
                $sql_insert_user = 'INSERT INTO user VALUES (null, "' . $login_name . '","' . $login_password . '");';
                echo "it works <br/>";
                $req = $dbh->prepare($sql_insert_user);
                //on execute la requete 
                $req->execute();
                echo "account created <br>";
                header('Location: start_session.php');
            } else {
                echo "<div ><p>Account profile already exist</p></div>";
                echo "</div><a class='btn btn-Info' href='index.php'>Retour</a>
                </body>";
            }
        } else {
            echo "password are not the same";
        }
    } else {
        echo "please, fill up your account information into the form <br/>";
    }
}



