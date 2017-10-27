<!DOCTYPE HTML>

<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Lab 4</title>
</head>
<body>
    <h1 class="heading">Lab 4</h1>
    <p class="sc"><a href="https://github.com/srojtas/cs0334/tree/master/lab4">Source Code</a></p>
    <?php
        if($_POST) {
            $outputString1 = "A " . $_POST["adj"] . " " . $_POST["creature"] . " " . $_POST["verb1"] . " in an " . $_POST["noun1"] . ".";
            $outputString2 = "The " . $_POST["pronoun1"] . " it " . $_POST["noun2"] . ", the " . $_POST["pronoun2"] . " it " . $_POST["verb2"] . ".";
            echo "<p>" . $outputString1 . "</p>";
            echo "<p>" . $outputString2 . "</p>";
        }
        else {
            echo '<form class="lab4Form" name="inputText" action="index.php" method="post">';
                echo '<label for="adj">Adjective: </label>';
                echo '<input type="text" name="adj" id="adj"><br>';
                echo '<label for="creature">Creature: </label>';
                echo '<input type="text" name="creature" id="creature"><br>';
                echo '<label for="noun1">Noun 1: </label>';
                echo '<input type="text" name="noun1" id="noun1"><br>';
                echo '<label for="noun2">Noun 2: </label>';
                echo '<input type="text" name="noun2" id="noun2"><br>';
                echo '<label for="verb1">Verb 1: </label>';
                echo '<input type="text" name="verb1" id="verb1"><br>';
                echo '<label for="verb2">Verb 2: </label>';
                echo '<input type="text" name="verb2" id="verb2"><br>';
                echo '<label for="pronoun1">Pronoun 1: </label>';
                echo '<input type="text" name="pronoun1" id="pronoun1"><br>';
                echo '<label for="pronoun2">Pronoun 2: </label>';
                echo '<input type="text" name="pronoun2" id="pronoun2"><br>';
                echo '<input type="submit" value="Submit">';
        }
    ?>
</body>

</html>