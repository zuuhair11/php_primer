<?php $title = "For Loop" ?>

<?php include('includes/header.php'); ?>

<h1><?php echo $title?></h1>
        
        <?php 
            // FOR LOOP

            for($count = 0; $count < 10; $count++) {
                echo "$count => Hello <br>";
            }

            for($count = 0; $count < 5; $count++) {
                echo "<p>The count is : $count </p>";
            }
        
        
        ?>
<?php require 'includes/footer.php'; ?>
