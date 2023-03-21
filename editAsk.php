<?php
require('controllers/users/securityController.php');
require('controllers/questions/getInfosOfEditedAskController.php');
require('controllers/questions/editAskController.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php'; ?>

<body>
    <?php include 'templates/navbar.php'; ?>
    <br><br>
    <div class="container">
        <?php
        if (isset($errorMess)) {echo '<div class="alert alert-danger" role="alert">' . $errorMess . '</div>';}?>
        <?php
        if (isset($askContent)) {
        ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $askTitle;?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?= $askDescription;?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contenu</label>
                    <textarea class="form-control" id="content" name="content"><?= $askContent;?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="validate">Modifier</button>
            </form>
        <?php 
        }
        ?>

    </div>

</body>

</html>