<?php 
require('controllers/users/securityController.php'); 
require('controllers/questions/askController.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php';?>
<body>
    <?php include 'templates/navbar.php';?>
    
<br><br>
    <form class="container" method="POST">

    <?php 
    
        if(isset($errorMess)){
            echo '<div class="alert alert-danger" role="alert">'.$errorMess.'</div>';
        }else if(isset($successMsg)){
            echo '<div class="alert alert-success" role="alert">'.$successMsg.'</div>';
        }

    ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contenu</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        

        <button type="submit" class="btn btn-primary" name="validate">Publier</button>
    </form>
</body>
</html>