<?php
require('controllers/users/securityController.php');
require('controllers/questions/myAskController.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php'; ?>

<body>
    <?php include 'templates/navbar.php'; ?>
    <br><br>
<div class="container">
    <?php

    while ($ask = $getAllAsk->fetch()) {
    ?>
        <div class="card">
            <div class="card-header">
                <?php echo $ask['title'];?>
            </div>
            <div class="card-body">
                
                <p class="card-text">
                    <?= 
                        $ask['description'];
                    ?>
                    </p>
                <a href="#" class="btn btn-primary">Accéder à la question</a>
                <a href="#" class="btn btn-warning">Modifier la question</a>
            </div>
        </div>
        <br><br>
    <?php
    }

    ?>
</div>
    

</body>

</html>