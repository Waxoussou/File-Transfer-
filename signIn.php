<?php 

$port = 3307;
$user = "root";
$password = "";
$db = "filetransfer";

$dbh = dbConnect($user, $password, $port, $db);
connectAccount($dbh);

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


function connectAccount(PDO $dbh)
{
    $login_name = $_POST['login'] ?? '';
    $login_password = $_POST['pass'] ?? '';



    if ($login_name != "" && $login_password != "") {

        $sql_username = "SELECT * FROM user where username ='$login_name';";
        $req = $dbh->prepare($sql_username);
        $req->execute();
        $data = $req->fetchAll(); // tranformer en tableau
        var_dump($data);

        if ($login_name == $data[0][1] && $login_password == $data[0][2])
        {
            var_dump($login_password);
            var_dump($data[0][2]);
            // header('Location: start_session.php');
            // echo "it works";
        } else {
            echo "please verify your account information";
            include 'index.php';
        }
    } else {
        echo "please, fill up your account information to access your profile <br/>";
        include 'index.php';
    }
}
