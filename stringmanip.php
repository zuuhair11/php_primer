<?php $title = "String Manipulation" ?>
<?php include('includes/header.php'); ?>

<h1><?php echo $title?></h1>

        <?php 
            $phrase1 = "student who came late";
            $phrase2 = "in class, stand with Rock";

            echo $phrase1 . ' ' . $phrase2 . "<br><br>";

            $name = "zouhair sahtout ";
            echo ucwords($name);
            echo "<br>";
            echo strtoupper($name);
            echo "<br>";
            echo strtolower($name);

echo "<br>";
echo "<hr>";
            echo "Repeat String: " . ucwords(str_repeat($name, 3));

echo "<br>";
echo "<hr>";

// the first gab for start (from 0)
// the nest one is for where to end basically, i should start counuting from
// where i started indexing (start by one)
            echo substr($name, 3, 7);



echo "<br>";
echo "<hr>";
            echo "Now Using trim() and trim also has ltrim() and rtrim()";
            echo "<br><br>";

            echo "trim in both sides: " ."A" . trim("   B   ") . "C";

echo "<br><br>";

            echo "find the cahracter <b>h</b> and start from it :" . strchr($name, 'h');

echo "<br><br>";

            echo "The length of my sting is :" . strlen($name);

echo "<br><br>";

            echo "Get Position of string <b>z</b> : " . strpos($name, "z");
            
echo "<br><br>";

            echo "Replace string with anther: " . str_replace("sahtout", "eleven", $name);



        
        ?>


<?php require 'includes/footer.php'; ?>
