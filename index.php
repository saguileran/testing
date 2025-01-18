<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Today's Date</title>
</head>

<body>
    <?php
    // Generate a random number between 10,000 and 99,999,999
    $d = rand(10000, 99999999);
    
    // Increment until divisible by 1623
    while ($d % 1623 != 0) {
        $d++;
    }
    
    // Display the result
    echo "Random value is " . $d;
    ?>
</body>

</html>
