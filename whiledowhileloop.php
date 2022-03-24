<?php $title = "While / Do WHile" ?>
<?php include('includes/header.php'); ?>

<h1><?php echo $title?></h1>

        <?php 
            $grade = 0;
            //=======> Infinite Loop

            // while($grade < 10) {
            //     echo "<p> I'm less than 10</p>";
            // }

            while($grade < 10) {
                echo "<p> I'm less than 10</p>";
                $grade++;
                
            }
            echo "EXIT LOOP (DONE)!";
        ?>


        <h1>Do-While Loop</h1>
        <?php 
            $grade = 0;

            do {
                echo "<p> I'm DO WHILE LOOP</p>";
                $grade++;

            } while($grade < 10);
            echo "EXIT LOOP (DONE)!";

            
            // Basically it will excute once, and then check the condition
        ?>
  <?php require 'includes/footer.php'; ?>
