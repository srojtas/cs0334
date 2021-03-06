<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 10</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php
            include "dbconn.php";
        ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col xs-12">
                    <h1>Lab 10</h1>
                    <h2>View Customers</h2>
                    <h3><a href="index.php">Home</a></h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>ZIP</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $queryName = 'SELECT userName, address, city, state, zip, country, firstName, lastName, customerID FROM srojtas001_cs334lab10.customers;';
                                    if ($result = mysqli_query($dbconnect, $queryName)) {
                                        while ($row = $result->fetch_assoc()) {
                                            $row = $result->fetch_row();
                                            $firstName = $row[6];
                                            $lastName = $row[7];
                                            $userName = $row[0];
                                            $address = $row[1];
                                            $city = $row[2];
                                            $state = $row[3];
                                            $zip = $row[4];
                                            $country = $row[5];
                                            $customerID = $row[8];
                                            echo "<tr>";
                                                echo '<td><a href=edit.php?customerID=' . $customerID . '>Edit</a></td>';
                                                echo "<td>" . $firstName . "</td>";
                                                echo "<td>" . $lastName . "</td>";
                                                echo "<td>" . $userName . "</td>";
                                                echo "<td>" . $address . "</td>";
                                                echo "<td>" . $city . "</td>";
                                                echo "<td>" . $state . "</td>";
                                                echo "<td>" . $zip . "</td>";
                                                echo "<td>" . $country . "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>