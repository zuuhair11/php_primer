<?php $title = "Array" ?>
<?php include('includes/header.php'); ?>

        <h1><?php echo $title?></h1>

        <?php 
            // a variable
            $num = 3;

            // an array
            // only one dataype
            $numbers = array(1,2,3,4,5,6,7,8,9,10,123,65,74,70,38,7);
            // you can only access using index
            echo $numbers[9];
            echo "<br>";
            // What abount if want to know the size of my array
            $size = count($numbers);
            echo "Array Number is size: $size";

            echo "<br><br>";
            for($i = 0; $i < $size; $i++) {
                echo "$numbers[$i] <br>";
            }
        
        ?>
   <?php require 'includes/footer.php'; ?>
