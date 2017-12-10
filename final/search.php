<!DOCTYPE html>
<html lang="en">

<?php
     include 'header.php';
     include 'nav.php';
     include 'dbconn.php';
?>

    <title>CS334 Final - Search</title>
    </head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h1>Search</h1>
                    <form action="search.php" method="post">
                        <div class="form-group">
                            <label for="searchTerm">Search</label>
                            <input type="text" class="form-control" placeholder="Search word here" name="searchTerm" id="searchTerm">
                        </div>
                        <div class="form-group">
                            <label for="prodCategory">Product Category</label>
                            <select class="form-control" id="prodCategory" name="prodCategory">
                                <option>iPhone</option>
                                <option>iPad</option>
                                <option>Apple Watch</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
                    </form>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                </tr>
                            </thead>
                            <tbody>
                    
                    <?php
                        if($_POST) {
                            if($_POST["searchTerm"] != null) {
                                $query = 'SELECT itemName, itemPrice FROM srojtas001_cs334final.inventory WHERE itemName LIKE "%' . $_POST["searchTerm"] . '%" AND itemType LIKE "' . $_POST["prodCategory"] . '";';
                                            if ($result = mysqli_query($dbconnect, $query)) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $row = $result->fetch_row();
                                                    $itemName = $row[0];
                                                    $itemPrice = $row[1];
                                                    echo "<tr>";
                                                        echo "<td>" . $itemName . "</td>";
                                                        echo "<td>$" . $itemPrice . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
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