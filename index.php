<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day1_XP_Gold</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        $str = 'This is daddy\'s beautiful bike';
    ?>
    <p><?php echo "The length of the $str is"." ".strlen($str);?></p>
    <hr>
    <h1>Exercise 2</h1>
    <?php
        $str = 'This is daddy\'s beautiful bike';
        $len = str_word_count($str);
    ?>
    <p><?php echo $str." ". 'contains '." ". $len." ".'words in the string' ?></p>
    <hr>
    <h1>Exercise 3</h1>
     <p><?php echo strtoupper($str); ?></p>
     <hr>
</body>
</html>