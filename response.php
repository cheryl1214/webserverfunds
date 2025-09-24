<!DOCTYPE html>
<html>
    <head>
        <title>Form Response</title>
    </head>
    <body>
        <p>Your name is: <?= htmlspecialchars($_POST['fname']) . " " . 
            htmlspecialchars ($_POST['lname']) ?></p>
        <p>You are between <?= htmlspecialchars($_POST['birthyear']) ?> 
            years old</p>
        <p>The Web language you like best is: 
            <?= htmlspecialchars($_POST['fav_lang']) ?></p>
        <p>
            <?php
            if (!empty($_POST['trans'])) {
                $trans = array_map('htmlspecialchars', $_POST['trans']);
                $count = count($trans);
                if ($count === 1) {
                    echo "Your mean of transport is {$trans[0]}.";
                } elseif ($count === 2) {
                    echo "Your means of transport are {$trans[0]} and {$trans[1]}.";
                } elseif ($count === 3) {
                    echo "Your means of transport are {$trans[0]}, {$trans[1]}, and {$trans[2]}.";
                } else {
                    echo "Your means of transport are {$trans[0]}, {$trans[1]}, {$trans[2]}, and {$trans[3]}.";
                }
            } else {
                echo "You did not select any means of transport.";
            }
            ?>
        </p>
        <p>Your favorite quote is: <?= htmlspecialchars($_POST['quote']) ?></p>
    </body>
</html>