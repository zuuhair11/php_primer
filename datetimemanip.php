<?php $title = "Date Time" ?>

<?php include('includes/header.php'); ?>

<h1><?php echo $title?></h1>
        
        <?php 

            $datenow = getdate();
            echo "Today's Date: <br>";

            echo $datenow['mday'] . "</p>";
            echo $datenow['mon'] . "</p>";
            echo $datenow['year'] . "</p>";

            echo $datenow['mon'] . "/"  . $datenow['mday'] ."/". $datenow['year'] . "<hr>";

            echo "time() This been since the computer start :" . time() . "<br><br>";

            print date('m/d/y') . "<br>";
            print date('M/D/Y/ h:mn:s a') . "<br>";







        
        
        ?>
   <?php require 'includes/footer.php'; ?>
