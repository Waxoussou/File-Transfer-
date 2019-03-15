

<html>
<head>
<title>Espace membre</title>
</head>

<body>
<?php
session_start();

echo $_SESSION['login'];

?>

<div class="transfer">

<h3 class="text-center"> File Transfer.com </h3>
<form action="#" method='post'>
    <div class="form-group">

        <h4> Select a file to transfer :
            <input type='file' class="form-control" name='passUser_confirmed'>
        </h4>
        <input type="submit" class="btn btn-Info" name="transfer" value="Transfer">
    </div>
</form>
</div>



<a href="deconnexion.php">Déconnexion</a>
</body>
</html>