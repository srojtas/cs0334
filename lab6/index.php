<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 6</title>
    </head>
    <body>
        <h1>Lab 6</h1>
        <p><a href="https://github.com/srojtas/cs0334/tree/master/lab6">Source Code</a></p>
        <?php
            for($i = 1; $i <= 100; $i++) {
                if(($i % 3) == 0 && ($i % 5) == 0) {
                    echo '<p>' . $i . '. GoPitt</p>';
                } else if(($i % 3) == 0) {
                    echo '<p>' . $i . '. Go</p>';
                } else if(($i % 5) == 0) {
                    echo '<p>' . $i . '. Pitt</p>';
                } else {
                    echo '<p>' . $i . '.</p>';
                }
            }
        ?>
    </body>
</html>