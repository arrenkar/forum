<?php require 'controllers/users/signupController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php'; ?>

<body>
    <br><br>
    <form class="container" method="POST">

    <?php 
    
        if(isset($errorMess)){
            echo '<div class="alert alert-danger" role="alert">'.$errorMess.'</div>';
        }

    ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="inputUsername" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="inputLastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="inputFirstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword1" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        <br><br>
        <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a>
    </form>
</body>

</html>