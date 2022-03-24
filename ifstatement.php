<?php $title = "If Statement" ?>
<?php include('includes/header.php'); ?>

<h1><?php echo $title?></h1>
        <?php 

            $grade = 50;
            if($grade >= 50) {
                echo '<h3 style="color: lime"> You have passed </h3>';

            } else {
                echo '<h3 style="color: red"> You have failed </h3>';

            }
        
        
        ?>
<?php require 'includes/footer.php'; ?>
