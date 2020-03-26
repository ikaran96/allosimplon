<?php
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style_ilayda.css">

    <!--GOOGLE FONTS-->

    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>

<body>

<?php 
include 'include/nav.php'; ?>


  <!-- zone de connexion -->

    <div id="container">
      

        <form action="verif.php" method="POST">
            <h2>Connexion</h2>

            <label><b>Nom d'utilisateur</b></label>
            <input class="login" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required> <br>

            <label><b>Email d'utilisateur</b></label>
            <input class="login" type="text" placeholder="Entrer le mail d'utilisateur" name="mail_user" required> <br>

            <label><b>Mot de passe</b></label>
            <input class="login"  type="password" placeholder="Entrer le mot de passe" name="password_user" required><br>

            <input class="ok"type="submit" id='submit' value='LOGIN'> <br>


            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            ?> 


        </form>
    </div>


<?php 
include 'include/footer.php'; ?>

</body>
</html>