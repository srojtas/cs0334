<!DOCTYPE html>
<html lang="en">

<?php
     include 'header.php';
     include 'nav.php';
     include 'dbconn.php';
?>

    <title>CS334 Final - View Customers</title>
    </head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h1>Users</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $queryName = 'SELECT firstName, lastName, userName FROM srojtas001_cs334final.users;';
                                    if ($result = mysqli_query($dbconnect, $queryName)) {
                                        while ($row = $result->fetch_assoc()) {
                                            $row = $result->fetch_row();
                                            $firstName = $row[0];
                                            $lastName = $row[1];
                                            $userName = $row[2];
                                            echo "<tr>";
                                                echo "<td>" . $firstName . "</td>";
                                                echo "<td>" . $lastName . "</td>";
                                                echo "<td>" . $userName . "</td>";
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