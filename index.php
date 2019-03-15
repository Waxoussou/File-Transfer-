<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <?php

    ?>


    <div class="container">

        <div class="connexion">

            <h3 class="text-center">Connexion à l'espace membre</h3>
            <div class="form-group">
                <form action="signIn.php" method="post">
                    <h4>Login : <input type="text" class="form-control" name="login">
                    </h4>
                    <h4>Mot de passe :
                        <input type="password" class="form-control" name="pass">
                    </h4>
                    <input type="submit" name="connexion" class="btn btn-Info " value="Connexion">
                </form>
               <!-- <form action='deconnexion.php'><input type="submit" class="btn btn-Info " name="deconnexion" value="Déconnexion"> 
                </form> --> 
            </div>
        </div>

        <div class="inscription">

            <h3 class="text-center"> Inscription </h3>
            <form action="connect.php" method='post'>
                <div class="form-group">

                    <h4> username : <input type='text' class="form-control" name='userName'>
                    </h4>
                    <h4> Mot de passe :
                        <input type='password' class="form-control" name='passUser'>
                    </h4>
                    <h4> Confirmer mot de passe :
                        <input type='password' class="form-control" name='passUser_confirmed'>
                    </h4>
                    <input type="submit" class="btn btn-Info" name="inscription" value="S'inscrire">
                </div>
            </form>
        </div>




    </div>

</body>

</html> 