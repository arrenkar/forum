<?php require('controllers/users/loginController.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php'; ?>

<body>
    <?php include 'templates/navbar.php';?>
    <br><br>
    <form class="container" method="POST">

        <?php

        if (isset($errorMess)) {
            echo '<div class="alert alert-danger" role="alert">' . $errorMess . '</div>';
        }

        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="inputUsername" name="username">
        </div>
       
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword1" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Connection</button>
        <br><br>
        <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris</p></a>
    </form>
</body>

</html>