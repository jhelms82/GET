<?php 
$first_name = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
$last_name = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_FLOAT);
$days = filter_input(INPUT_GET, 'days', FILTER_SANITIZE_NUMBER_FLOAT);

$days = $age * 365;



    ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Get Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>
<header>
Todays date:
<?php
echo   date("m/d/Y")
?>
</header>

<body>
    <form class="get" action="index.php" method="get">
    <?php
    if (empty($first_name)) {
    echo 'Please fill out all required fields';
    
} elseif (empty($last_name)) {
    echo 'Please fill out all required fields';
} elseif (empty($age)) {
    echo 'Please fill out all required fields';

}elseif ($age>= 18) {
       echo "<h2>My name is $first_name $last_name.</h2>" ;
       echo " <p>I am $age years old and I am old enough to vote in the United States.</p>";
       echo "<p> That means I am at least $days old</p>";
} else {
       echo "<h2>My name is $first_name $last_name. </h2>" ;
       echo "<p>I am $age years old and I am not old enough to vote in the United States.</p>";
       echo "<p>That means I am at least $days old.</p>";

}

    ?>

 
            </form>
</body>

</html>