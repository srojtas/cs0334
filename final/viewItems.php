<!DOCTYPE html>
<html lang="en">

<?php
     include 'header.php';
     include 'nav.php';
     include 'dbconn.php';
?>

    <title>CS334 Final - View Items</title>
    </head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h1>Items</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Made for</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $queryName = 'SELECT itemName, itemPrice, itemType FROM srojtas001_cs334final.inventory;';
                                    if ($result = mysqli_query($dbconnect, $queryName)) {
                                        while ($row = $result->fetch_assoc()) {
                                            $row = $result->fetch_row();
                                            $itemName = $row[0];
                                            $itemPrice = $row[1];
                                            $itemType = $row[2];
                                            echo "<tr>";
                                                echo "<td>" . $itemName . "</td>";
                                                echo "<td>" . $itemPrice . "</td>";
                                                echo "<td>" . $itemType . "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3"></div>
        </div>
    </div>
</body>

</html>