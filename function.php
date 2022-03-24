<?php $title = "Functions" ?>

<?php include('includes/header.php'); ?>

<h1><?php echo $title?></h1>

        <?php 
            function addFunction($num1, $num2) {
                $sum = $num1 + $num2;
                echo "The sum of $num1 and $num2 is $sum";
                $num2 = $num2 + 1;

            }
            addFunction(3, 2);
            // echo $num2; Undefiend variabl: num2 => cause is not global
            // So how I can modify it 

echo "<br><hr><br>";

            $num = 100;
            
            function changeNum(&$num) {
                echo "Actual value of num inside the function: $num <br><br>";
                $num += 10;
                echo "And now plus 10 is: $num <br><br>";

            }
            changeNum($num);
            //  Now I am gonna try to echo the num outside of the function
            echo "<br>This time am gonna try it outside of the variable using &:<br>";
            echo $num;



echo "<br><hr><br>";
            
            function returnProduct($num1, $num2) {
                $prod = $num1 * $num2;
                return $prod;

            }

            $returnValue = returnProduct(9, 11);

            echo $returnValue;
            

        
        
        ?>
<?php require 'includes/footer.php'; ?>
