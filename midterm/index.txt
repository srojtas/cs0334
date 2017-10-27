<!DOCTYPE html>
<head>

    <title>Midterm Coding</title>

</head>

<?php

$months=array("January"=>"31", "February"=>"28", "March"=>"31", "April"=>"30", "May"=>"31", "June"=>"30", "July"=>"31", "August"=>"31", "September"=>"30", "October"=>"31", "November"=>"30", "December"=>"31");
ksort($months);
?>

<body>
    <p><a href="http://dev.rojtas.com/CS334/midterm/source.txt">Source</a></p>
<table>
    <tr>
        <th>Month</th>
        <th>Days</th>
    </tr>
    <?php
        foreach($months as $month=>$days) {
            echo '<tr>';
                echo '<td>' . $month . '</td>';
                echo '<td>' . $days . '</td>';
            echo '</tr>';
        }
    ?>
</table>
</body>