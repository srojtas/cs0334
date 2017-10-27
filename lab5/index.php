<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5</title>
    </head>
    <body>
        <h1>Lab 5</h1>
        <h2>Dice Game</h2>
        <p><a href="https://github.com/srojtas/cs0334/tree/master/lab5">Source Code</a></p>
        <form action="index.php" method="post">
            <label for="numOfDice">Select Number of Dice</label>
            <select name="numOfDice">
                <option></option>
                <?php
                    $numSelected = false;
                    for($i = 1; $i <= 6; $i++) {
                        echo '<option value="' . $i . '" id="numOfDice' . $i . '">' . $i . '</option>';
                    }
                ?>
            </select>
            <br>
            <label for="numGuessed">Select Number to Guess</label>
            <select name="numGuessed">
                <option></option>
                <?php
                    for($i = 1; $i <= 30; $i++) {
                        echo '<option value="' . $i . '" id="numGuessed' . $i . '">' . $i . '</option>';
                    }
                ?>
            </select>
            <br>
            <button type="submit">Submit</button>
        </form>
        <?php
            if($_POST && $_POST["numOfDice"] != null && $_POST["numGuessed"] != null) {
                $numOfDice = $_POST["numOfDice"];
                $numGuessed = $_POST["numGuessed"];
                $rand[] = array("","","","","","");
                $actualNum = 0;
                for($i = 1; $i <= $numOfDice; $i++) {
                    $rand[$i] = rand(1,6);
                    echo '<img src="img/' . $rand[$i] . '.png" name="die' . $i . '" alt="Die ' . $i . ' rolled a ' . $rand[$i] . '">';
                    $actualNum += $rand[$i];
                }
                echo '<p>You rolled ' . $numOfDice . ' dice with a total of ' . $actualNum . '.</p>';
                echo '<p>You guessed ' . $numGuessed . '.</p>';
                if($numGuessed == $actualNum)
                    echo '<p>Congratulations, you guessed correctly!</p>';
                else
                    echo'<p>Uh oh, you did not guess correctly. Try again?</p>';
            } else if($_POST) {
                echo '<p>Please answer the prompts above.</p>';
            }
        ?>
    </body>
</html>